<?php
/**
 * ExtPHP framework

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