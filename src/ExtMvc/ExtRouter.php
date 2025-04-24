 <?php
/**
 * ExtPHP framework
 
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
             $controllerName = $urlarr[0];
        }
        else{
            $controllerName = "Default";
        }
        if(isset($urlarr[1])) {	
            $controllerFunction = $urlarr[1];
        }
        else{
            $controllerFunction = "default";
        }
        $urlarr[0];
    	
    
    	$parameters = array_slice($urlarr,2);
    
  		if (preg_match($_getmask ,$controllerFunction)){
    			   $controllerFunction = 'default';
        }
			if (preg_match($_getmask ,$controllerName)){
				  $controllerName = 'Default';
			}                    
      			if($controllerName == ''){
                    $controllerName = 'Default';
                }
                
                    for($i=0;$i < count($parameters);$i++){
                        
                        if (preg_match($_getmask ,$parameters[$i])){
            			     $parameters[$i] = null;
                        }
                    }
            
    	$this->route = new ExtRoute($controllerName,$controllerFunction,$parameters);
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