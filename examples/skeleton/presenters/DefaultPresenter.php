<?php

class DefaultPresenter extends ExtPresenter
{
    public function  __construct($route){
		parent::__construct($route);
    }
    function _default(){
        $this->render();
    }

}
?>