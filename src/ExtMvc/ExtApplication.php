<?php
/**
 * This is a part of the ExtPHP framework

 */
class ExtApplication{
    

    private static $instance = false; 
    public $controller;
    public $router;
    public $appSecure = false;
    public $appSecureVar = '';
    public $appSecureController;
    public $authentication = false;
  
    public function __construct(){
        	   
    }

	/**
	 * ExtApplication::getApplication()
	 * 
	 * @return $this
	 */
     
	public static function getApplication(){
	
		if(self::$instance === false){
			self::$instance = new ExtApplication;
		}
        return self::$instance;
	} 	

	/**
	 * ExtApplication::setRouter()
	 * 
	 * @param ExtRouter $router

	 */
     
	public function setRouter($router){

        $this->router=$router;

	}
	
	/**
	 * ExtApplication::isPresenter()
	 * 
	 * @param mixed $presenterName
	
	 */
     
	function isController($controllerName){
	  
		if(file_exists('controllers/'.$controllerName.'Controller.php')){
			return true;
		}
		else{
			return false;
		}
	}
    
	/**
	 * ExtApplication::secureApp()
	 * 
	 * @param mixed $varname
	 * @param mixed $presenter

	 */
     
	public function secureApp($varname,$presenter){

		$this->appSecure = true;
		$this->appSecureVar = $varname;
		$this->appSecureController = $presenter;

	}

	/**
	 * ExtApplication::secureCheck()
	 * 
	 * @return bool
	 */
     
	function secureCheck(){

		if(isset($_SESSION[$this->appSecureVar]) ){
			return true;
		}
		else{
			return false;
		}
		

	}
    
    /**
     * ExtApplication::getAuthentication()
     * 
     * @return bool
     */
     
    function getAuthentication(){

        return $this->authentication;

	}
    
	/**
	 * ExtApplication::run()
	 * 
	 * @void
	 */
     
	public function run(){

		$controllerName = $this->router->route->getControllerName();
	
        if($this->isController($controllerName) == false){
			$controllerName = 'Error';
		}
		else{
		}
			if($this->appSecure == true){
				if(!$this->secureCheck() == true){
					$controllerName = $this->appSecureController;
				}
			}		
			else{
				
			}

		$controllerClass = $controllerName."Controller";
		$this->controller= new $controllerClass($this->router->route);
		$this->controller ->run();


	}
}
?>