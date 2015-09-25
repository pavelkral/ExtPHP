<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
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