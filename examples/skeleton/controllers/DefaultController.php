<?php

class DefaultController extends ExtController
{

    public $param;
    public $title = ".Net";
    public $description = ".Net";
    public $keywords = ".Net";
    public $setup;
    public $model;
    public $frhash;


    public function  __construct($route){
        
		parent::__construct($route);        
    }

    function _default(){
        $this->render();

    }

    function _about(){

          $this->render('pages/about_html.php');
        
    }
}

?>