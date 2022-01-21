 <?php
/**
 * ExtPHP framework
 * This source file is subject to the ExtPHP framework license
 * with this package in the file license.txt.
 * @copyright  Copyright (c) 2009-2011 Pavel Kral
 * @license   http://x-design.wz.cz/license ExtPHP framework license
 * @link       http://x-design.wz.cz/extphp/
 * @category    framework 
 * ExtRoute
 * @package  ExtPHP
 * @author Pavel Kral
 * @version 2011
 * @access public
 */


class ExtRoute
{

      public $presentername = '';
      public $functionname = '';
      public $parameters = array();

 
     /**
      * ExtRoute::__construct()
      * @param string $presenterName
      * @param string $functionName
      * @param string $parameters
      */
      
     public function __construct($presenterName,$functionName,$parameters) {

			$this->parameters = $parameters;
			$this->presentername = $presenterName;
			$this->functionname= $functionName;
      }

      /**
       * ExtRoute::getPresenterName()
       * @return string $presenterName
       */
       
      function getPresenterName(){

            return $this->presentername;
      }

      /**
       * ExtRoute::setPresenterName()
       * @param string $presenterName
 
       */
       
      function setPresenterName($presenterName){
 
            $this->presentername = $presenterName;
      }

      /**
       * ExtRoute::getFunction()
       * @return string $functionName
       */
       
      function getFunction(){

            return $this->functionname;
      }

      /**
       * ExtRoute::setFunction()
       * @param string $functionName
       */
       
      function setFunction($functionName){

            $this->functionname = $functionName;
      }

      /**
       * ExtRoute::getParameters()
       * @return array $parameters
       */
       
      function getParameters(){

            return $this->parameters;
      }

      /**
       * ExtRoute::setParameters()
       * @param array $presenterParameters
       */
       
      function setParameters($presenterParameters){
        
            $this->parameters = $presenterParameters;
      }
}
?>
