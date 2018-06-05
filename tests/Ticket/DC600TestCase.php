<?php
/*
 *  $Id$
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
 */

/**
 * Doctrine_Ticket_DC600_TestCase
 *
 * @package     Doctrine
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @category    Object Relational Mapping
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision$
 */
class Doctrine_Ticket_DC600_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables[] = 'DC600Model';
        $this->tables[] = 'DC600Cache';
        parent::prepareTables();
    }

    public function prepareData()
    {
    }

    public function tearDown()
    {
        // Wipe the listener
        $this->_conn->setListener(new Doctrine_EventListener());
        // Wipe the db cache which causes other tests to fail if they depend
        // on query counting
        $this->_conn->setAttribute(Doctrine::ATTR_QUERY_CACHE, null);
    }

    public function testInit()
    {
        $this->_conn = Doctrine_Manager::connection();

        // Set up the DB cache (uses same connection as rest of queries)
        $this->_cacheDriver = new Doctrine_Cache_Db(array('connection' => $this->_conn, 'tableName' => 'dc600_cache'));

        // We need a profiler in order to look at the executed queries and their bound parameters
        $this->_profiler = new Doctrine_Connection_Profiler();
        $this->_conn->setListener($this->_profiler);

        // Query cache (global)
        $this->_conn->setAttribute(Doctrine::ATTR_QUERY_CACHE, $this->_cacheDriver);
    }

    /**
     * With query cache enabled, and using the where() conditional with an IN array
     * the query cache should add a new entry in the cache for queries that have a different parameter count
     *
     * This test tests that the placeholder and parameter count match when the input array shrinks in length
     */
    public function testQueryCacheKeyNotModifiedForInWhereWithShrinkingArray()
    {
        $array = array(1, 2, 3, 4);

        $query = Doctrine_Query::create()
            ->from('DC600Model d')
            ->where('d.some_id IN ?', array($array));
        // Running this query will seed the cache
        $query->execute();

        // Change the number of elements in the array
        $array = array(1, 2, 3);

        $query = Doctrine_Query::create()
            ->from('DC600Model d')
            ->where('d.some_id IN ?', array($array));
        // This query should fetch the assembled query from the query cache (even though the paramter count is different)
        // When using the Mysql adapter, this particular query will throw a PDO exception, this apparently doesn't happen in sqlite though
        $query->execute();

        // Have to look in the profiler in order to compare the placeholder count with the parameter count (since no exception thrown)
        // I know we're not supposed to do assertions in a loop, but I didn't see any other way to do this
        // Calling ::getSqlQuery() on the Doctrine_Query object doesn't return the same value as the profiler because it doesn't fetch from the cache in that method (apparently)
        foreach ($this->_profiler as $event) {
            if ($event->getName() == 'execute') {
                // Only want to look at queries that have the model table name (ignore the cache queries)
                if (stristr($event->getQuery(), 'dc600_model')) {
                    $placeholderCount = substr_count($event->getQuery(), '?');
                    $parameterCount   = count($event->getParams());

                    // If the placeholder count and parameter count don't match, test fails
                    $this->assertEqual($placeholderCount, $parameterCount);
                }
            }
        }
    }

    /**
     * With query cache enabled, and using the where() conditional with an IN array
     * the query cache should add a new entry in the cache for queries that have a different parameter count
     *
     * This test will throw an exception because there are more bound parameters than there are placeholders
     */
    public function testQueryCacheKeyNotModifiedForInWhereWithGrowingArray()
    {
        $array = array(1, 2, 3, 4);

        $query = Doctrine_Query::create()
            ->from('DC600Model d')
            ->where('d.some_id IN ?', array($array));
        // Running this query will seed the cache
        $query->execute();

        // Change the number of elements in the array
        $array = array(1, 2, 3, 4, 5);

        $query = Doctrine_Query::create()
            ->from('DC600Model d')
            ->where('d.some_id IN ?', array($array));
        // This query should fetch the assembled query from the query cache (even though the paramter count is different)
        // this throws an exception in sqlite as well (whereas the shrinking array test above does not)
        $query->execute();
    }

    /**
     * Query cache hash should match if parameter count of all arrays is the same,
     * regardless of the parameter values
     */
    public function testQueryCacheKeyNotModifiedWithMultipleArraySameParameterCount()
    {
        $query = Doctrine_Query::create();

        $array = array(
            array(1, 2, 3, 4),
            array(1, 2, 3, 4, 5)
        );

        $hash = $query->calculateQueryCacheHash($array);

        $array = array(
            array(9, 8, 7, 6),
            array(5, 4, 3, 2, 1)
        );

        $this->assertEqual($hash, $query->calculateQueryCacheHash($array));
    }

    /**
     * Query cache hash should not match if parameter count of each array differs,
     * even if total parameter count remains the same
     */
    public function testQueryCacheKeyIsModifiedWithMultipleArrayDifferentParameterCount()
    {
        $query = Doctrine_Query::create();

        $array = array(
            array(1, 2, 3, 4),
            array(1, 2, 3, 4, 5)
        );

        $hash = $query->calculateQueryCacheHash($array);

        $array = array(
            array(1, 2, 3, 4, 5),
            array(1, 2, 3, 4)
        );

        $this->assertNotEqual($hash, $query->calculateQueryCacheHash($array));
    }

    public function testQueryCacheKeyNotModifiedForInWhereWithMultipleInClausesWithGrowingArray()
    {
        $array = array(1, 2, 3, 4);

        $query = Doctrine_Query::create()
            ->from('DC600Model d')
            ->where('d.some_id IN ?', array($array))
            ->andWhere('d.id IN ?', array($array));
        // Running this query will seed the cache
        $query->execute();

        // Change the number of elements in the array
        $array = array(1, 2, 3, 4, 5);

        $query = Doctrine_Query::create()
            ->from('DC600Model d')
            ->where('d.some_id IN ?', array($array))
            ->andWhere('d.id IN ?', array($array));
        // This query should fetch the assembled query from the query cache (even though the paramter count is different)
        // this throws an exception in sqlite as well (whereas the shrinking array test above does not)
        $query->execute();
    }
}

/**
 * Basic Model to query from
 */
class DC600Model extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dc600_model');
        $this->hasColumn('id', 'integer', 8, array(
             'type'          => 'integer',
             'fixed'         => 0,
             'unsigned'      => true,
             'primary'       => true,
             'autoincrement' => true,
             'length'        => '8',
             ));
        $this->hasColumn('some_id', 'integer', 8, array(
             'type'          => 'integer',
             'fixed'         => 0,
             'unsigned'      => true,
             'primary'       => false,
             'notnull'       => true,
             'autoincrement' => false,
             'length'        => '8',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    }
}

/**
 * Need this class so the Cache DB driver has a table to insert to
 */
class DC600Cache extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('dc600_cache');
        $this->hasColumn('id', 'string', 64, array(
             'type'          => 'string',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => true,
             'autoincrement' => false,
             'length'        => '64',
             ));
        $this->hasColumn('data', 'string', 3000, array(
             'type'          => 'string',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => false,
             'autoincrement' => false,
             'length'        => '3000',
             ));
        $this->hasColumn('expire', 'timestamp', 25, array(
             'type'          => 'timestamp',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => false,
             'notnull'       => false,
             'autoincrement' => false,
             'length'        => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    }
}
