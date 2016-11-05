<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
 */
 
//...............................................................................................................................................................................................................
	//error_reporting(0);
    define('LOADER_PREFIX', '');

    error_reporting(E_ALL ^ E_NOTICE);
    //error_reporting(E_ALL);
	session_start();

	require_once "config.php";	
	require_once "lib/ExtPHP/ExtLoader.php";

	$loader = ExtLoader::getInstance(LOADER_PREFIX);
//	$debug = new ExtDebugger;
//	$connection = new ExtDbConnection;
    mysql_query("SET CHARACTER SET utf8");    

	$application = ExtApplication::getApplication();
	$application->setRouter(new ExtRouter());
//	$application->secureApp('user_logs','Login');
	$application->run();

//	$connection -> close();

//..............................................................................................................................................................................................................

?>

