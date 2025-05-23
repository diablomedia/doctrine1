<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.4.0', '<')) {
    return array();
}

$ignoreErrors   = array();
$ignoreErrors[] = array(
    'message'    => '#^Cannot unset property Doctrine_Connection\\:\\:\\$dbh because it might have hooks in a subclass\\.$#',
    'identifier' => 'unset.possiblyHookedProperty',
    'count'      => 1,
    'path'       => __DIR__ . '/lib/Doctrine/Connection.php',
);

return array('parameters' => array('ignoreErrors' => $ignoreErrors));
