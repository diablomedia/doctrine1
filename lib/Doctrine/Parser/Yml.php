<?php
/*
 *  $Id: Yml.php 1080 2007-02-10 18:17:08Z jwage $
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

use Symfony\Component\Yaml\Yaml;

/**
 * Doctrine_Parser_Yml
 *
 * @package     Doctrine
 * @subpackage  Parser
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision: 1080 $
 * @author      Jonathan H. Wage <jwage@mac.com>, Thomas Courbon <harthie@yahoo.fr>
 */
class Doctrine_Parser_Yml extends Doctrine_Parser
{
    /**
     * dumpData
     *
     * Dump an array of data to a specified path or return
     *
     * @throws Doctrine_Parser_Exception dumping error
     * @param  array $array Array of data to dump to yaml
     * @param  string $path  Path to dump the yaml to
     * @param string $charset
     * @return int|false|string
     */
    public function dumpData($array, $path = null, $charset = null)
    {
        try {
            $data = Yaml::dump($array, 6);

            return $this->doDump($data, $path);
        } catch (Exception $e) {
            // rethrow the exceptions
            $rethrowed_exception = new Doctrine_Parser_Exception($e->getMessage(), $e->getCode());

            throw $rethrowed_exception;
        }
    }

    /**
     * loadData
     *
     * Load and parse data from a yml file
     *
     * @throws Doctrine_Parser_Exception parsing error
     * @param  string  $array  Path to load yaml data from
     * @return array   $array Array of parsed yaml data
     */
    public function loadData($array)
    {
        try {
            /*
             * I still use the doLoad method even if Yaml can load yml from a file
             * since this way Doctrine can handle file on it own.
             */
            $contents = $this->doLoad($array);

            $array = Yaml::parse($contents);

            return $array;
        } catch (Exception $e) {
            // rethrow the exceptions
            $rethrowed_exception = new Doctrine_Parser_Exception($e->getMessage(), $e->getCode());

            throw $rethrowed_exception;
        }
    }
}
