<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
 */

class ExtLoader
{
      
	public static  $prefix = false;
	private static $instance = false; 


	/**
	 * ExtLoader::__construct()
	 * 
	 * @return
	 */
     
	public function __construct(){

		function __autoload($class_name)
		{
	
			$directorys = array(
			'lib/ExtPHP/ExtUI/',
			'lib/ExtPHP/ExtMvc/',
			'lib/ExtPHP/ExtMysql/',
			'lib/ExtPHP/ExtCore/',
			'lib/ExtPHP/',
			'models/',
            'components/',
			'presenters/'
		);
	
			foreach($directorys as $directory)
			{
			
				if(file_exists(LOADER_PREFIX.$directory.$class_name . '.php'))
				{
					require_once(LOADER_PREFIX.$directory.$class_name . '.php');
				
					return;
				}
			}
		}
	}
    
	/**
	 * ExtLoader::getInstance()
	 * 
	 * @param mixed $prefix
	 * @return
	 */
     
	public static function getInstance($prefix){
		self::$prefix=$prefix;
	
		if(self::$instance === false){
			self::$instance = new ExtLoader;
		}
		return self::$instance;
	} 	
	
	
}
?>