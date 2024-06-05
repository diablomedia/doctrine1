<?php declare(strict_types = 1);

$ignoreErrors   = array();
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'code\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'message\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$connection of function oci_commit expects resource, resource\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$connection of function oci_rollback expects resource, resource\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(array\\) of method Doctrine_Adapter_Statement_Mock\\:\\:errorCode\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Adapter_Statement_Interface\\:\\:errorCode\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Statement/Mock.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(int\\) of method Doctrine_Adapter_Statement_Mock\\:\\:fetchColumn\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Adapter_Statement_Interface\\:\\:fetchColumn\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Statement/Mock.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'code\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'message\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'sqltext\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$connection of function oci_parse expects resource, resource\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(string\\) of method Doctrine_Adapter_Statement_Oracle\\:\\:errorInfo\\(\\) should be compatible with return type \\(array\\) of method Doctrine_Adapter_Statement_Interface\\:\\:errorInfo\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(void\\) of method Doctrine_Adapter_Statement_Oracle\\:\\:bindValue\\(\\) should be compatible with return type \\(bool\\) of method Doctrine_Adapter_Statement_Interface\\:\\:bindValue\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(void\\) of method Doctrine_Adapter_Statement_Oracle\\:\\:setAttribute\\(\\) should be compatible with return type \\(bool\\) of method Doctrine_Adapter_Statement_Interface\\:\\:setAttribute\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(string\\) of method Doctrine_AuditLog_Listener_Microtime\\:\\:_getInitialVersion\\(\\) should be compatible with return type \\(int\\) of method Doctrine_AuditLog_Listener\\:\\:_getInitialVersion\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/AuditLog/Listener/Microtime.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(string\\) of method Doctrine_AuditLog_Listener_Microtime\\:\\:_getNextVersion\\(\\) should be compatible with return type \\(int\\|null\\) of method Doctrine_AuditLog_Listener\\:\\:_getNextVersion\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/AuditLog/Listener/Microtime.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(int\\) of method Doctrine_Cache_Db\\:\\:_doDelete\\(\\) should be compatible with return type \\(bool\\) of method Doctrine_Cache_Driver\\:\\:_doDelete\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Cache/Db.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(int\\) of method Doctrine_Cache_Db\\:\\:_doSave\\(\\) should be compatible with return type \\(bool\\) of method Doctrine_Cache_Driver\\:\\:_doSave\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Cache/Db.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#4 \\$expire of method MemcachePool\\:\\:set\\(\\) expects int, int\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Cache/Memcache.php',
);
$ignoreErrors[] = array(
    'message' => '#^Constant XC_TYPE_VAR not found\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Cache/Xcache.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method get\\(\\) on Doctrine_Record\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Collection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getRelations\\(\\) on array\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Collection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Possibly invalid array key type array\\|string\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Collection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(Doctrine_Collection_Iterator_Expandable\\) of method Doctrine_Collection_Offset\\:\\:getIterator\\(\\) should be compatible with return type \\(ArrayIterator\\) of method Doctrine_Collection\\:\\:getIterator\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Collection/Offset.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$filename of function file expects string, string\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Compiler.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method execute\\(\\) on Doctrine_Connection_Statement\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getTableName\\(\\) on array\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method postConnect\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method postError\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method preConnect\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method preError\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method rowCount\\(\\) on Doctrine_Connection_Statement\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Connection\\:\\:convertBooleans\\(\\) should return array\\|int but returns array\\|bool\\|int\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Connection\\:\\:exec\\(\\) should return int but return statement is missing\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Connection\\:\\:exec\\(\\) should return int but returns int\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Connection\\:\\:execute\\(\\) should return Doctrine_Adapter_Statement_Interface\\|PDOStatement but return statement is missing\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Connection\\:\\:execute\\(\\) should return Doctrine_Adapter_Statement_Interface\\|PDOStatement but returns Doctrine_Adapter_Statement_Interface\\|PDOStatement\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Connection\\:\\:execute\\(\\) should return Doctrine_Adapter_Statement_Interface\\|PDOStatement but returns Doctrine_Connection_Statement\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Connection\\:\\:prepare\\(\\) should return Doctrine_Connection_Statement\\|null but return statement is missing\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#2 \\$stmt of class Doctrine_Connection_Statement constructor expects Doctrine_Adapter_Statement_Interface\\|PDOStatement, Doctrine_Adapter_Statement_Interface\\|PDOStatement\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'type\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getDqlPart\\(\\) on Doctrine_Query\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getExpressionOwner\\(\\) on Doctrine_Query\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getQueryComponent\\(\\) on Doctrine_Query\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getSqlQueryPart\\(\\) on Doctrine_Query\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getSqlTableAlias\\(\\) on Doctrine_Query\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#3 \\$subject of function preg_replace_callback expects array\\|string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Offset 2 does not exist on array\\{\\}\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Pgsql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Offset 3 does not exist on array\\{\\}\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Pgsql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method postFetch\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method postFetchAll\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method postStmtExecute\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method preFetch\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method preFetchAll\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method preStmtExecute\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#2 \\$arg1 \\(string\\) of method Doctrine_Connection_Statement\\:\\:setFetchMode\\(\\) should be compatible with parameter \\$arg1 \\(int\\) of method Doctrine_Adapter_Statement_Interface\\:\\:setFetchMode\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method postDelete\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method preDelete\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$table of method Doctrine_Sequence\\:\\:lastInsertId\\(\\) expects string\\|null, array\\|float\\|int\\|string\\|false\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#2 \\$offset of function array_splice expects int, int\\|false given\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
);
$ignoreErrors[] = array(
    'message' => '#^Possibly invalid array key type array\\|string\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Core\\:\\:migrate\\(\\) should return bool\\|int but returns int\\|false\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Core.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$haystack of function strpos expects string, array\\<int, string\\>\\|string given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Core.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$string of function substr expects string, array\\<int, string\\>\\|string given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Core.php',
);
$ignoreErrors[] = array(
    'message' => '#^Binary operation "\\.\\=" between array\\|string\\|null and non\\-falsy\\-string results in an error\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Data/Export.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$componentName of static method Doctrine_Core\\:\\:getTable\\(\\) expects string, int\\|string given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Data/Export.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$filename of function is_dir expects string, array\\|string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Data/Export.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$filename of function is_dir expects string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Data/Export.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$filename of function is_file expects string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Data/Export.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$path of function dirname expects string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Data/Export.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$haystack of function strstr expects string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/DataDict/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$haystack of function strstr expects string, string\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/DataDict/Mysql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$str of method Doctrine_Connection\\:\\:quoteIdentifier\\(\\) expects string, int\\|string given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Export.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(true\\) of method Doctrine_Export_Mssql\\:\\:createSequence\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Export\\:\\:createSequence\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Export/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(bool\\|null\\) of method Doctrine_Export_Mysql\\:\\:createSequence\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Export\\:\\:createSequence\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Export/Mysql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Offset \'password\' does not exist on array\\|string\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Export/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(array\\|true\\) of method Doctrine_Export_Pgsql\\:\\:alterTableSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:alterTableSql\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Export/Pgsql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(bool\\) of method Doctrine_Export_Sqlite\\:\\:createSequence\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Export\\:\\:createSequence\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Export/Sqlite.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(false\\) of method Doctrine_Export_Sqlite\\:\\:createForeignKey\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Export\\:\\:createForeignKey\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Export/Sqlite.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$alias of method Doctrine_Hydrator_Graph\\:\\:_getCustomIndexField\\(\\) expects string, int\\|string\\|null given\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Hydrator/Graph.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#4 \\$dqlAlias of method Doctrine_Hydrator_Graph\\:\\:setLastElement\\(\\) expects string, int\\|string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Hydrator/Graph.php',
);
$ignoreErrors[] = array(
    'message' => '#^Property Doctrine_Hydrator_Graph\\:\\:\\$_rootAlias \\(string\\|null\\) does not accept int\\|string\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Hydrator/Graph.php',
);
$ignoreErrors[] = array(
    'message' => '#^Offset string does not exist on array\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Hydrator/RecordDriver.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Hydrator_SingleScalarDriver\\:\\:hydrateResultSet\\(\\) should return array\\|bool\\|float\\|int\\|string but returns float\\|int\\|string\\|true\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Hydrator/SingleScalarDriver.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#3 \\$parent of method Doctrine_Import_Builder\\:\\:innerBuildActAs\\(\\) expects string\\|null, int\\|string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Import/Builder.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$str of method Doctrine_Connection\\:\\:quoteIdentifier\\(\\) expects string, string\\|null given\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Import/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(bool\\|float\\|int\\|string\\|null\\) of method Doctrine_Import_Oracle\\:\\:listDatabases\\(\\) should be compatible with return type \\(array\\) of method Doctrine_Import\\:\\:listDatabases\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Import/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'className\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Import/Schema.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'connectionClassName\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Import/Schema.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|null given\\.$#',
    'count'   => 4,
    'path'    => __DIR__ . '/lib/Doctrine/Inflector.php',
);
$ignoreErrors[] = array(
    'message' => '#^Argument of an invalid type array\\<int, string\\>\\|false supplied for foreach, only iterables are supported\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Lib.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method close\\(\\) on Directory\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Lib.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method read\\(\\) on Directory\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Lib.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Locking_Manager_Pessimistic\\:\\:_getLockingUserIdent\\(\\) never returns float so it can be removed from the return type\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Locking/Manager/Pessimistic.php',
);
$ignoreErrors[] = array(
    'message' => '#^Array has 2 duplicate keys with value 150 \\(\\\\Doctrine_Core\\:\\:ATTR_CACHE, \\\\Doctrine_Core\\:\\:ATTR_RESULT_CACHE\\)\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Manager.php',
);
$ignoreErrors[] = array(
    'message' => '#^Binary operation "\\." between \';charset\\=\' and array\\|string results in an error\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Manager.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$url of function parse_url expects string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Manager.php',
);
$ignoreErrors[] = array(
    'message' => '#^If condition is always false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Migration.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Migration\\:\\:migrateDryRun\\(\\) should return bool\\|int but returns int\\|false\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Migration.php',
);
$ignoreErrors[] = array(
    'message' => '#^Binary operation "\\." between array\\|string and string results in an error\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Migration/Diff.php',
);
$ignoreErrors[] = array(
    'message' => '#^Offset \'extension\' does not exist on array\\{dirname\\?\\: string, basename\\: string, extension\\?\\: string, filename\\: string\\}\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Migration/Diff.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method delete\\(\\) on array\\|Doctrine_Collection\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Node/NestedSet.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Node_NestedSet\\:\\:getChildren\\(\\) should return Doctrine_Collection\\|false but returns array\\|Doctrine_Collection\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Node/NestedSet.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(Doctrine_Collection\\|false\\) of method Doctrine_Node_NestedSet\\:\\:getChildren\\(\\) should be compatible with return type \\(array\\) of method Doctrine_Node_Interface\\:\\:getChildren\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Node/NestedSet.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Parser\\:\\:doLoad\\(\\) should return string but returns string\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Parser.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$data of method Doctrine_Parser\\:\\:doDump\\(\\) expects string, string\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Parser/Json.php',
);
$ignoreErrors[] = array(
    'message' => '#^Argument of an invalid type array\\|SimpleXMLElement\\|null supplied for foreach, only iterables are supported\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Parser/Xml.php',
);
$ignoreErrors[] = array(
    'message' => '#^Call to function is_int\\(\\) with array\\|string\\|null will always evaluate to false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Parser/Xml.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$simpleXml of method Doctrine_Parser_Xml\\:\\:prepareData\\(\\) expects SimpleXMLElement\\|string, SimpleXMLElement\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Parser/Xml.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset 0 on array\\<int, string\\>\\|false\\.$#',
    'count'   => 3,
    'path'    => __DIR__ . '/lib/Doctrine/Query.php',
);
$ignoreErrors[] = array(
    'message' => '#^Left side of && is always true\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Query.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#2 \\$subject of function preg_match_all expects string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Query.php',
);
$ignoreErrors[] = array(
    'message' => '#^Property Doctrine_Query_Abstract\\:\\:\\$_rootAlias \\(string\\) does not accept int\\|string\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Query.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Query_Abstract\\:\\:getSqlTableAlias\\(\\) should return string but returns int\\|string\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Query/Abstract.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$customComponent of method Doctrine_Query_Abstract\\:\\:getCachedForm\\(\\) expects array\\|Doctrine_Collection\\|string\\|null, string\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Query/Abstract.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$query of method Doctrine_Connection\\:\\:exec\\(\\) expects string, array\\|string\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Query/Abstract.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$query of method Doctrine_Connection\\:\\:execute\\(\\) expects string, array\\|string\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Query/Abstract.php',
);
$ignoreErrors[] = array(
    'message' => '#^Argument of an invalid type array\\<int, string\\>\\|false supplied for foreach, only iterables are supported\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Query/Tokenizer.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$componentAlias of method Doctrine_Query_Abstract\\:\\:getSqlTableAlias\\(\\) expects string, int\\|string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/RawSql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Property Doctrine_Query_Abstract\\:\\:\\$_rootAlias \\(string\\) does not accept int\\|string\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/RawSql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Variable \\$fields in empty\\(\\) always exists and is not falsy\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/RawSql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Argument of an invalid type array\\|string supplied for foreach, only iterables are supported\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'type\' on array\\|false\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method postSerialize\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method postUnserialize\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method postValidate\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method preSerialize\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method preUnserialize\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method preValidate\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method setInvoker\\(\\) on string\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Method Doctrine_Record\\:\\:copy\\(\\) should return static\\(Doctrine_Record\\) but returns Doctrine_Record\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$array of method Doctrine_Record\\:\\:fromArray\\(\\) expects array, array\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$array of static method Doctrine_Parser\\:\\:dump\\(\\) expects array, array\\<int\\|string, mixed\\>\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#2 \\$method of function method_exists expects string, string\\|null given\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Possibly invalid array key type array\\|string\\.$#',
    'count'   => 4,
    'path'    => __DIR__ . '/lib/Doctrine/Record.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$listener of method Doctrine_Configurable\\:\\:addRecordListener\\(\\) expects Doctrine_EventListener_Interface\\|Doctrine_Overloadable, Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|Doctrine_Record_Listener_Interface given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record/Abstract.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$listener of method Doctrine_Configurable\\:\\:setRecordListener\\(\\) expects Doctrine_EventListener_Interface\\|Doctrine_Overloadable, Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|Doctrine_Record_Listener_Interface given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record/Abstract.php',
);
$ignoreErrors[] = array(
    'message' => '#^Result of method Doctrine_Table\\:\\:addIndex\\(\\) \\(void\\) is used\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record/Abstract.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(void\\) of method Doctrine_Record_Filter_Standard\\:\\:filterSet\\(\\) should be compatible with return type \\(Doctrine_Record\\) of method Doctrine_Record_Filter\\:\\:filterSet\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record/Filter/Standard.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#2 \\$name of method Doctrine_Table\\:\\:addGenerator\\(\\) expects string\\|null, class\\-string\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Record/Generator.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getConnection\\(\\) on array\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Relation.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'length\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Relation/Parser.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'type\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Relation/Parser.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method addIndex\\(\\) on array\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Relation/Parser.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getFieldName\\(\\) on array\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Relation/Parser.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method isIdentifier\\(\\) on array\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Relation/Parser.php',
);
$ignoreErrors[] = array(
    'message' => '#^Access to an undefined property Doctrine_Record\\:\\:\\$field\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Search.php',
);
$ignoreErrors[] = array(
    'message' => '#^Access to an undefined property Doctrine_Record\\:\\:\\$keyword\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Search.php',
);
$ignoreErrors[] = array(
    'message' => '#^Access to an undefined property Doctrine_Record\\:\\:\\$position\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Search.php',
);
$ignoreErrors[] = array(
    'message' => '#^Argument of an invalid type array\\|string supplied for foreach, only iterables are supported\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Search.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'analyzer\' on array\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Search.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$string of static method Doctrine_Inflector\\:\\:unaccent\\(\\) expects string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Search/Analyzer/Standard.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#3 \\$subject of function str_replace expects array\\|string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Search/Analyzer/Standard.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(array\\) of method Doctrine_Search_Analyzer_Standard\\:\\:analyze\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Search_Analyzer\\:\\:analyze\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Search/Analyzer/Standard.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\|string, string\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Search/Analyzer/Utf8.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#3 \\$subject of function str_replace expects array\\|string, string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Search/Analyzer/Utf8.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(string\\) of method Doctrine_Sequence_Mssql\\:\\:lastInsertId\\(\\) should be compatible with return type \\(bool\\|int\\) of method Doctrine_Sequence\\:\\:lastInsertId\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Sequence/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Argument of an invalid type array\\<int, string\\>\\|Doctrine_Record\\|int\\|null supplied for foreach, only iterables are supported\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Table.php',
);
$ignoreErrors[] = array(
    'message' => '#^Argument of an invalid type array\\|string supplied for foreach, only iterables are supported\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Table.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$fieldName of method Doctrine_Table\\:\\:hasField\\(\\) expects string, string\\|false given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Table.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$name \\(array\\) of method Doctrine_Table\\:\\:bind\\(\\) should be compatible with parameter \\$name \\(string\\) of method Doctrine_Locator_Injectable\\:\\:bind\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Table.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$value of static method Doctrine_Validator\\:\\:validateLength\\(\\) expects string, array\\<int, string\\>\\|Doctrine_Record\\|int\\|string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Table.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getConfig\\(\\) on Doctrine_Cli\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Task/GenerateModelsDb.php',
);
$ignoreErrors[] = array(
    'message' => '#^Binary operation "\\." between non\\-falsy\\-string and array\\|int results in an error\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/Sluggable.php',
);
$ignoreErrors[] = array(
    'message' => '#^Binary operation "\\." between non\\-falsy\\-string and array\\|int results in an error\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method addPendingJoinCondition\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method addWhere\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method contains\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
    'count'   => 3,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method from\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method getConnection\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
    'count'   => 3,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method isSubquery\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method set\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
    'count'   => 2,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
);
$ignoreErrors[] = array(
    'message' => '#^Left side of && is always true\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method contains\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/Timestampable.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot call method set\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Template/Listener/Timestampable.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(void\\) of method Doctrine_Transaction_Mssql\\:\\:setIsolation\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Transaction\\:\\:setIsolation\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Transaction/Mssql.php',
);
$ignoreErrors[] = array(
    'message' => '#^Return type \\(true\\) of method Doctrine_Transaction_Oracle\\:\\:releaseSavePoint\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Transaction\\:\\:releaseSavePoint\\(\\)$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Transaction/Oracle.php',
);
$ignoreErrors[] = array(
    'message' => '#^Cannot access offset \'level\' on Doctrine_Record\\|false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Tree/NestedSet.php',
);
$ignoreErrors[] = array(
    'message' => '#^Call to function is_array\\(\\) with mixed will always evaluate to false\\.$#',
    'count'   => 3,
    'path'    => __DIR__ . '/lib/Doctrine/Validator.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$key of function array_key_exists expects int\\|string, bool\\|float\\|int\\|string\\|null given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Validator/ErrorStack.php',
);
$ignoreErrors[] = array(
    'message' => '#^Comparison operation "\\<" between int\\<0, max\\> and array results in an error\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Validator/Minlength.php',
);
$ignoreErrors[] = array(
    'message' => '#^Strict comparison using \\=\\=\\= between mixed and null will always evaluate to false\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Validator/Nospace.php',
);
$ignoreErrors[] = array(
    'message' => '#^Parameter \\#1 \\$key of function array_key_exists expects int\\|string, array\\|string given\\.$#',
    'count'   => 1,
    'path'    => __DIR__ . '/lib/Doctrine/Validator/Readonly.php',
);

return array('parameters' => array('ignoreErrors' => $ignoreErrors));
