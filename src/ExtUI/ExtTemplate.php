<?php
/**
 * ExtPHP framework
 * This source file is subject to the ExtPHP framework license
 * with this package in the file license.txt.
 * @copyright  Copyright (c) 2009 Pavel Kral
 * @license   http://x-design.wz.cz/license Coyotte framework license
 * @link       http://x-design.wz.cz
 * @category    framework
 */



class ExtTemplate{

	public $template;



/**
 * ExtTemplate::__construct()
 * 
 * @return
 */
 
public function __construct(){


   }

		/**
		 * ExtTemplate::load()
		 * 
		 * @param mixed $filepath
		 * @return
		 */
         
		function load($filepath) {
		  $this->template = file_get_contents($filepath);
	    }

	    /**
	     * ExtTemplate::replace()
	     * 
	     * @param mixed $var
	     * @param mixed $content
	     * @return
	     */
         
	    function replace($var, $content) {
		  $this->template = str_replace("#$var#", $content, $this->template);
	    }

	   /**
	    * ExtTemplate::publish()
	    * 
	    * @return
	    */
	   function publish() {
		  eval("?>".$this->template."<?");
	   
		}


	/**
	 * ExtTemplate::showErrTemplate()
	 * 
	 * @param mixed $command
	 * @return
	 */
     
	public static function showErrTemplate($command)
	{

		$commandResult = '<b>Controller:</b><br/>&nbsp;&nbsp;&nbsp;&nbsp;'.$command->getPresenterName().'<br/>';
		$commandResult .= '<b>Function:</b><br/>&nbsp;&nbsp;&nbsp;&nbsp;'.$command->getFunction().'<br/>';

		if (sizeof($command->getParameters()) > 0)
		{
			$commandResult .= '<b>Parameters:</b><br/>';
		}

		$parameters = $command->getParameters();

		for($i = 0;$i<sizeof($parameters);$i++)
		{
			$commandResult .= '&nbsp;&nbsp;&nbsp;&nbsp;'.$parameters[$i].'<br/>';
		}
			return $commandResult;

	}
    
	/**
	 * ExtTemplate::renderTemplate()
	 * 
	 * @param mixed $template
	 * @param mixed $data
	 * @return
	 */
     
	public static function renderTemplate($template,$data)
	{


	}
			
	/**
	 * ExtTemplate::renderSimple()
	 * 
	 * @param mixed $template
	 * @return
	 */
     
	public static function renderSimple($template)
	{

		include_once(DIR_TEMPLATE . $template);

	}		
}
?>