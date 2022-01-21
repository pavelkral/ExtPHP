<?php
/**
 * ExtPHP framework
 * This source file is subject to the ExtPHP framework license
 * with this package in the file license.txt.
 * @copyright  Copyright (c) 2009-2011 Pavel Kral
 * @license   http://x-design.wz.cz/license ExtPHP framework license
 * @link       http://x-design.wz.cz
 * @category    framework
 */
 
 
class ExtMessage extends ExtPresenter
{

    public $color;
    public $msg;
    public $enable = false;


    
	/**
	 * ExtMessage::__construct()
	 * 
	 * @param mixed $color
	 * @param mixed $msg
	 * @return
	 */
	public function  __construct($color,$msg){

    	$this->color = $color;
       	$this->msg = $msg;
        
        
    }


    /**
     * ExtMessage::show()
     * 
     * @return
     */
    public function show()
    {
  
                
                $this->render('components/msg_html.php');
    }
}
?>