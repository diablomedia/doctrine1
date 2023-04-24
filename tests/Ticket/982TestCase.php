<?php
/*
 * Test to ensure LocalKey Relations allow 0 for id value
 */
class Doctrine_Ticket_982_TestCase extends Doctrine_UnitTestCase
{
    protected $myModelOne;
    protected $myModelTwo;

    public function prepareTables()
    {
        $this->tables   = array();
        $this->tables[] = 'T982_MyModel';
        parent::prepareTables();
    }

    public function prepareData()
    {
        $myModelZero           = new T982_MyModel();
        $myModelZero->id       = 0;
        $myModelZero->parentid = 0;
        $myModelZero->save();
        $this->assertIdentical(0, $myModelZero->id);

        $this->myModelOne           = new T982_MyModel();
        $this->myModelOne->id       = 1;
        $this->myModelOne->parentid = 0;
        $this->myModelOne->save();

        $this->myModelTwo           = new T982_MyModel();
        $this->myModelTwo->id       = 2;
        $this->myModelTwo->parentid = 1;
        $this->myModelTwo->save();
    }

    public function testTicket()
    {
        $this->conn->getTable('T982_MyModel')->clear();

        $myModelZero = $this->conn->getTable('T982_MyModel')->find(0);

        $this->assertEqual($myModelZero->id, 0);
        $this->assertEqual($myModelZero->parentid, 0);
        $this->assertTrue($myModelZero->parent->exists());
        $this->assertTrue(ctype_digit((string) $myModelZero->parent->id));
        $this->assertIdentical($myModelZero, $myModelZero->parent);
        $this->assertEqual($myModelZero->parent->id, '0');
        $this->assertEqual($myModelZero->parent->parentid, '0');

        $myModelOne = $this->conn->getTable('T982_MyModel')->find(1);

        $this->assertEqual($myModelOne->id, '1');
        $this->assertEqual($myModelOne->parentid, '0');
        $this->assertTrue($myModelOne->parent->exists());
        $this->assertTrue(ctype_digit((string) $myModelOne->parent->id));
        $this->assertEqual($myModelOne->parent->id, '0');
        $this->assertEqual($myModelOne->parent->parentid, '0');

        $myModelTwo = $this->conn->getTable('T982_MyModel')->find(2);

        $this->assertEqual($myModelTwo->id, '2');
        $this->assertEqual($myModelTwo->parentid, '1');
        $this->assertEqual($myModelTwo->parent->id, '1');
        $this->assertEqual($myModelTwo->parent->parentid, '0');
    }
}

class T982_MyModel extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 4, array('primary' => true, 'notnull' => true));
        $this->hasColumn('parentid', 'integer', 4, array('notnull' => true));
    }

    public function setUp()
    {
        $this->hasOne('T982_MyModel as parent', array('local' => 'parentid', 'foreign' => 'id'));
    }
}
