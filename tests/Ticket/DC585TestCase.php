<?php

/**
 * Doctrine_Ticket_585_TestCase
 *
 * @package     Doctrine
 * @author      Jay Klehr <jay@diablomedia.com>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @category    Object Relational Mapping
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision$
 */

class Doctrine_Ticket_DC585_TestCase extends Doctrine_UnitTestCase
{
    public function setUp()
    {
        $this->dbh  = new Doctrine_Adapter_Mock('mysql');
        $this->conn = Doctrine_Manager::getInstance()->openConnection($this->dbh);
        $this->conn->setAttribute(Doctrine::ATTR_QUOTE_IDENTIFIER, true);
    }

    public function prepareTables()
    {
        $this->tables = array('DC585Site', 'DC585PlaceholderValues', 'DC585Placeholder', 'DC585Page', 'DC585PagesPlaceholders');
        parent::prepareTables();
    }

    public function prepareData()
    {
        $site       = new DC585Site();
        $site->id   = '1';
        $site->name = 'Test Site';
        $site->save();

        $placeholder              = new DC585Placeholder();
        $placeholder->id          = 1;
        $placeholder->placeholder = 'test';
        $placeholder->save();
    }

    public function testExtraQuotesArentAddedToIdentifiers()
    {
        $query = Doctrine_Query::create()
            ->select('pv.value as value, p.placeholder as placeholder, pp.page_id as page_id')
            ->from('DC585PlaceholderValues pv')
            ->leftJoin('pv.DC585Placeholder p')
            ->leftJoin('p.DC585PagesPlaceholders pp')
            ->andWhere('pv.site_id = ?', 1);

        // We want to make sure that triple back ticks aren't present
        // as that was the side effect of the original change made for DC585
        // for this particular query.  Not checking the exact result of the query
        // as it's a more fragile test case in the event that the order of parameters
        // selected is ever changed in doctrine core
        $this->assertFalse(
            strpos($query->getSqlQuery(), '```')
        );
    }
}

class DC585Site extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('Sites');
        $this->hasColumn('id', 'string', 8, array(
             'type'          => 'string',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => true,
             'autoincrement' => false,
             'length'        => '8',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type'          => 'string',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => false,
             'notnull'       => true,
             'autoincrement' => false,
             'length'        => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DC585PlaceholderValues as Placeholders', array(
             'local'   => 'id',
             'foreign' => 'site_id'));
    }
}

class DC585PlaceholderValues extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('Placeholders_Values');
        $this->hasColumn('id', 'integer', 4, array(
             'type'          => 'integer',
             'fixed'         => 0,
             'unsigned'      => true,
             'primary'       => true,
             'autoincrement' => true,
             'length'        => '4',
             ));
        $this->hasColumn('site_id', 'string', 8, array(
             'type'          => 'string',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => false,
             'notnull'       => true,
             'autoincrement' => false,
             'length'        => '8',
             ));
        $this->hasColumn('placeholder_id', 'integer', 4, array(
             'type'          => 'integer',
             'fixed'         => 0,
             'unsigned'      => true,
             'primary'       => false,
             'notnull'       => true,
             'autoincrement' => false,
             'length'        => '4',
             ));
        $this->hasColumn('value', 'string', null, array(
             'type'          => 'string',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => false,
             'notnull'       => true,
             'autoincrement' => false,
             'length'        => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DC585Site', array(
             'local'   => 'site_id',
             'foreign' => 'id'));

        $this->hasOne('DC585Placeholder', array(
             'local'   => 'placeholder_id',
             'foreign' => 'id'));
    }
}

class DC585Page extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('Pages');
        $this->hasColumn('id', 'string', 8, array(
             'type'          => 'string',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => true,
             'autoincrement' => false,
             'length'        => '8',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type'          => 'string',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => false,
             'notnull'       => true,
             'autoincrement' => false,
             'length'        => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DC585Placeholder as Placeholders', array(
             'refClass' => 'PagesPlaceholders',
             'local'    => 'page_id',
             'foreign'  => 'placeholder_id'));
    }
}

class DC585Placeholder extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('PlaceholderKeys');
        $this->hasColumn('id', 'integer', 4, array(
             'type'          => 'integer',
             'fixed'         => 0,
             'unsigned'      => true,
             'primary'       => true,
             'autoincrement' => true,
             'length'        => '4',
             ));
        $this->hasColumn('placeholder', 'string', 255, array(
             'type'          => 'string',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => false,
             'notnull'       => true,
             'autoincrement' => false,
             'length'        => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DC585Page', array(
             'refClass' => 'DC585PagesPlaceholders',
             'local'    => 'placeholder_id',
             'foreign'  => 'page_id'));

        $this->hasMany('DC585PlaceholderValues', array(
             'local'   => 'id',
             'foreign' => 'placeholder_id'));
    }
}

class DC585PagesPlaceholders extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('Pages_Placeholders');
        $this->hasColumn('id', 'integer', 10, array(
             'type'          => 'integer',
             'fixed'         => 0,
             'unsigned'      => true,
             'primary'       => true,
             'autoincrement' => true,
             'length'        => '10',
             ));
        $this->hasColumn('page_id', 'string', 8, array(
             'type'          => 'string',
             'fixed'         => 0,
             'unsigned'      => false,
             'primary'       => true,
             'autoincrement' => false,
             'length'        => '8',
             ));
        $this->hasColumn('placeholder_id', 'integer', 4, array(
             'type'          => 'integer',
             'fixed'         => 0,
             'unsigned'      => true,
             'primary'       => false,
             'notnull'       => true,
             'autoincrement' => false,
             'length'        => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    }
}
