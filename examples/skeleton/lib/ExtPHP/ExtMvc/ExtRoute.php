 <?php
/**
 * ExtPHP framework
 */


class ExtRoute
{

      public $controllername = '';
      public $functionname = '';
      public $parameters = array();

 
     /**
      * ExtRoute::__construct()
      * @param string $controllername
      * @param string $functionName
      * @param string $parameters
      */
      
     public function __construct($controllername,$functionname,$parameters) {

			$this->parameters = $parameters;
			$this->controllername = $controllername;
			$this->functionname= $functionname;
      }

      /**
       * ExtRoute::getcontrollername()
       * @return string $controllername
       */
       
      function getControllerName(){

            return $this->controllername;
      }

      /**
       * ExtRoute::setcontrollername()
       * @param string $controllername
 
       */
       
      function setControllerName($controllername){
 
            $this->controllername = $controllername;
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
       
      function setParameters($controllerParameters){
        
            $this->parameters = $controllerParameters;
      }
}
?>
