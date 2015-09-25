 <?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
 */

class ExtRouter
{

// ExtRoute
public  $route;



    /**
     * ExtRouter::__construct()

     */
     
    public function __construct(){

        $_getmask ="/^[\?][&a-zA-Z0-9=]*$/i";

    	$uri = explode('/', $_SERVER['REQUEST_URI']);
       	$script = explode('/',$_SERVER['SCRIPT_NAME']);        
    	$urlarr = array_diff_assoc($uri,$script);        
    	$urlarr = array_values($urlarr);
        
        //echo $urlarr;
    
    	$presenterName = $urlarr[0];
    	$presenterFunction = $urlarr[1];
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