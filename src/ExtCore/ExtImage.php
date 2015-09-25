<?php
/**
 * ExtPHP framework
 * @author Pavel Kral
 * @version 2011
 */

class ExtImage{
    
  

    public function __construct(){


    }    

    /**
     * ExtImage::resizeImage()
     * 
     * @param mixed $newWidth
     * @param mixed $maxHeight
     * @param mixed $file
     * @param mixed $filepath
     * @param mixed $prefix
     * @return void
     */
     
    public static function resizeImage($newWidth,$maxHeight,$file,$filepath,$prefix){

    	$filename = $filepath . $file;
    
        $mask ="/^[_a-z0-9-\.]*(\.[jpg]{2,4})$/i";
    	$mask1 ="/^[_a-z0-9-\.]*(\.[png]{2,4})$/i";
    	$mask2 ="/^[_a-z0-9-\.]*(\.[gif]{2,4})$/i";
    
    	if (preg_match($mask ,$file)){
    		$img = 1;
    	}
    		if (preg_match($mask1 ,$file)){
    			$img = 2;
    		}
    			if (preg_match($mask2 ,$file)){
    				$img = 3;
    			}
    	else{
    		
    	}
    
    	list($width, $height) = getimagesize($filename);
        
   		$pomer = $height/$width;
		$newheight = $newWidth*$pomer;
	
		if($newheight > $maxHeight){
			$newheight = $maxHeight;
			$newWidth = $maxHeight/$pomer;
		}
        
        
    		
    	$thumb = imagecreatetruecolor($newWidth, $newheight);
    	
    	switch ($img) {
        	case 1:
        		
        		$source = imagecreatefromjpeg($filename);
        		imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newheight, $width, $height);
        		imagejpeg($thumb,''.$filepath.''.$prefix.''.$file.'', 100);
        		//echo 'jpg';	
        		break;
        	case 2:
        		
        		$source = imagecreatefrompng($filename);
        		imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newheight, $width, $height);
        		imagepng($thumb,''.$filepath.''.$prefix.''.$file.'');
        	//	echo 'png';
                
        		break;
        	case 3:
        	
        		$source = imagecreatefromgif($filename);
        		imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newheight, $width, $height);
        		imagegif($thumb,''.$filepath.''.$prefix.''.$file.'', 100);
        		//echo 'gif';
        		break;
    	}
    
    	chmod (''.$filepath.''.$prefix.''.$file.'', 0777);
        

    }
}

?>
