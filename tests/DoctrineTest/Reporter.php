<?php

class DoctrineTest_Reporter
{
    protected $_formatter;
    protected $_test;

    public function __construct()
    {
        $this->_formatter = new Doctrine_Cli_AnsiColorFormatter();
    }

    public function format($message, $type)
    {
        if (PHP_SAPI == 'cli') {
            return $this->_formatter->format($message, $type);
        } else {
            if ($type == 'INFO') {
                $color = 'green';
            } elseif ($type == 'ERROR') {
                $color = 'red';
            } elseif ($type == 'COMMENT') {
                $color = 'yellow';
            } else {
                $color = 'black';
            }
            return '<span style="font-weight: bold; color: ' . $color . ';">' . $message . '</span>';
        }
    }

    public function setTestCase($test)
    {
        $this->_test = $test;
    }

    public function paintMessages()
    {
        $max      = 80;
        $class    = get_class($this->_test);
        $messages = $this->_test->getMessages();
        $failed   = ($this->_test->getFailCount() || count($messages)) ? true:false;
        $skipped  = $this->_test->getSkipCount() ? true : false;

        if ($class != 'GroupTest') {
            $strRepeatLength = $max - strlen($class);
            $message         = 'passed';
            $type            = 'INFO';
            if ($failed) {
                $message = 'failed';
                $type    = 'ERROR';
            } elseif ($skipped) {
                $message = 'skipped';
                $type    = 'COMMENT';
            }

            echo $class . str_repeat('.', $strRepeatLength) . $this->format($message, $type) . "\n";
        }

        if (! empty($messages)) {
            echo "\n";
            echo "\n";
            foreach ($messages as $message) {
                echo $this->format($message, 'ERROR') . "\n\n";
            }
            echo "\n";
        }
    }
}
