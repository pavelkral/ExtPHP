<?php
/**
 * ExtPHP framework
 * This source file is subject to the ExtPHP framework license
 * with this package in the file license.txt.
 * @copyright  Copyright (c) 2009 Pavel Kral
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

	spl_autoload_register('autoload_class_dirs');
?>