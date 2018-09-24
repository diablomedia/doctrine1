<?php

// Use stubs so we can analyze types from unloaded extensions
if (!extension_loaded('apc')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/apc/apc.php';
}

if (!extension_loaded('ctype')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/ctype/ctype.php';
}

if (!extension_loaded('filter')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/filter/filter.php';
}

if (!extension_loaded('iconv')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/iconv/iconv.php';
}

if (!extension_loaded('json')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/json/json.php';
}

if (!extension_loaded('mbstring')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/mbstring/mbstring.php';
}

if (!extension_loaded('memcache')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/memcache/memcache.php';
}

if (!extension_loaded('oci8')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/oci8/oci8.php';
}

if (!extension_loaded('PDO')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/PDO/PDO.php';
}

if (!extension_loaded('posix')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/posix/posix.php';
}

if (!extension_loaded('SimpleXML')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/SimpleXML/SimpleXML.php';
}

if (!extension_loaded('xcache')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/xcache/xcache.php';
}

if (!extension_loaded('zlib')) {
    require_once __DIR__ . '/vendor/jetbrains/phpstorm-stubs/zlib/zlib.php';
}
