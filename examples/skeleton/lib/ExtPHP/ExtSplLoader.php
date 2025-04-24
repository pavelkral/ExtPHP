<?php
/**
 * ExtPHP framework
 */
  	function autoload_class_dirs($class_name) 
	{

		$directorys = array(
			'lib/ExtPHP/ExtUI/',
			'lib/ExtPHP/ExtMvc/',
			'lib/ExtPHP/ExtMysql/',
			'lib/ExtPHP/ExtCore/',
			'lib/ExtPHP/',
			'models/',
            'components/',
			'controllers/'
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

	spl_autoload_register('autoload_class_dirs');
?>