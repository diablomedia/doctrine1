<?php
/*
 *  $Id: Mock.php 7490 2010-03-29 19:53:27Z jwage $
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
 * Doctrine mock connection adapter. This class is used for special testing purposes.
 *
 * @package     Doctrine
 * @subpackage  Adapter
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision: 7490 $
 */
class Doctrine_Adapter_Mock implements Doctrine_Adapter_Interface, Countable
{
    /**
     * Name of the dbms to mock
     *
     * @var string
     */
    private $_name;

    /**
     * Array of queries executed through this instance of the mock adapter
     *
     * @var array $_queries
     */
    private $_queries = array();

    /**
     * Array of exceptions thrown
     *
     * @var array $_exception
     */
    private $_exception = array();

    /**
     * Bool true/false variable for whether or not the last insert failed
     *
     * @var boolean $_lastInsertIdFail
     */
    private $_lastInsertIdFail = false;

    /**
     * Doctrine mock adapter constructor
     *
     * <code>
     * $conn = new Doctrine_Adapter_Mock('mysql');
     * </code>
     *
     * @param string $name
     * @return void
     */
    public function __construct($name = null)
    {
        $this->_name = $name;
    }

    /**
     * Get the name of the dbms used in this instance of the mock adapter
     *
     * @return string $name Name of the dbms
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Pop the last executed query from the array of executed queries and return it
     *
     * @return string $sql Last executed sql string
     */
    public function pop()
    {
        return array_pop($this->_queries);
    }

    /**
     * Force an exception in to the array of exceptions
     *
     * @param string $name     Name of exception
     * @param string $message  Message for the exception
     * @param integer $code    Code of the exception
     * @return void
     */
    public function forceException($name, $message = '', $code = 0)
    {
        $this->_exception = array($name, $message, $code);
    }

    /**
     * Prepare a query statement
     *
     * @param string $prepareString   Query to prepare
     * @return Doctrine_Adapter_Statement_Mock $mock Mock prepared statement
     */
    public function prepare($prepareString)
    {
        $mock              = new Doctrine_Adapter_Statement_Mock($this);
        $mock->queryString = $prepareString;

        return $mock;
    }

    /**
     * Add query to the stack of executed queries
     *
     * @param string $query
     * @return void
     */
    public function addQuery($query)
    {
        $this->_queries[] = $query;
    }

    /**
     * Fake the execution of query and add it to the stack of executed queries
     *
     * @param string $queryString
     * @return Doctrine_Adapter_Statement_Mock $stmt
     */
    public function query($queryString)
    {
        $this->_queries[] = $queryString;

        $e = $this->_exception;

        if (! empty($e)) {
            $name = $e[0];

            $this->_exception = array();

            /** @var Exception $exception */
            $exception = new $name($e[1], $e[2]);

            throw $exception;
        }

        $stmt              = new Doctrine_Adapter_Statement_Mock($this);
        $stmt->queryString = $queryString;

        return $stmt;
    }

    /**
     * Get all the executed queries
     *
     * @return array $queries Array of all executed queries
     */
    public function getAll()
    {
        return $this->_queries;
    }

    /**
     * Quote a value for the dbms
     *
     * @param string $input
     * @return string $quoted
     */
    public function quote($input)
    {
        return "'" . addslashes($input) . "'";
    }

    /**
     * Execute a raw sql statement
     *
     * @param string $statement
     * @return int
     */
    public function exec($statement)
    {
        $this->_queries[] = $statement;

        $e = $this->_exception;

        if (! empty($e)) {
            $name = $e[0];

            $this->_exception = array();

            /** @var Exception $exception */
            $exception = new $name($e[1], $e[2]);

            throw $exception;
        }

        return 0;
    }

    /**
     * Force last insert to be failed
     *
     * @param boolean $fail
     * @return void
     */
    public function forceLastInsertIdFail($fail = true)
    {
        if ($fail) {
            $this->_lastInsertIdFail = true;
        } else {
            $this->_lastInsertIdFail = false;
        }
    }

    /**
     * Get the id of the last inserted record
     *
     * @return integer|null $id
     */
    public function lastInsertId()
    {
        $this->_queries[] = 'LAST_INSERT_ID()';
        if ($this->_lastInsertIdFail) {
            return null;
        } else {
            return 1;
        }
    }

    /**
     * Get the number of queries executed
     *
     * @return integer $count
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->_queries);
    }

    /**
     * Begin a transaction
     *
     * @return bool
     */
    public function beginTransaction()
    {
        $this->_queries[] = 'BEGIN TRANSACTION';

        return true;
    }

    /**
     * Commit a transaction
     *
     * @return bool
     */
    public function commit()
    {
        $this->_queries[] = 'COMMIT';

        return true;
    }

    /**
     * Rollback a transaction
     *
     * @return bool
     */
    public function rollBack()
    {
        $this->_queries[] = 'ROLLBACK';

        return true;
    }

    /**
     * @param string|int $attribute
     * @return string|null
     */
    public function getAttribute($attribute)
    {
        if ($attribute == Doctrine_Core::ATTR_DRIVER_NAME) {
            return strtolower($this->_name);
        }

        return null;
    }

    /**
     * @return int
     */
    public function errorCode()
    {
        return 0;
    }

    /**
     * @return string
     */
    public function errorInfo()
    {
        return '';
    }

    /**
     * @param string|int $attribute
     * @param mixed $value
     * @return bool
     */
    public function setAttribute($attribute, $value)
    {
        return true;
    }

    /**
     * @return void
     */
    public function sqliteCreateFunction()
    {
    }
}
