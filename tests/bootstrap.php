<?php

$startTime = time();

// Debug Diagnosic process attacher sleep time needed to link process
// More info about that: http://bugs.php.net/bugs-generating-backtrace-win32.php
//sleep(10);

error_reporting(E_ALL | E_STRICT);
ini_set('max_execution_time', 900);
ini_set('date.timezone', 'GMT+0');

define('DOCTRINE_DIR', $_SERVER['DOCTRINE_DIR']);

require_once __DIR__ . '/../vendor/autoload.php';

// This forces the tests to use the local
// copy of Doctrine in the event that there is another
// version installed on the system that is also on the path
set_include_path(
    implode(
        PATH_SEPARATOR,
        array(
            DOCTRINE_DIR . '/lib',
            get_include_path(),
        )
    )
);

require_once(DOCTRINE_DIR . '/lib/Doctrine.php');

spl_autoload_register(array('Doctrine', 'autoload'));
spl_autoload_register(array('Doctrine', 'modelsAutoload'));

require_once(DOCTRINE_DIR . '/tests/DoctrineTest.php');

spl_autoload_register(array('DoctrineTest', 'autoload'));
