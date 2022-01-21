<?php
/**
 * ExtPHP framework
 * This source file is subject to the ExtPHP framework license
 * with this package in the file license.txt.
 * @copyright  Copyright (c) 2009-2011 Pavel Kral
 * @license   http://x-design.wz.cz/license ExtPHP framework license
 * @link       http://x-design.wz.cz/extphp/
 * @category    framework 
 * @package  ExtPHP
 * @author Pavel Kral
 * @version 2011
 * @access public
 */

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
define('DATABASE_DB', 'quadriproductionorg');
//define('DB_PREFIX', '');
//define('DB_DRIVER', 'mysql');
//define('DATABASE_HOST', '81.2.226.59');
//define('DATABASE_DRIVER', 'mysql');
//define('DATABASE_USER', 'vozejkovcz');
//define('DATABASE_PASS', 'root384');
//define('DATABASE_DB', 'vozejkovcz');
//define('DB_PREFIX', '');

?>