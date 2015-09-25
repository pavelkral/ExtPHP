<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
 */

class ExtException extends Exception
{


    /**
     * ExtException::errMsg()
     * 
     * @return
     */
     
    public function errMsg(){
    
        $errorMsg = '<strong>Error on line</strong> '.$this->getLine().' in '.$this->getFile()
        .': <b>'.$this->getMessage();
        
        return $errorMsg;
    
    }

}

?>