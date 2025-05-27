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
 * Doctrine_Ticket_GH379_TestCase
 *
 * @package     Doctrine
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @category    Object Relational Mapping
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision$
 */
class Doctrine_Ticket_GH379_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables = array('Group_GH379', 'Character_GH379');
        parent::prepareTables();
    }

    public function prepareData()
    {
    }

    public function testTicket()
    {
        $query = new Doctrine_Query();

        $query->from('Character_GH379 c')
              ->leftJoin('c.group g')
              ->where('g.name = ?', 'test');

        $this->assertEqual(
            $query->getSqlQuery(),
            "SELECT c.id AS c__id, c.name AS c__name, c.group_id AS c__group_id, g.id AS g__id, g.name AS g__name FROM `Character_379` c LEFT JOIN `Group_379` g ON c.group_id = g.id WHERE (g.name = ?)"
        );
    }
}

class Group_GH379 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('`Group_379`');
        $this->hasColumn(
            'id',
            'integer',
            4,
            array('primary' => true,'autoincrement' => true)
        );
        $this->hasColumn('name', 'string', 64, array('notnull' => true));
    }

    public function setUp()
    {
    }
}

class Character_GH379 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('`Character_379`');
        $this->hasColumn(
            'id',
            'integer',
            4,
            array('primary' => true, 'autoincrement' => true)
        );
        $this->hasColumn('name', 'string', 64, array('notnull' => true));
        $this->hasColumn('group_id', 'integer', 4, array('notnull' => true));
    }

    public function setUp()
    {
        $this->hasOne('Group_GH379 as group', array(
            'local' => 'group_id',
            'foreign' => 'id'
        ));
    }
}