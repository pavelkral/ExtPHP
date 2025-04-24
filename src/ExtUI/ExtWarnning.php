<?php

/**
 * ExtPHP framework

 */
 

class ExtWarnning extends ExtPresenter
{


    public $boxText;
    public $url;
    public $refreshString;

	/**
	 * ExtWarnningBox::__construct()
	 * 
	 * @param mixed $text
	 * @param mixed $str
	 * @param mixed $url
	 * @return
	 */
     
	public function  __construct($text,$str,$url){

    	$this->boxText = $text;
    	$this->refreshString = $str;
    	$this->url = $url;
        
    }

    /**
     * ExtWarnningBox::view()
     * 
     * @return
     */
     
    public function view()
    {
        echo '<form action='.$this->url.'?'.$this -> refreshString.' method=post>
            <table  align=center class=WarnningBox>
        	<tbody>
        	<tr>
        	<td width=30><img src="'.ROUTE_BASE_ADMIN.'views/png/icons/war.png" width="25" height="20" /></td><td >
        	<input type=hidden name=error value=true/><font color=white size=2>
        	<strong>'.$this -> boxText.'&nbsp;!</strong></td>
        	<td width=40 align=right><input type=submit  class=ext-submit value=OK></td>
            </tr>
        	</tbody>
        	</table>
            </form><br />';
    }

}