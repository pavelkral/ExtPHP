<?php
/**
 * ExtPHP framework
 * This source file is subject to the ExtPHP framework license
 * with this package in the file license.txt.
 * @copyright  Copyright (c) 2009-2011 Pavel Kral
 * @license   http://x-design.wz.cz/license ExtPHP framework license
 * @link       http://x-design.wz.cz
 * @category    framework
 */
//define('DATABASE_HOST', 'localhost');
//define('DATABASE_USER', 'root');
//define('DATABASE_PASS', '');
//define('DATABASE_DB', 'deinicz');




class ExtMysql {

    private static $db;
    private $connection;

    private function __construct() {
      //  $this->connection = new MySQLi(/* credentials */);
        $this->connection = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASS,DATABASE_DB);
    }

    function __destruct() {
        //$this->connection->close();
         mysqli_close ($this->connection);
    }

    public static function getConnection() {
        if (self::$db == null) {
            self::$db = new ExtMysql();
        }
        return self::$db->connection;
    }
}


?>
