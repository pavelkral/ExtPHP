<?php
/**
 * ExtPHP framework
 * This source file is subject to the ExtPHP framework license
 * with this package in the file license.txt.
 * @copyright  Copyright (c) 2009-2011 Pavel Kral
 * @category    framework
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