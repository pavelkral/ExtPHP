<html>
<head>
	<title>Error</title>
</head>
<body>
<h1>Fatal error</h1>

<strong>The incoming URL: </strong>
<br/>
<span>
<?php echo 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?></span>
<br /> 
Object:
<br/>
	
<span><pre><?php echo urldecode(htmlentities(print_r($this->route,true)));?></pre></span>
<br /><br />
<a href='<?php echo ExtHttpRequest::getScriptUrl();?>Default/'>Return - The default </a>
<br/>
<br />
 
<?php echo $concent; ?>

</body>
</html>