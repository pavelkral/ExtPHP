<?php
/**
 * ExtPHP 
 */
 
//...............................................................................................................................................................................................................
	error_reporting(0);
    define('LOADER_PREFIX', '');
    //error_reporting(E_ALL ^ E_NOTICE);
    //error_reporting(E_ALL);
	session_start();
	require_once "config.php";	
	require_once "lib/ExtPHP/ExtSplLoader.php";
	$application = ExtApplication::getApplication();
	$application->setRouter(new ExtRouter());
//	$application->secureApp('user_logs','Login');
	$application->run();
//..............................................................................................................................................................................................................

?>

