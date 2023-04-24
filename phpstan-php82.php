<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.2.0', '<')) {
    return array();
}

$ignoreErrors   = array();
$ignoreErrors[] = array(
    'message' => '#^Access to an undefined property Doctrine_Adapter_Statement_Interface\\|PDOStatement\\:\\:\\$queryString\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
);

return array('parameters' => array('ignoreErrors' => $ignoreErrors));
