<?php
/*
 *  $Id: Column.php 7663 2010-06-08 19:00:08Z jwage $
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
 * Doctrine_Column
 * This class represents a database column
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @package     Doctrine
 * @subpackage  Column
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @version     $Revision: 7663 $
 * @link        www.doctrine-project.org
 * @since       1.0
 */
class Doctrine_Column extends Doctrine_Access implements IteratorAggregate, Countable
{
    /**
     * @var array $_definition  @see getDefinition()
     */
    protected $_definition = array(
                                'type'   => null,
                                'length' => 0,
                                );

    /**
     * @param array $definition  @see getDefinition()
     */
    public function __construct(array $definition = array())
    {
        $this->_definition = $definition;
    }

    /**
     * Returns the definition of the column.
     *
     * Keys can be:
     *     string type,
     *     integer length,
     *     array values (only for enum fields, maps integer indexes to mixed values),
     * @return array
     */
    public function getDefinition()
    {
        return $this->_definition;
    }

    /**
     * contains
     *
     * @param string $offset
     * @return boolean
     */
    public function contains($offset)
    {
        return isset($this->_definition[$offset]);
    }

    /**
     * get
     *
     * @param string $offset
     * @return mixed
     */
    public function get($offset)
    {
        if (! isset($this->_definition[$offset])) {
            return null;
        }

        return $this->_definition[$offset];
    }

    /**
     * set
     *
     * @param string $offset
     * @param mixed $value
     * @return void
     */
    public function set($offset, $value)
    {
        $this->_definition[$offset] = $value;
    }

    /**
     * @return array
     */
    public function getEnumValues()
    {
        if (isset($this->_definition['values'])) {
            return $this->_definition['values'];
        } else {
            return array();
        }
    }

    /**
     * Retrieves an enum value.
     *
     * @param integer|Doctrine_Null $index
     * @return string|false       integer ($index) if not present
     */
    public function enumValue($index)
    {
        if ($index instanceof Doctrine_Null) {
            return false;
        }

        return isset($this->_definition['values'][$index]) ? $this->_definition['values'][$index] : false;
    }

    /**
     * enumIndex
     *
     * @param string $field
     * @param mixed $value
     * @return mixed
     */
    public function enumIndex($field, $value)
    {
        $values = $this->getEnumValues();

        return array_search($value, $values);
    }

    /**
     * count
     *
     * @return integer
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->_definition);
    }

    /**
     * getIterator
     *
     * @return ArrayIterator
     */
    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        return new ArrayIterator($this->_definition);
    }
}
