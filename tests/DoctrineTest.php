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
 * Doctrine_UnitTestCase
 *
 * @package     Doctrine
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author      Bjarte S. Karlsen <bjartka@pvv.ntnu.no>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @category    Object Relational Mapping
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision$
 */

require_once dirname(__FILE__) . '/DoctrineTest/UnitTestCase.php';
require_once dirname(__FILE__) . '/DoctrineTest/GroupTest.php';
require_once dirname(__FILE__) . '/DoctrineTest/Doctrine_UnitTestCase.php';
require_once dirname(__FILE__) . '/DoctrineTest/Reporter.php';

class DoctrineTest
{
    protected $testGroup; // the default test group
    protected $groups;

    public function __construct()
    {
        $this->requireModels();
        $this->testGroup = new GroupTest('Doctrine Unit Tests', 'main');
    }

    /**
     * Add a test to be run.
     *
     * This is a thin wrapper around GroupTest that also store the testcase in
     * this class so that it is easier to create custom groups
     *
     * @param UnitTestCase A test case
     */
    public function addTestCase($testCase)
    {
        $this->groups[$testCase->getName()] = $testCase;
        $this->testGroup->addTestCase($testCase);
    }

    /**
     * Run the tests
     *
     * This method will run the tests with the correct Reporter. It will run
     * grouped tests if asked to and filter results. It also has support for
     * running coverage report.
     *
     */
    public function run()
    {
        $testGroup = $this->testGroup;
        if (PHP_SAPI === 'cli') {
            require_once(dirname(__FILE__) . '/DoctrineTest/Reporter/Cli.php');
            $reporter = new DoctrineTest_Reporter_Cli();
            $argv     = $_SERVER['argv'];
            array_shift($argv);
            $options = $this->parseOptions($argv);
        } else {
            require_once(dirname(__FILE__) . '/DoctrineTest/Reporter/Html.php');
            $options = $_GET;
            if (isset($options['filter'])) {
                if (! is_array($options['filter'])) {
                    $options['filter'] = explode(',', $options['filter']);
                }
            }
            if (isset($options['group'])) {
                if (! is_array($options['group'])) {
                    $options['group'] = explode(',', $options['group']);
                }
            }
            $reporter = new DoctrineTest_Reporter_Html();
        }

        //replace global group with custom group if we have group option set
        if (isset($options['group'])) {
            $testGroup = new GroupTest('Doctrine Custom Test', 'custom');
            foreach ($options['group'] as $group) {
                if (isset($this->groups[$group])) {
                    $testGroup->addTestCase($this->groups[$group]);
                } elseif (class_exists($group)) {
                    $testGroup->addTestCase(new $group);
                } else {
                    die($group . " is not a valid group or doctrine test class\n ");
                }
            }
        }

        if (isset($options['ticket'])) {
            $testGroup = new GroupTest('Doctrine Custom Test', 'custom');
            foreach ($options['ticket'] as $ticket) {
                $class = 'Doctrine_Ticket_' . $ticket . '_TestCase';
                $testGroup->addTestCase(new $class);
            }
        }

        $filter = '';
        if (isset($options['filter'])) {
            $filter = $options['filter'];
        }

        //show help text
        if (isset($options['help'])) {
            $availableGroups = sort(array_keys($this->groups));

            echo "Doctrine test runner help\n";
            echo "===========================\n";
            echo " To run all tests simply run this script without arguments. \n";
            echo "\n Flags:\n";
            echo " --coverage will generate coverage report data. You can optionally pass the type of coverage: text, text-summary, html or clover (default), i.e '--coverage=text-summary', an extension that can collect coverage information (like Xdebug) must be installed to use this.\n";
            echo " --group <groupName1> <groupName2> <className1> Use this option to run just a group of tests or tests with a given classname. Groups are currently defined as the variable name they are called in this script.\n";
            echo " --filter <string1> <string2> case insensitive strings that will be applied to the className of the tests. A test_classname must contain all of these strings to be run\n";
            echo "\nAvailable groups:\n " . implode(', ', $availableGroups) . "\n";

            die();
        }

        //generate coverage report
        if (isset($options['coverage'])) {
            try {
                $coverageFilter = new \SebastianBergmann\CodeCoverage\Filter();
                $coverageFilter->addDirectoryToWhitelist(DOCTRINE_DIR . DIRECTORY_SEPARATOR . 'lib');

                $coverage = new \SebastianBergmann\CodeCoverage\CodeCoverage(null, $coverageFilter);
                $coverage->start($testGroup->getName());
            } catch (\SebastianBergmann\CodeCoverage\RuntimeException $e) {
                echo 'There was an error trying to start CodeCoverage (' . $e->getMessage() . ") Coverage won't be available for this run.\n";
                unset($options['coverage']);
            }
        }

        if (array_key_exists('only-failed', $options)) {
            $testGroup->onlyRunFailed(true);
        }
        $result = $testGroup->run($reporter, $filter);

        if (isset($options['coverage'])) {
            $coverage->stop();
        }

        global $startTime;

        $endTime = time();
        $time    = $endTime - $startTime;

        if (PHP_SAPI === 'cli') {
            echo "\nTests ran in " . $time . ' seconds and used ' . (memory_get_peak_usage() / 1024) . " KB of memory\n\n";
        } else {
            echo '<p>Tests ran in ' . $time . ' seconds and used ' . (memory_get_peak_usage() / 1024) . ' KB of memory</p>';
        }

        if (isset($options['coverage'])) {
            switch ($options['coverage']) {
                default:
                case 'clover':
                    $writer = new \SebastianBergmann\CodeCoverage\Report\Clover();
                    $writer->process($coverage, __DIR__ . '/coverage/clover.xml');
                    break;
                case 'text':
                    $writer = new \SebastianBergmann\CodeCoverage\Report\Text();
                    $output = $writer->process($coverage, true);
                    echo $output;
                    break;
                case 'text-summary':
                    $writer = new \SebastianBergmann\CodeCoverage\Report\Text(50, 90, false, true);
                    $output = $writer->process($coverage, true);
                    echo $output;
                    break;
                case 'html':
                    $writer = new \SebastianBergmann\CodeCoverage\Report\Html\Facade();
                    $writer->process($coverage, __DIR__ . '/coverage/code-coverage-report');
                    break;
            }
        }

        return $result;
    }

    /**
     * Require all the models needed in the tests
     *
     */
    public function requireModels()
    {
        $models = new DirectoryIterator(dirname(__FILE__) . '/models/');

        foreach ($models as $key => $file) {
            if ($file->isFile() && ! $file->isDot()) {
                $e = explode('.', $file->getFileName());

                if (end($e) === 'php') {
                    require_once $file->getPathname();
                }
            }
        }
    }

    /**
     * Parse Options from cli into an associative array
     *
     * @param array $array An argv array from cli
     * @return array An array with options
     */
    public function parseOptions($array)
    {
        $currentName = '';
        $options     = array();

        foreach ($array as $name) {
            if (strpos($name, '--') === 0) {
                $name  = ltrim($name, '--');
                $value = null;

                if (strpos($name, '=') !== false) {
                    list($name, $value) = explode('=', $name);
                }
                $currentName = $name;

                if (!isset($options[$currentName])) {
                    if ($value !== null) {
                        $options[$currentName] = $value;
                    } else {
                        $options[$currentName] = array();
                    }
                }
            } else {
                if (is_array($options[$currentName])) {
                    $values = $options[$currentName];
                    array_push($values, $name);
                    $options[$currentName] = $values;
                }
            }
        }

        return $options;
    }

    /**
     * Autoload test cases
     *
     * Will create test case if it does not exist
     *
     * @param string $class The name of the class to autoload
     * @return boolean True
     */
    public static function autoload($class)
    {
        if (strpos($class, 'TestCase') === false) {
            return false;
        }

        $e = explode('_', $class);

        $count  = count($e);
        $prefix = array_shift($e);

        if ($prefix !== 'Doctrine') {
            return false;
        }

        $dir  = DOCTRINE_DIR . '/tests/' . array_shift($e);
        $file = $dir . '_' . substr(implode('_', $e), 0, -(strlen('_TestCase'))) . 'TestCase.php';
        $file = str_replace('_', (($count > 3) ? DIRECTORY_SEPARATOR : ''), $file);

        // create a test case file if it doesn't exist
        if (!file_exists($file)) {
            $contents = file_get_contents(DOCTRINE_DIR . '/tests/template.tpl');
            $contents = sprintf($contents, $class, $class);

            if (!file_exists($dir)) {
                mkdir($dir, 0777);
            }

            file_put_contents($file, $contents);
        }

        require_once($file);

        return true;
    }
}
