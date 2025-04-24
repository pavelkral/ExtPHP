<?php
/**
 * ExtPHP framework

 */

class ExtException extends Exception
{


    /**
     * ExtException::errMsg()
     * 
     * @return
     */
     
    public function errMsg(){
    
        $errorMsg = '<strong>ExtException Error on line</strong> '.$this->getLine().' in '.$this->getFile()
        .': <b>'.$this->getMessage();
        
        return $errorMsg;
    
    }

}

?>