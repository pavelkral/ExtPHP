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
 
class ExtString{
  

    public $string;

    /**
     * ExtString::__construct()
     * 
     * @return
     */
     
    public function __construct(){

    }

	/**
	 * ExtString::webTrim()
	 * 
	 * @param mixed $str
	 * @return
	 */
     
	public static function  webTrim($str) {
	
			$str = str_replace(
				Array("á","č","ď","é","ě","í","ľ","ň","ó","ř","š","ť","ú","ů","ý","ž","Á","Č","Ď","É","Ě","Í","Ľ","Ň","Ó","Ř","Š","Ť","Ú","Ů","Ý","Ž") ,
                Array("a","c","d","e","e","i","l","n","o","r","s","t","u","u","y","z","A","C","D","E","E","I","L","N","O","R","S","T","U","U","Y","Z") ,
				$str);
	
			$str = str_replace(" ","-",$str );
			$str = strtolower($str);
			$str = preg_replace('/([^A-Za-z0-9-._]+)/','',$str);
	
			return $str; 
	}
	
	
	/**
	 * ExtString::validateEmail()
	 * 
	 * @param mixed $str
	 * @return
	 */
     
	public static function validateEmail ($str) {
	
			$mask ="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
	
			if (preg_match($mask ,$str)){
				return $str;
			}
			else{
				return 0;
			}
	} 
    
    
  /**
   * ExtString::validatePhone()
   * 
   * @param mixed $str
   * @return
   */
       
      public static function validatePhone ($str) {
	
			$mask ="/^[0-9+]{9,18}$/i";
	
			if (preg_match($mask ,$str)){
				return $str;
			}
			else{
				return 0;
			}
	} 

 /**
   * ExtString::generateHash()
   * 
   * @param mixed $str
   * @return
   */

    public static function generateHash($salt){
    
        $hash = md5(mt_rand(1,1000000) . $salt);      
        return $hash;
        
    }
 
 
    public static function generateRandomChars($length) {
        
        
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $count = mb_strlen($chars);
    
        for ($i = 0, $result = ''; $i < $length; $i++) {
            $index = rand(0, $count - 1);
            $randchars .= mb_substr($chars, $index, 1);
            
            //$chars .= chr(rand(32, 126));
        }
    
        return $randchars;
    }  
    
    
    
    
}







?>
