<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.0.0', '<')) {
    return array();
}

$ignoreErrors   = array();
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Doctrine_Expression_Driver, string\\} given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Expression.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#2 \\$string of function explode expects string, array\\<int, string\\>\\|string given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Import/Pgsql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\<string, int\\<0, 65535\\>\\|string\\|null\\>\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Manager.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Doctrine_Expression_Driver, non\\-empty\\-string\\} given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Query.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Doctrine_Record, non\\-falsy\\-string\\} given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Table.php',
);

return array('parameters' => array('ignoreErrors' => $ignoreErrors));
