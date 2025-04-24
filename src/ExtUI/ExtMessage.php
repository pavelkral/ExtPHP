<?php
/**
 * ExtPHP framework
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