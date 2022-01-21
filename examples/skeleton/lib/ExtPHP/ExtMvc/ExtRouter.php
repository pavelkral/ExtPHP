 <?php
/**
 * ExtPHP framework
 * This source file is subject to the ExtPHP framework license
 * with this package in the file license.txt.
 * @copyright  Copyright (c) 2009 Pavel Kral
 
 */

class ExtRouter
{

// ExtRoute
public  $route;
     
    public function __construct(){

        $_getmask ="/^[\?][&a-zA-Z0-9=]*$/i";

    	$uri = explode('/', $_SERVER['REQUEST_URI']);
       	$script = explode('/',$_SERVER['SCRIPT_NAME']);        
    	$urlarr = array_diff_assoc($uri,$script);        
    	$urlarr = array_values($urlarr);
        
       // echo "url".$urlarr.count();
       // var_dump(count($urlarr));

        if($urlarr[0] != null) {
             $presenterName = $urlarr[0];
        }
        else{
            $presenterName = "Default";
        }
        if(isset($urlarr[1])) {	
            $presenterFunction = $urlarr[1];
        }
        else{
            $presenterFunction = "default";
        }
        $urlarr[0];
    	
    
    	$parameters = array_slice($urlarr,2);
    
  		if (preg_match($_getmask ,$presenterFunction)){
    			   $presenterFunction = 'default';
        }
			if (preg_match($_getmask ,$presenterName)){
				  $presenterName = 'Default';
			}                    
      			if($presenterName == ''){
                    $presenterName = 'Default';
                }
                
                    for($i=0;$i < count($parameters);$i++){
                        
                        if (preg_match($_getmask ,$parameters[$i])){
            			     $parameters[$i] = null;
                        }
                    }
            
    	$this->route = new ExtRoute($presenterName,$presenterFunction,$parameters);
    }
    
    /**
     * ExtRouter::getRoute()
     * 
     * @return $this ExtRoute
     */
     
    public function getRoute(){
    
        return $this->route;
    }
}
?>