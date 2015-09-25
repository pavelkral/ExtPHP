<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
 */

class ExtPresenter
{

    public $route;
    public $view;
    public $components = array();
    
    
    /**
     * ArticlesPresenter::__construct()
     * 
     * @param ExtRoute $route
  
     */


    function __construct($route){
        
		$this->route = $route;

    }

    /**
     * ExtPresenter::_default()
     * 
     * @return
     */
     
    public function _default(){

    }
    
    /**
     * ExtPresenter::_error()
     * 
     * @return
     */
     
    public function _error(){
        
        $this->render('error_html.php');

    }

    /**
     * ExtPresenter::render()
     * 
     * @param string $templatename

     */
     
     
    public function render($templatename = null){
        
        if ($templatename != null) {
            
            include (DIR_TEMPLATE . $templatename);
        } 
        else {
          
            $templatename = strtolower($this->route->getPresenterName());
            
                if(file_exists('views/templates/'.$templatename.'_html.php')){
                    $templatename = $templatename . '_html.php';
                    include (DIR_TEMPLATE . $templatename);
                }
                else{
                    $templatename =  'error_html.php';
                    include (DIR_TEMPLATE . $templatename);
                }
            
        }
        
        
    }
    
   /**
    * ExtPresenter::run()
    * void

    */
    
   public function run(){
        
        $functionToCall = $this->route->getFunction();
        $parameters = $this->route->getParameters();

        if ($this->route->getFunction() == '') {
            $functionToCall = 'default';
        }
            if (!is_callable(array($this, '_' . $functionToCall))) {
                $functionToCall = 'error';
            }
            
        call_user_func(array($this, '_' . $functionToCall), $parameters);
    }
    
    
    

     /**
      * ExtPresenter::addComponent()
      * 
      * @param string $name
      * @param mixed $component
      *
      */
      
     public function addComponent($name,$component){
        
        $this->components[$name] = $component;
    }
  


}
?> 
