<?php
/*
 *  $Id: Notnull.php 1080 2007-02-10 18:17:08Z romanb $
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
 * Doctrine_Validator_Driver
 *
 * @package     Doctrine
 * @subpackage  Validator
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision: 1080 $
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 */
class Doctrine_Validator_Driver
{
    /**
     * @var array|null $args     an array of plugin specific args
     */
    public $args;

    /**
     * @var Doctrine_Record
     */
    public $invoker;

    /**
     * @var string|array
     */
    public $field;

    /**
     * __get
     * an alias for getOption
     *
     * @param string $arg
     * @return mixed
     */
    public function __get($arg)
    {
        if (isset($this->args[$arg])) {
            return $this->args[$arg];
        }
        return null;
    }

    /**
     * __isset
     *
     * @param string $arg
     */
    public function __isset($arg)
    {
        return isset($this->args[$arg]);
    }

    /**
     * sets given value to an argument
     *
     * @param string $arg          the name of the option to be changed
     * @param mixed $value        the value of the option
     * @return $this    this object
     */
    public function __set($arg, $value)
    {
        $this->args[$arg] = $value;

        return $this;
    }

    /**
     * returns the value of an argument
     *
     * @param string $arg          the name of the option to retrieve
     * @return mixed        the value of the option
     */
    public function getArg($arg)
    {
        if (! isset($this->args[$arg])) {
            throw new Doctrine_Validator_Exception(array('Unknown option ' . $arg));
        }

        return $this->args[$arg];
    }

    /**
     * sets given value to an argument
     *
     * @param string $arg          the name of the option to be changed
     * @param mixed $value        the value of the option
     * @return $this    this object
     */
    public function setArg($arg, $value)
    {
        $this->args[$arg] = $value;

        return $this;
    }

    /**
     * returns all args and their associated values
     *
     * @return array|null    all args as an associative array
     */
    public function getArgs()
    {
        return $this->args;
    }

    public function __toString()
    {
        $className = get_class($this);
        if (strpos($className, 'Doctrine_Validator_') === 0) {
            return strtolower(substr($className, 19));
        } else {
            return $className;
        }
    }
}
