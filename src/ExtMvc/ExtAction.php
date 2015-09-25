<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
 */


class ExtAction{



    /**
     * ExtHttpRequest::__construct()
     * 
     * @return
     */
     
    public function __construct(){

    }


     
    public static function redirect ($url,$time=0) {
        
    // header("Location: $url", true, 303);
	   echo "<html><head><meta HTTP-EQUIV=\"Refresh\" CONTENT=\"$time; URL=$url\"></html>";

	}
    
    /**
     * ExtHttpRequest::connect()
     * 
     * @param mixed $controller
     * @param mixed $function
     * @param mixed $parameters
     * @return void
     */
    public static function connect ($presenter,$function,$parameters) {        
 
	   echo URL_BASE . $presenter . "/" . $function . "/" . $parameters . "/";

	} 
		
}
?>