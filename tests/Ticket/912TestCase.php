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
 * Doctrine_Ticket_912_TestCase
 *
 * @package     Doctrine
 * @author      David Stendardi <david.stendardi@adenclassifieds.com>
 * @category    Object Relational Mapping
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision$
 */
class Doctrine_Ticket_912_TestCase extends Doctrine_UnitTestCase
{

  /**
   * prepareData
   */
    
    public function prepareData()
    {
        $oResume                                     = new ticket912_Resume;
        $oResume->title                              = 'titre';
        $oResume->Person->name                       = 'David';
        $oResume->KnownLanguages[0]->comments        = 'foo';
        $oResume->KnownLanguages[0]->Language->label = 'Enlish';
        $oResume->KnownLanguages[0]->Level->label    = 'Fluent';
        $oResume->save();
    }
    
    /**
     * prepareTables
     */
    
    public function prepareTables()
    {
        $this->tables   = array();
        $this->tables[] = 'ticket912_Resume';
        $this->tables[] = 'ticket912_Person';
        $this->tables[] = 'ticket912_ResumeHasLanguage';
        $this->tables[] = 'ticket912_LanguageLevel';
        $this->tables[] = 'ticket912_Language';
        
        parent :: prepareTables();
    }
    
    
    /**
     * Test the existence expected indexes
     */
    
    public function testTicket()
    {
        $q = new Doctrine_Query();

        // simple query with deep relations
        $q->addSelect('Resume.id, Person.id, Person.name, KnownLanguages.id, Level.label, Language.label')
          ->from('ticket912_Resume Resume')
          ->leftJoin('Resume.Person Person')
          ->leftJoin('Resume.KnownLanguages KnownLanguages')
          ->leftJoin('KnownLanguages.Level Level')
          ->leftJoin('KnownLanguages.Language Language');
        
        $aResult = $q->fetchArray();

        // should be setted..
        $issetLevel    = isset($aResult[0]['KnownLanguages'][0]['Level']);
        $issetLanguage = isset($aResult[0]['KnownLanguages'][0]['Language']);
        
        $this->assertTrue($issetLevel);
        $this->assertTrue($issetLanguage);
    }
}


/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */

class ticket912_Resume extends Doctrine_Record
{
    /**
   * setTableDefinition
   */
    
    public function setTableDefinition()
    {
        $this->setTableName('resume');
        $this->hasColumn('id', 'integer', 8, array(
          'primary'       => true,
          'autoincrement' => true,
          'unsigned'      => true,
          ));

        $this->hasColumn('person_id', 'integer', 8, array('unsigned' => true));
        $this->hasColumn('title', 'string', 255);
    }

    /**
     * setUp
     */
  
    public function setUp()
    {
        $this->hasMany('ticket912_ResumeHasLanguage as KnownLanguages', array('local' => 'id', 'foreign' => 'resume_id'));
    
        $this->hasOne('ticket912_Person as Person', array(
      'local'    => 'person_id',
      'foreign'  => 'id',
      'onDelete' => 'SET NULL',
      'onUpdate' => 'CASCADE'
      ));
    }
}

/**
 *  First level one to one relation class Language
 */
class ticket912_Person extends Doctrine_Record
{
    /**
     * setTableDefinition
     */
 
    public function setTableDefinition()
    {
        $this->setTableName('person');
        $this->hasColumn('id', 'integer', 8, array(
      'primary'       => true,
      'autoincrement' => true,
      'unsigned'      => true,
      ));

        $this->hasColumn('name', 'string', 255, array());
    }
}


/**
 *  Second level one to many relation class ResumeHasLanguageLanguage
 */

class ticket912_ResumeHasLanguage extends Doctrine_Record
{
    /**
     * setTableDefinition
     */
    
    public function setTableDefinition()
    {
        $this->setTableName('resume_has_language');
        $this->hasColumn('id', 'integer', 8, array(
          'primary'       => true,
          'autoincrement' => true,
          'unsigned'      => true,
          ));

        $this->hasColumn('resume_id', 'integer', 8, array(
          'notnull'  => true,
          'unsigned' => true,
          ));

        $this->hasColumn('language_id', 'integer', 2, array(
      'unsigned' => true,
      ));

        $this->hasColumn('language_level_id', 'integer', 2, array(
      'unsigned' => true,
      ));
    
        $this->hasColumn('comments', 'string', 4000, array());
    }

    /**
     * setUp
     */
  
    public function setUp()
    {
        $this->hasOne('ticket912_Resume as Resume', array('local' => 'resume_id',
                                  'foreign'                       => 'id',
                                  'onDelete'                      => 'CASCADE',
                                  'onUpdate'                      => 'CASCADE'));

        $this->hasOne('ticket912_Language as Language', array('local' => 'language_id',
                                    'foreign'                         => 'id',
                                    'onDelete'                        => 'CASCADE',
                                    'onUpdate'                        => 'CASCADE'));

        $this->hasOne('ticket912_LanguageLevel as Level', array('local' => 'language_level_id',
                                                  'foreign'             => 'id',
                                                  'onDelete'            => 'SET NULL',
                                                  'onUpdate'            => 'CASCADE'));
    }
}



/**
 *  Third level one to one relation class Language
 */
class ticket912_Language extends Doctrine_Record
{
    /**
     * setTableDefinition
     */
    
    public function setTableDefinition()
    {
        $this->setTableName('language');
        $this->hasColumn('id', 'integer', 2, array(
      'primary'       => true,
      'autoincrement' => true,
      'unsigned'      => true,
      ));

        $this->hasColumn('label', 'string', 100, array('notnull' => true));
    }

    /**
     * setup
     */
  
    public function setUp()
    {
        $this->hasMany('ticket912_Resume as Resumes', array('local' => 'id', 'foreign' => 'language_id'));
        $this->hasMany('ticket912_ResumeHasLanguage as ResumeKnownLanguages', array('local' => 'id', 'foreign' => 'language_id'));
    }
}

/**
 * Third level one to one relation class Language
 */

class ticket912_LanguageLevel extends Doctrine_Record
{
    /**
     * setTableDefinition
     */
    
    public function setTableDefinition()
    {
        $this->setTableName('language_level');
        $this->hasColumn('id', 'integer', 2, array(
          'primary'       => true,
          'autoincrement' => true,
          'unsigned'      => true,
          ));

        $this->hasColumn('label', 'string', 100, array('notnull' => true));
    }

    /**
     * setUp
     */
  
    public function setUp()
    {
        $this->hasMany('ticket912_ResumeHasLanguage as ResumeKnownLanguages', array(
      'local'   => 'id',
      'foreign' => 'language_level_id'));
    }
}
