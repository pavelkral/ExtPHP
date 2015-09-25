<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
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