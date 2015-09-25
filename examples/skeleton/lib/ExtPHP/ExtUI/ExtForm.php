<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
 */
 
 
class ExtForm
{
 
	public $intSeparator;
	public $formString;
	protected $formData;
	public $formAction;
	

    /**
     * ExtForm::__construct()
     * 
     * @param mixed $action
     * @param mixed $enctype
     * @param mixed $width
     * @param mixed $headertext
     * @return
     */
    public function __construct($action,$enctype,$width,$headertext){
    	
    		$this -> formString = '<form action="'.$action.'" method="post" enctype="'.$enctype.'"><br />
                  	               <table  width="'.$width.'" class="itemHeader">
                 	               <tr><td >'.$headertext.'</td></tr></table>
                                   <table  width="'.$width.'" class="ext-form"><tbody><tr><td valign="top" width=50%>';
    		$this -> intSeparator = 1;
    
    
    }
    /**
     * ExtForm::addElement()
     * 
     * @param mixed $element
     * @return
     */
    public function addElement($element){
    
    	$this -> formString .= ''.$element.'';
        
    }
    /**
     * ExtForm::startGroupBox()
     * 
     * @param mixed $label
     * @return
     */
    public function startGroupBox($label){
    
    	$this -> formString .= '<fieldset><legend>'.$label.'</legend>';
        
    }
    /**
     * ExtForm::endGroupBox()
     * 
     * @return
     */
    public function endGroupBox()	{
    
    	$this -> formString .= '</fieldset>';
    
    }
    
    /**
     * ExtForm::addText()
     * 
     * @param mixed $name
     * @param mixed $label
     * @param mixed $value
     * @param mixed $style
     * @return
     */
    public function addText($name,$label,$value,$style){
    
    	$this -> formString .= ''.$label.':<br />&nbsp;<input type="text" class="'.$style.'" name="'.$name.'" value="'.$value.'"/><br />';
      
    }
    
    /**
     * ExtForm::addTextPass()
     * 
     * @param mixed $name
     * @param mixed $label
     * @param mixed $value
     * @return
     */
    public function addTextPass($name,$label,$value){
    
        $this -> formString .= ''.$label.':<br />&nbsp;
        <input type="password" class="ext-text" name="'.$name.'" value="'.$value.'"/><br />';
        $this -> formData[$name] = ''.$label.':<br />&nbsp;
        <input type="password" class="text" name="'.$name.'" value="'.$value.'"/><br />';
    
    
    }
    /**
     * ExtForm::addTextBox()
     * 
     * @param mixed $name
     * @param mixed $label
     * @param mixed $value
     * @return
     */
    public function addTextBox($name,$label,$value){
    
    	$this -> formString .= ''.$label.':<br />&nbsp;<textarea class="ext-area" name="'.$name.'">'.$value.'</textarea><br />';
    
    }
    
    
    /**
     * ExtForm::addCheckBox()
     * 
     * @param mixed $name
     * @param mixed $label
     * @param mixed $value
     * @param mixed $bool
     * @return
     */
    public function addCheckBox($name,$label,$value,$bool){
    
        $this -> formString .= ''.$label.':&nbsp;&nbsp;<input type="checkbox"  name="'.$name.'" value="'.$value.'" '.$bool.'>&nbsp;&nbsp;';
    
    }
    /**
     * ExtForm::addRadio()
     * 
     * @param mixed $name
     * @param mixed $label
     * @param mixed $value
     * @param mixed $action
     * @param mixed $bool
     * @return
     */
    public function addRadio($name,$label,$value,$action,$bool){
    
        $this -> formString .= '&nbsp;&nbsp;
        <input type="radio" name="'.$name.'" onClick="'.$action.'" value="'.$value.'" '.$bool.'>&nbsp;'.$label.'&nbsp;&nbsp;';
    
    }
    
    
    /**
     * ExtForm::addSeparator()
     * 
     * @return
     */
    public function addSeparator(){
    	
   	    $this -> formString .= '</td><td  valign="top">';
        $this -> intSeparator++;
    }
    
    
    /**
     * ExtForm::addAction()
     * 
     * @param mixed $action
     * @param mixed $value
     * @return
     */
    public function addAction($action,$value){
    
    	$this -> formString .= '<input type="hidden" name="'.$action.'" value="'.$value.'">';
        $this -> formAction = $action;
    }
    
    
    
    
    /**
     * ExtForm::addFile()
     * 
     * @param mixed $name
     * @param mixed $label
     * @param mixed $size
     * @param mixed $css
     * @return
     */
    public function addFile($name,$label,$size,$css)	{
    
    	$this -> formString .= ''.$label.':<br />&nbsp;<input type="file" name="'.$name.'" class="'.$css.'" size="'.$size.'" />';
    
    }
    
    
    /**
     * ExtForm::addComboBox()
     * 
     * @param mixed $name
     * @param mixed $label
     * @param mixed $data
     * @param mixed $optionprfx
     * @return
     */
    public function addComboBox($name,$label,$data,$optionprfx){
    
    	$this -> formString .= ''.$label.':<br />&nbsp;<select class="ext-option" name="'.$name.'" value="'.$value.'">';
    
    	foreach ($data as $key=>$value) { 
    		$this -> formString .= '<option value="'.$key.'" >'.$value.'</option>';		
    	}
    	$this -> formString .= '</select><br />';
    }
    
    
    
    /**
     * ExtForm::addComboSubmit()
     * 
     * @param mixed $name
     * @param mixed $value
     * @return
     */
    public function addComboSubmit($name,$value){
    
    	$this -> formString .= '</td></tr><tr><td class="right" colspan="'.$this -> intSeparator.'">
    	<input type="button" class="ext-submit" value="Zpět" onClick="javascript:history.back();"/>&nbsp;&nbsp; 
    	<input class="ext-submit" type="reset" />&nbsp;&nbsp;
    	<input type="submit"'.$name.' value="'.$value.'" class="ext-submit" /><br /></td></tr>';
    
    }
    
    
    
    /**
     * ExtForm::addDialogSubmit()
     * 
     * @param mixed $name
     * @param mixed $value
     * @return
     */
    public function addDialogSubmit($name,$value){
    
    	$this -> formString .= '</td></tr><tr><td class="right" colspan="'.$this -> intSeparator.'">
    	<input type="button" class="ext-submit" value="Zpět" onClick="javascript:history.back();"/>&nbsp;&nbsp; 
    	<input class="ext-submit" type="reset" />&nbsp;&nbsp;
    	<input type="submit"'.$name.' value="'.$value.'" class="ext-submit" />&nbsp;&nbsp;
    	<input type="button" class="ext-submit" value="Zavřít" onClick="javascript:history.back();"/>&nbsp;&nbsp; <br /></td></tr>';
    
    }
    
    /**
     * ExtForm::addSubmitButton()
     * 
     * @param mixed $name
     * @param mixed $value
     * @return
     */
    public function addSubmitButton($name,$value){
    
    	$this -> formString .= '</td></tr><tr><td class="right" colspan="'.$this -> intSeparator.'">
    	<input type="submit"'.$name.' value="'.$value.'" class="odeslat" /><br /></td></tr>';
    
    }
    /**
     * ExtForm::addButton()
     * 
     * @param mixed $value
     * @param mixed $action
     * @return
     */
    public function addButton($value,$action){
    
    	$this -> formString .= '<br /><input type="button" value="'.$value.'" class="ext-submit" onClick="'.$action.'" /><br />';
    
    }
    
       /**
        * ExtForm::generateFormHash()
        * 
        * @param mixed $salt
        * @return
        */
       public function generateFormHash($salt){
    
        $hash = md5(mt_rand(1,1000000) . $salt);
        $_SESSION['csrf_hash'] = $hash;
        return $hash;
        
    }
    


    
   /**
    * ExtForm::isValidFormHash()
    * 
    * @param mixed $hash
    * @return
    */
   public function isValidFormHash($hash){
    
        return $_SESSION['csrf_hash'] === $hash;
    }
    
    /**
     * ExtForm::finalize()
     * 
     * @return
     */
    public function finalize(){
        
    	$this -> formString .= '</tbody></table></form><br />';
    }
    
    
    /**
     * ExtForm::view()
     * 
     * @return
     */
    public function view(){
    	
        echo $this -> formString;
    }

}


//.............................................

?>

