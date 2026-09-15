<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.5.0', '<')) {
    return array();
}

$ignoreErrors   = array();
$ignoreErrors[] = array(
    'identifier' => 'offsetAccess.invalidOffset',
    'path'       => __DIR__ . '/lib/Doctrine/Connection/Exception.php',
);
$ignoreErrors[] = array(
    'identifier' => 'offsetAccess.invalidOffset',
    'path'       => __DIR__ . '/lib/Doctrine/Hydrator/ArrayDriver.php',
);
$ignoreErrors[] = array(
    'identifier' => 'offsetAccess.invalidOffset',
    'path'       => __DIR__ . '/lib/Doctrine/Hydrator/Graph.php',
);
$ignoreErrors[] = array(
    'identifier' => 'offsetAccess.invalidOffset',
    'path'       => __DIR__ . '/lib/Doctrine/Manager.php',
);
$ignoreErrors[] = array(
    'identifier' => 'offsetAccess.invalidOffset',
    'path'       => __DIR__ . '/lib/Doctrine/Query.php',
);
$ignoreErrors[] = array(
    'identifier' => 'offsetAccess.invalidOffset',
    'path'       => __DIR__ . '/lib/Doctrine/Query/Tokenizer.php',
);
$ignoreErrors[] = array(
    'identifier' => 'offsetAccess.invalidOffset',
    'path'       => __DIR__ . '/lib/Doctrine/RawSql.php',
);

return array('parameters' => array('ignoreErrors' => $ignoreErrors));
