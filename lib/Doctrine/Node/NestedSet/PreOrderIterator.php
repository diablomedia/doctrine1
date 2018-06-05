<?php
/*
 *  $Id: PreOrderIterator.php 7490 2010-03-29 19:53:27Z jwage $
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
 * Doctrine_Node_NestedSet_PreOrderIterator
 *
 * @package     Doctrine
 * @subpackage  Node
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision: 7490 $
 * @author      Joe Simms <joe.simms@websites4.com>
 */
class Doctrine_Node_NestedSet_PreOrderIterator implements Iterator
{
    /**
     * @var Doctrine_Collection $collection
     */
    protected $collection;

    /**
     * @var array $keys
     */
    protected $keys;

    /**
     * @var mixed $key
     */
    protected $key;

    /**
     * @var integer $index
     */
    protected $index;

    /**
     * @var integer $index
     */
    protected $prevIndex;

    /**
     * @var integer $index
     */
    protected $traverseLevel;

    /**
     * @var integer $count
     */
    protected $count;

    // These were undefined, added for static analysis and set to public so api isn't changed
    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $maxLevel;

    /**
     * @var array
     */
    public $options;

    /**
     * @var int
     */
    public $prevLeft;

    /**
     * @param Doctrine_Record $record
     * @param array $opts
     */
    public function __construct($record, $opts)
    {
        $componentName = $record->getTable()->getComponentName();

        $q = $record->getTable()->createQuery();

        $params = array($record->get('lft'), $record->get('rgt'));
        if (isset($opts['include_record']) && $opts['include_record']) {
            $query = $q->where("$componentName.lft >= ? AND $componentName.rgt <= ?", $params)->orderBy("$componentName.lft asc");
        } else {
            $query = $q->where("$componentName.lft > ? AND $componentName.rgt < ?", $params)->orderBy("$componentName.lft asc");
        }

        /** @var Doctrine_Tree_NestedSet $tree */
        $tree = $record->getTable()->getTree();
        /** @var Doctrine_Node_NestedSet $node */
        $node  = $record->getNode();
        $query = $tree->returnQueryWithRootId($query, $node->getRootValue());

        $this->maxLevel   = isset($opts['depth']) ? ($opts['depth'] + $node->getLevel()) : 0;
        $this->options    = $opts;
        $this->collection = isset($opts['collection']) ? $opts['collection'] : $query->execute();
        $this->keys       = $this->collection->getKeys();
        $this->count      = $this->collection->count();
        $this->index      = -1;
        $this->level      = $node->getLevel();
        $this->prevLeft   = $node->getLeftValue();

        // clear the table identity cache
        $record->getTable()->clear();
    }

    /**
     * rewinds the iterator
     *
     * @return void
     */
    public function rewind()
    {
        $this->index = -1;
        $this->key   = null;
    }

    /**
     * returns the current key
     *
     * @return mixed
     */
    public function key()
    {
        return $this->key;
    }

    /**
     * returns the current record
     *
     * @return Doctrine_Record
     */
    public function current()
    {
        $record = $this->collection->get($this->key);
        /** @var Doctrine_Node_NestedSet $node */
        $node = $record->getNode();
        $node->setLevel($this->level);
        return $record;
    }

    /**
     * advances the internal pointer
     *
     * @return false|Doctrine_Record
     */
    public function next()
    {
        while ($current = $this->advanceIndex()) {
            if ($this->maxLevel && ($this->level > $this->maxLevel)) {
                continue;
            }

            return $current;
        }

        return false;
    }

    /**
     * @return boolean                          whether or not the iteration will continue
     */
    public function valid()
    {
        return ($this->index < $this->count);
    }

    /**
     * @return int
     */
    public function count()
    {
        return $this->count;
    }

    /**
     * @return void
     */
    private function updateLevel()
    {
        if (! (isset($this->options['include_record']) && $this->options['include_record'] && $this->index == 0)) {
            /** @var Doctrine_Node_NestedSet $node */
            $node = $this->collection->get($this->key)->getNode();
            $left = $node->getLeftValue();
            $this->level += $this->prevLeft - $left + 2;
            $this->prevLeft = $left;
        }
    }

    /**
     * @return false|Doctrine_Record
     */
    private function advanceIndex()
    {
        $this->index++;
        $i = $this->index;
        if (isset($this->keys[$i])) {
            $this->key = $this->keys[$i];
            $this->updateLevel();
            return $this->current();
        }

        return false;
    }
}
