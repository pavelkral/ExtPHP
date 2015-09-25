<?php

 
class ErrorPresenter extends ExtPresenter
{
        public function  __construct($route){
    		parent::__construct($route);
        }
        function _default(){
   		 
            $this->render('');
            
        }
}
?>