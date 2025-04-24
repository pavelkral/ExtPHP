<?php

 
class ErrorController extends ExtController
{
        /**
         * ErrorPresenter::__construct()
         * 
         * @param mixed $route
         * @return
         */
         
        public function  __construct($route){
    		parent::__construct($route);
        }
        
        /**
         * ErrorPresenter::_default()
         * 
         * @return
         */
         
        function _default(){
   		 
            $this->render('');
            
        }
}
?>