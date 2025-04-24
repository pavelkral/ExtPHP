<?php

$docroot = getenv("DOCUMENT_ROOT");
$rooturl = getenv("SCRIPT_FILENAME");
$rooturl = str_replace('index.php','',$rooturl);
$rooturl = str_replace($docroot,'',$rooturl);
$rooturl = 'http://' . $_SERVER['HTTP_HOST'] . $rooturl;

$rootdir = getenv("SCRIPT_FILENAME");
$rootdir = str_replace('index.php','',$rootdir);
// HTTP
define('URL_BASE',$rooturl );

// DIR
define('DIR_ROOT', $rootdir);
define('DIR_TEMPLATE',  $rootdir . 'views/templates/');
define('DIR_VIEW',  $rootdir . 'views/');
define('DIR_LOG',  $rootdir . 'temp/log/');
define('DIR_AVATARS', $rootdir . 'media/images/avatarimg/');
// DB
define('DB_DRIVER', 'mysql');
define('DATABASE_HOST', 'localhost');
define('DATABASE_DRIVER', 'mysql');
define('DATABASE_USER', 'root');
define('DATABASE_PASS', '');
define('DATABASE_DB', '');


?>