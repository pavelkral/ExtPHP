 <?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
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
