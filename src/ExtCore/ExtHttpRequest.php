<?php
/**
 * ExtPHP framework

 */


class ExtHttpRequest{



    /**
     * ExtHttpRequest::__construct()
     * 
     * @return
     */
     
    public function __construct(){

    }

	/**
	 * ExtHttpRequest::getScriptUrl()
	 * 
	 * @return
	 */
     
	public static function getScriptUrl(){
	   
        $scriptName = explode('/',$_SERVER['SCRIPT_NAME']);
        unset($scriptName[sizeof($scriptName)-1]);
		$scriptName = array_values($scriptName);
		return 'http://'.$_SERVER['SERVER_NAME'].implode('/',$scriptName).'/';
    }

    /**
     * ExtHttpRequest::redirect()
     * 
     * @param mixed $url
     * @param integer $time
     * @return
     */
     
    public static function redirect ($url,$time=0) {
        
    // header("Location: $url", true, 303);
	   echo "<html><head><meta HTTP-EQUIV=\"Refresh\" CONTENT=\"$time; URL=$url\"></html>";

	}
    
	
}
?>