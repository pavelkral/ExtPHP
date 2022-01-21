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

class ExtDebugger
{
    
    public $buffer = array();


    /**
     * ExtDebugger::__construct()
     * 
     * @return
     */
     
    public function __construct(){

     
    }

     /**
      * ExtDebugger::debug()
      * 
      * @param mixed $message
      * @return
      */
      
     public function debug($message){
        
        $this->buffer[] = $message;
      
          
       
    }
    

}
?>