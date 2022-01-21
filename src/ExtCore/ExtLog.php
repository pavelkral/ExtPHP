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

class ExtLog
{


    /**
     * ExtLog::__construct()
     * 
     * @return
     */
     
    public function __construct(){

     
    }

     /**
      * ExtLog::toFile()
      * 
      * @param mixed $string
      * @return
      */
      
     public static function toFile($string){
        
            define('DIR_LOG',DIR_ROOT . 'temp/log/');
            $f = fopen(DIR_LOG .'errlog.txt', 'a');
            fwrite($f, $string . "\n");
            fclose($f);
       
    }
    

}
?>