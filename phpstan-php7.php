<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.0.0', '>=')) {
    return array();
}

$ignoreErrors   = array();
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#2 \\$pieces of function implode expects array, array\\<int, string\\>\\|false given\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Doctrine_Expression_Driver, \\(string\\|false\\)\\} given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Expression.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#2 \\$str of function explode expects string, array\\<int, string\\>\\|string given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Import/Pgsql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, array\\<string, int\\<0, 65535\\>\\|string\\|null\\>\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Manager.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Doctrine_Expression_Driver, \\(non\\-empty\\-string\\|false\\)\\} given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Query.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$function of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Doctrine_Record, non\\-falsy\\-string\\} given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Table.php',
);

return array('parameters' => array('ignoreErrors' => $ignoreErrors));
