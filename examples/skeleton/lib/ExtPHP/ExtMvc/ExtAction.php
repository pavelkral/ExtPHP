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