<?php
/*
 *  $Id: Tree.php 7490 2010-03-29 19:53:27Z jwage $
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
 * Doctrine_Tree
 *
 * @package     Doctrine
 * @subpackage  Tree
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision: 7490 $
 * @author      Joe Simms <joe.simms@websites4.com>
 */
class Doctrine_Tree
{
    /**
     * @var Doctrine_Table $table   reference to associated Doctrine_Table instance
     */
    protected $table;

    /**
     * @var array $options
     */
    protected $options = array();

    /**
     * @var string
     */
    protected $_baseComponent;

    /**
     * constructor, creates tree with reference to table and any options
     *
     * @param Doctrine_Table $table                     instance of Doctrine_Table
     * @param array $options                    options
     */
    public function __construct(Doctrine_Table $table, $options)
    {
        $this->table          = $table;
        $this->options        = $options;
        $this->_baseComponent = $table->getComponentName();
        $class                = $this->_baseComponent;
        if ($table->getOption('inheritanceMap')) {
            $subclasses = $table->getOption('subclasses');
            while (in_array($class, $subclasses)) {
                $class = get_parent_class($class);
                if (!$class) {
                    $class = '';
                }
            }
            $this->_baseComponent = $class;
        }
        //echo $this->_baseComponent;
    }

    /**
     * Used to define table attributes required for the given implementation
     *
     * @throws Doctrine_Tree_Exception          if table attributes have not been defined
     *
     * @return void
     */
    public function setTableDefinition()
    {
        throw new Doctrine_Tree_Exception('Table attributes have not been defined for this Tree implementation.');
    }

    /**
     * this method is used for setting up relations and attributes and should be used by specific implementations
     *
     * @return void
     */
    public function setUp()
    {
    }

    /**
     * Factory method to create a Tree.
     *
     * This is a factory method that returns a tree instance based upon
     * chosen implementation.
     *
     * @param Doctrine_Table $table                     instance of Doctrine_Table
     * @param string $implName                   implementation (NestedSet, AdjacencyList, MaterializedPath)
     * @param array $options                    options
     * @return Doctrine_Tree
     * @throws Doctrine_Exception               if class $implName does not extend Doctrine_Tree
     */
    public static function factory(Doctrine_Table $table, $implName, $options = array())
    {
        /** @phpstan-var class-string<Doctrine_Tree> $class */
        $class = 'Doctrine_Tree_' . $implName;
        if (! class_exists($class)) {
            throw new Doctrine_Exception('The chosen class must extend Doctrine_Tree');
        }
        return new $class($table, $options);
    }

    /**
     * gets tree attribute value
     * @param string $name
     * @return null|mixed
     */
    public function getAttribute($name)
    {
        return isset($this->options[$name]) ? $this->options[$name] : null;
    }

    /**
     * sets tree attribute value
     *
     * @param mixed $value
     * @param string $name
     *
     * @return void
     */
    public function setAttribute($name, $value)
    {
        $this->options[$name] = $value;
    }

    /**
     * Returns the base tree component.
     * @return string
     */
    public function getBaseComponent()
    {
        return $this->_baseComponent;
    }
}
