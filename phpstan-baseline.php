<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'code\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'message\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$connection of function oci_commit expects resource, resource\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$connection of function oci_rollback expects resource, resource\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(array\\) of method Doctrine_Adapter_Statement_Mock\\:\\:errorCode\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Adapter_Statement_Interface\\:\\:errorCode\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(int\\) of method Doctrine_Adapter_Statement_Mock\\:\\:fetchColumn\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Adapter_Statement_Interface\\:\\:fetchColumn\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'code\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'message\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'sqltext\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$connection of function oci_parse expects resource, resource\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(string\\) of method Doctrine_Adapter_Statement_Oracle\\:\\:errorInfo\\(\\) should be compatible with return type \\(array\\) of method Doctrine_Adapter_Statement_Interface\\:\\:errorInfo\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Adapter_Statement_Oracle\\:\\:bindValue\\(\\) should be compatible with return type \\(bool\\) of method Doctrine_Adapter_Statement_Interface\\:\\:bindValue\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Adapter_Statement_Oracle\\:\\:setAttribute\\(\\) should be compatible with return type \\(bool\\) of method Doctrine_Adapter_Statement_Interface\\:\\:setAttribute\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_AuditLog\\:\\:getVersion\\(\\) should return array but returns array\\|Doctrine_Collection\\|Doctrine_Record\\|false\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/AuditLog.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(string\\) of method Doctrine_AuditLog_Listener_Microtime\\:\\:_getInitialVersion\\(\\) should be compatible with return type \\(int\\) of method Doctrine_AuditLog_Listener\\:\\:_getInitialVersion\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/AuditLog/Listener/Microtime.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(string\\) of method Doctrine_AuditLog_Listener_Microtime\\:\\:_getNextVersion\\(\\) should be compatible with return type \\(int\\|null\\) of method Doctrine_AuditLog_Listener\\:\\:_getNextVersion\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/AuditLog/Listener/Microtime.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(int\\) of method Doctrine_Cache_Db\\:\\:_doDelete\\(\\) should be compatible with return type \\(bool\\) of method Doctrine_Cache_Driver\\:\\:_doDelete\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Cache/Db.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(int\\) of method Doctrine_Cache_Db\\:\\:_doSave\\(\\) should be compatible with return type \\(bool\\) of method Doctrine_Cache_Driver\\:\\:_doSave\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Cache/Db.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$expire of method MemcachePool\\:\\:set\\(\\) expects int, int\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Cache/Memcache.php',
];
$ignoreErrors[] = [
	'message' => '#^Constant XC_TYPE_VAR not found\\.$#',
	'identifier' => 'constant.notFound',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Cache/Xcache.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$className of method Doctrine_Cli\\:\\:createTaskInstance\\(\\) expects class\\-string\\<Doctrine_Task\\>, class\\-string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter &\\$className by\\-ref type of method Doctrine_Cli\\:\\:taskNameIsRegistered\\(\\) expects class\\-string\\|null, \\(int\\|string\\) given\\.$#',
	'identifier' => 'parameterByRef.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method get\\(\\) on Doctrine_Record\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getRelations\\(\\) on array\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Possibly invalid array key type array\\|string\\.$#',
	'identifier' => 'offsetAccess.invalidOffset',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(Doctrine_Collection_Iterator_Expandable\\) of method Doctrine_Collection_Offset\\:\\:getIterator\\(\\) should be compatible with return type \\(ArrayIterator\\) of method Doctrine_Collection\\:\\:getIterator\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Collection/Offset.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function array_slice expects array, list\\<string\\>\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Compiler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of function file expects string, string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Compiler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method execute\\(\\) on Doctrine_Connection_Statement\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getTableName\\(\\) on array\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method postConnect\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method postError\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method preConnect\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method preError\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method rowCount\\(\\) on Doctrine_Connection_Statement\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:convertBooleans\\(\\) should return array\\|int but returns array\\<mixed\\>\\|bool\\|int\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:exec\\(\\) should return int but return statement is missing\\.$#',
	'identifier' => 'return.missing',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:exec\\(\\) should return int but returns int\\|false\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:execute\\(\\) should return Doctrine_Adapter_Statement_Interface\\|PDOStatement but return statement is missing\\.$#',
	'identifier' => 'return.missing',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:execute\\(\\) should return Doctrine_Adapter_Statement_Interface\\|PDOStatement but returns Doctrine_Adapter_Statement_Interface\\|PDOStatement\\|false\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:execute\\(\\) should return Doctrine_Adapter_Statement_Interface\\|PDOStatement but returns Doctrine_Connection_Statement\\|null\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:prepare\\(\\) should return Doctrine_Connection_Statement\\|null but return statement is missing\\.$#',
	'identifier' => 'return.missing',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$stmt of class Doctrine_Connection_Statement constructor expects Doctrine_Adapter_Statement_Interface\\|PDOStatement, Doctrine_Adapter_Statement_Interface\\|PDOStatement\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'type\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getDqlPart\\(\\) on Doctrine_Query\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getExpressionOwner\\(\\) on Doctrine_Query\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getQueryComponent\\(\\) on Doctrine_Query\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getSqlQueryPart\\(\\) on Doctrine_Query\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getSqlTableAlias\\(\\) on Doctrine_Query\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset numeric\\-string does not exist on list\\<\'ASC\'\\|\'DESC\'\\>\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function end expects array\\|object, list\\<string\\>\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\<float\\|int\\|string\\>\\|string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace_callback expects array\\<float\\|int\\|string\\>\\|string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 2 does not exist on array\\{\\}\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 3 does not exist on array\\{\\}\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method postFetch\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method postFetchAll\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method postStmtExecute\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method preFetch\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method preFetchAll\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method preStmtExecute\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$arg1 \\(string\\) of method Doctrine_Connection_Statement\\:\\:setFetchMode\\(\\) should be compatible with parameter \\$arg1 \\(int\\) of method Doctrine_Adapter_Statement_Interface\\:\\:setFetchMode\\(\\)$#',
	'identifier' => 'method.childParameterType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method postDelete\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method preDelete\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$table of method Doctrine_Sequence\\:\\:lastInsertId\\(\\) expects string\\|null, array\\|float\\|int\\|string\\|false\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$fields of method Doctrine_Connection\\:\\:insert\\(\\) expects array, array\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$offset of function array_splice expects int, int\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Possibly invalid array key type array\\|string\\.$#',
	'identifier' => 'offsetAccess.invalidOffset',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:migrate\\(\\) should return bool\\|int but returns int\\|false\\|null\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array \\(non\\-empty\\-list\\<\\(int\\|string\\)\\>\\) of array_values is already a list, call has no effect\\.$#',
	'identifier' => 'arrayValues.list',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function strpos expects string, list\\<string\\>\\|string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, list\\<string\\>\\|string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\.\\=" between array\\|string\\|null and non\\-falsy\\-string results in an error\\.$#',
	'identifier' => 'assignOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of function is_dir expects string, array\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of function is_dir expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of function is_file expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$path of function dirname expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function strstr expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/DataDict/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array\\{list\\<string\\>, list\\<string\\>\\} will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function strstr expects string, string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\.\\.\\.\\$arg1 of function max expects non\\-empty\\-array, array\\<int\\<0, max\\>\\> given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:createSequenceSql\\(\\) has Doctrine_Connection_Exception in PHPDoc @throws tag but it\'s not thrown\\.$#',
	'identifier' => 'throws.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:dropSequenceSql\\(\\) has Doctrine_Connection_Exception in PHPDoc @throws tag but it\'s not thrown\\.$#',
	'identifier' => 'throws.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of method Doctrine_Connection\\:\\:quoteIdentifier\\(\\) expects string, int\\|string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with non\\-empty\\-array\\<\\(int\\|string\\)\\> will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(true\\) of method Doctrine_Export_Mssql\\:\\:createSequence\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Export\\:\\:createSequence\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with non\\-empty\\-array\\<\\(int\\|string\\)\\> will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(bool\\|null\\) of method Doctrine_Export_Mysql\\:\\:createSequence\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Export\\:\\:createSequence\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'password\' might not exist on array\\|string\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(array\\|true\\) of method Doctrine_Export_Pgsql\\:\\:alterTableSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:alterTableSql\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with non\\-empty\\-array\\<\\(int\\|string\\)\\> will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(bool\\) of method Doctrine_Export_Sqlite\\:\\:createSequence\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Export\\:\\:createSequence\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(false\\) of method Doctrine_Export_Sqlite\\:\\:createForeignKey\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Export\\:\\:createForeignKey\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Doctrine_Expression_Driver, string\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Expression.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$alias of method Doctrine_Hydrator_Graph\\:\\:_getCustomIndexField\\(\\) expects string, int\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Hydrator/Graph.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$dqlAlias of method Doctrine_Hydrator_Graph\\:\\:setLastElement\\(\\) expects string, int\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Hydrator/Graph.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Hydrator_Graph\\:\\:\\$_rootAlias \\(string\\|null\\) does not accept int\\|string\\|null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Hydrator/Graph.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset string might not exist on array\\|null\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Hydrator/RecordDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Hydrator_SingleScalarDriver\\:\\:hydrateResultSet\\(\\) should return array\\|bool\\|float\\|int\\|string but returns float\\|int\\|string\\|true\\|null\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Hydrator/SingleScalarDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$parent of method Doctrine_Import_Builder\\:\\:innerBuildActAs\\(\\) expects string\\|null, int\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of method Doctrine_Connection\\:\\:quoteIdentifier\\(\\) expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Import/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(bool\\|float\\|int\\|string\\|null\\) of method Doctrine_Import_Oracle\\:\\:listDatabases\\(\\) should be compatible with return type \\(array\\) of method Doctrine_Import\\:\\:listDatabases\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Import/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function explode expects string, list\\<string\\>\\|string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Import/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'className\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'connectionClassName\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\<float\\|int\\|string\\>\\|string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/lib/Doctrine/Inflector.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method close\\(\\) on Directory\\|false\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Lib.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method read\\(\\) on Directory\\|false\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Lib.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Locking_Manager_Pessimistic\\:\\:_getLockingUserIdent\\(\\) never returns float so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Locking/Manager/Pessimistic.php',
];
$ignoreErrors[] = [
	'message' => '#^Array has 2 duplicate keys with value 150 \\(\\\\Doctrine_Core\\:\\:ATTR_CACHE, \\\\Doctrine_Core\\:\\:ATTR_RESULT_CACHE\\)\\.$#',
	'identifier' => 'array.duplicateKey',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \';charset\\=\' and array\\<mixed\\>\\|string results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$url of function parse_url expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\<string, int\\<0, 65535\\>\\|string\\|null\\>\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always false\\.$#',
	'identifier' => 'if.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Migration.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Migration\\:\\:migrateDryRun\\(\\) should return bool\\|int but returns int\\|false\\|null\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Migration.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between mixed and null will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between array\\|string and string results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Migration/Diff.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'extension\' might not exist on array\\{dirname\\?\\: string, basename\\: string, extension\\?\\: string, filename\\: string\\}\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Migration/Diff.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method delete\\(\\) on array\\|Doctrine_Collection\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Node_NestedSet\\:\\:getChildren\\(\\) should return Doctrine_Collection\\|false but returns array\\|Doctrine_Collection\\|false\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(Doctrine_Collection\\|false\\) of method Doctrine_Node_NestedSet\\:\\:getChildren\\(\\) should be compatible with return type \\(array\\) of method Doctrine_Node_Interface\\:\\:getChildren\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser\\:\\:doLoad\\(\\) should return string but returns string\\|false\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of method Doctrine_Parser\\:\\:doDump\\(\\) expects string, string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Parser/Json.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type array\\|SimpleXMLElement\\|null supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_int\\(\\) with array\\|string\\|null will always evaluate to false\\.$#',
	'identifier' => 'function.impossibleType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$simpleXml of method Doctrine_Parser_Xml\\:\\:prepareData\\(\\) expects SimpleXMLElement\\|string, SimpleXMLElement\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type list\\<string\\>\\|false supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on list\\<string\\>\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Doctrine_Expression_Driver, non\\-empty\\-string\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$componentAlias of method Doctrine_Query\\:\\:buildIndexBy\\(\\) expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$subject of function preg_match_all expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Query_Abstract\\:\\:\\$_rootAlias \\(string\\) does not accept int\\|string\\|null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Abstract\\:\\:getSqlTableAlias\\(\\) should return string but returns int\\|string\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$customComponent of method Doctrine_Query_Abstract\\:\\:getCachedForm\\(\\) expects array\\|Doctrine_Collection\\|string\\|null, string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$query of method Doctrine_Connection\\:\\:exec\\(\\) expects string, array\\|string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$query of method Doctrine_Connection\\:\\:execute\\(\\) expects string, array\\|string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between mixed and false will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type list\\<string\\>\\|false supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Query/Tokenizer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$componentAlias of method Doctrine_Query_Abstract\\:\\:getSqlTableAlias\\(\\) expects string, int\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Query_Abstract\\:\\:\\$_rootAlias \\(string\\) does not accept int\\|string\\|null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$fields in empty\\(\\) always exists and is not falsy\\.$#',
	'identifier' => 'empty.variable',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type array\\|string supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'type\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method postSerialize\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method postUnserialize\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method postValidate\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method preSerialize\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method preUnserialize\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method preValidate\\(\\) on Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setInvoker\\(\\) on string\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:copy\\(\\) should return static\\(Doctrine_Record\\) but returns Doctrine_Record\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of method Doctrine_Record\\:\\:fromArray\\(\\) expects array, array\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of static method Doctrine_Parser\\:\\:dump\\(\\) expects array, array\\<int\\|string, mixed\\>\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$method of function method_exists expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Possibly invalid array key type array\\|string\\.$#',
	'identifier' => 'offsetAccess.invalidOffset',
	'count' => 4,
	'path' => __DIR__ . '/lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$listener of method Doctrine_Configurable\\:\\:addRecordListener\\(\\) expects Doctrine_EventListener_Interface\\|Doctrine_Overloadable, Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|Doctrine_Record_Listener_Interface given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$listener of method Doctrine_Configurable\\:\\:setRecordListener\\(\\) expects Doctrine_EventListener_Interface\\|Doctrine_Overloadable, Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\|Doctrine_Record_Listener_Interface given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Table\\:\\:addIndex\\(\\) \\(void\\) is used\\.$#',
	'identifier' => 'method.void',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Record_Filter_Standard\\:\\:filterSet\\(\\) should be compatible with return type \\(Doctrine_Record\\) of method Doctrine_Record_Filter\\:\\:filterSet\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record/Filter/Standard.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$name of method Doctrine_Table\\:\\:addGenerator\\(\\) expects string\\|null, class\\-string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getConnection\\(\\) on array\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Relation.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'length\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'type\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method addIndex\\(\\) on array\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getFieldName\\(\\) on array\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isIdentifier\\(\\) on array\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Record\\:\\:\\$field\\.$#',
	'identifier' => 'property.notFound',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Record\\:\\:\\$keyword\\.$#',
	'identifier' => 'property.notFound',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Record\\:\\:\\$position\\.$#',
	'identifier' => 'property.notFound',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type array\\|string supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'analyzer\' on array\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of static method Doctrine_Inflector\\:\\:unaccent\\(\\) expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Search/Analyzer/Standard.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function str_replace expects array\\<string\\>\\|string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Search/Analyzer/Standard.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(array\\) of method Doctrine_Search_Analyzer_Standard\\:\\:analyze\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Search_Analyzer\\:\\:analyze\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Search/Analyzer/Standard.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\<float\\|int\\|string\\>\\|string, string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Search/Analyzer/Utf8.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function str_replace expects array\\<string\\>\\|string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Search/Analyzer/Utf8.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(string\\) of method Doctrine_Sequence_Mssql\\:\\:lastInsertId\\(\\) should be compatible with return type \\(bool\\|int\\) of method Doctrine_Sequence\\:\\:lastInsertId\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Sequence/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type Doctrine_Record\\|int\\|list\\<string\\>\\|null supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type array\\|string supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callback of function call_user_func_array expects callable\\(\\)\\: mixed, array\\{Doctrine_Record, non\\-falsy\\-string\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fieldName of method Doctrine_Table\\:\\:hasField\\(\\) expects string, string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$name \\(array\\) of method Doctrine_Table\\:\\:bind\\(\\) should be compatible with parameter \\$name \\(string\\) of method Doctrine_Locator_Injectable\\:\\:bind\\(\\)$#',
	'identifier' => 'method.childParameterType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of static method Doctrine_Validator\\:\\:validateLength\\(\\) expects string, Doctrine_Record\\|int\\|list\\<string\\>\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between mixed and null will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Task.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getConfig\\(\\) on Doctrine_Cli\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Task/GenerateModelsDb.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between non\\-falsy\\-string and array\\|int results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between non\\-falsy\\-string and array\\|int results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method addPendingJoinCondition\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method addWhere\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method contains\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method from\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getConnection\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isSubquery\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method set\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method contains\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method set\\(\\) on Doctrine_Query\\|string\\|null\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Template/Listener/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Transaction_Mssql\\:\\:setIsolation\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Transaction\\:\\:setIsolation\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Transaction/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(true\\) of method Doctrine_Transaction_Oracle\\:\\:releaseSavePoint\\(\\) should be compatible with return type \\(Doctrine_Adapter_Statement_Interface\\|PDOStatement\\) of method Doctrine_Transaction\\:\\:releaseSavePoint\\(\\)$#',
	'identifier' => 'method.childReturnType',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Transaction/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'level\' on Doctrine_Record\\|false\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with mixed will always evaluate to false\\.$#',
	'identifier' => 'function.impossibleType',
	'count' => 3,
	'path' => __DIR__ . '/lib/Doctrine/Validator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$num of function abs expects float\\|int, string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Validator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$key of function array_key_exists expects int\\|string, bool\\|float\\|int\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Validator/ErrorStack.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\<" between int\\<0, max\\> and array results in an error\\.$#',
	'identifier' => 'smaller.invalid',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Validator/Minlength.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between mixed and null will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Validator/Nospace.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$key of function array_key_exists expects int\\|string, array\\|string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Validator/Readonly.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 1 on list\\{0\\: non\\-falsy\\-string, 1\\: non\\-falsy\\-string&numeric\\-string, 2\\: non\\-falsy\\-string&numeric\\-string, 3\\?\\: string, 4\\?\\: \'\'\\|\\(non\\-falsy\\-string&numeric\\-string\\), 5\\?\\: string, 6\\?\\: \'\'\\|numeric\\-string, 7\\?\\: string, \\.\\.\\.\\} in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Validator/Time.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 2 on list\\{0\\: non\\-falsy\\-string, 1\\: non\\-falsy\\-string&numeric\\-string, 2\\: non\\-falsy\\-string&numeric\\-string, 3\\?\\: string, 4\\?\\: \'\'\\|\\(non\\-falsy\\-string&numeric\\-string\\), 5\\?\\: string, 6\\?\\: \'\'\\|numeric\\-string, 7\\?\\: string, \\.\\.\\.\\} in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/lib/Doctrine/Validator/Time.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
