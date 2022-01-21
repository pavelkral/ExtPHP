<?php
/**
 * This is a part of the ExtPHP framework
 *
 * @copyright  Copyright (c) 2009-2011 Pavel Kral
 * @link       http://x-design.wz.cz/extphp/
 * @category    framework 
 * 
 * For the full copyright and license information, please view
 * the license.txt that was distributed with this source code.
 * 
 * ExtApplication
 * @package  ExtPHP
 * @author Pavel Kral
 * @version 2011
 * @access public
 */


 
class ExtApplication{
    

    private static $instance = false; 
    public $presenter;
    public $router;
    public $appSecure = false;
    public $appSecureVar = '';
    public $appSecurePresenter;
    public $authentication = false;


	/**
	 * ExtApplication::__construct()

	 */
         
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
     
	function isPresenter($presenterName){
	  
		if(file_exists('presenters/'.$presenterName.'Presenter.php')){
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
		$this->appSecurePresenter = $presenter;

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

		$presenterName = $this->router->route->getPresenterName();
	
        if($this->isPresenter($presenterName) == false){
			$presenterName = 'Error';
		}
		else{
		}
			if($this->appSecure == true){
				if(!$this->secureCheck() == true){
					$presenterName = $this->appSecurePresenter;
				}
			}		
			else{
				
			}

		$presenterClass = $presenterName."Presenter";
		$this->presenter= new $presenterClass($this->router->route);
		$this->presenter ->run();


	}
}
?>