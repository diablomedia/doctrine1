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
 * Doctrine_I18nRelation_TestCase
 *
 * @package     Doctrine
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @category    Object Relational Mapping
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision$
 */
class Doctrine_Ticket_DC356_TestCase extends Doctrine_UnitTestCase
{
    //private $p1;
    //private $p2;
    //private $p3;

    public function prepareData()
    {
        $p1         = new DC356Page();
        $p1['name'] = 'Test Page 1';
        $p1->save();
        //$this->p1 = $p1;

        $p2         = new DC356Page();
        $p2['name'] = 'Test Page 2';
        $p2->save();
        //$this->p2 = $p2;

        $p3         = new DC356Page();
        $p3['name'] = 'Test Page 3';
        $p3->save();
        //$this->p3 = $p3;

        $pp1              = new DC356Page_Page();
        $pp1['parent_id'] = 1;
        $pp1['child_id']  = 2;
        $pp1->save();

        $pp2              = new DC356Page_Page();
        $pp2['parent_id'] = 1;
        $pp2['child_id']  = 3;
        $pp2->save();
    }

    public function prepareTables()
    {
        $this->tables = array('DC356Page', 'DC356Page_Page');
        parent::prepareTables();
    }

    public function testTicket()
    {
        $p1 = Doctrine_Core::getTable('DC356Page')->find(1);

        $p1->Children;

        /*$q1 = new Doctrine_Query();
        $q1->select('p.*');
        $q1->from('Testing_Product p');
        $q1->where('p.id = ?', $this->p1['id']);
        $q1->addSelect('a.*, ad.*');
        $q1->leftJoin('p.Attributes a');
        $q1->leftJoin('a.Definition ad');

        $q2 = new Doctrine_Query();
        $q2->select('p.*');
        $q2->from('Testing_Product p');
        $q2->where('p.id = ?', $this->p2['id']);
        $q2->addSelect('a.*, ad.*');
        $q2->leftJoin('p.Attributes a');
        $q2->leftJoin('a.Definition ad');

        // This query works perfect
        $r1 = $q1->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
        //var_dump($r1);
        // This query throws an exception!!!
        $r2 = $q2->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
        //$r2 = $q2->execute();
        //var_dump($r2);*/
    }
}

class DC356Page extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('Pages');
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
        $this->hasMany('DC356Page as Children', array(
            'local'    => 'parent_id',
            'foreign'  => 'child_id',
            'refClass' => 'DC356Page_Page'
        ));
        $this->hasMany('DC356Page as Parents', array(
            'local'    => 'child_id',
            'foreign'  => 'parent_id',
            'refClass' => 'DC356Page_Page'
        ));
    }
}

class DC356Page_Page extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('Pages_Pages');
        $this->hasColumn(
            'id',
            'integer',
            4,
            array('primary' => true,'autoincrement' => true)
        );
        $this->hasColumn('parent_id', 'integer', 4, array());
        $this->hasColumn('child_id', 'integer', 4, array());
    }
}
