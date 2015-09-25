<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Ecart - Simple web shoping system</title>
  <meta name="GENERATOR" content="Quanta Plus" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="<? echo "".ROUTE_BASE_ADMIN.""; ?>views/css/style.css" rel="stylesheet" type="text/css" />

  <link href="<? echo "".ROUTE_BASE_ADMIN.""; ?>views/css/ExtPHP.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<div class="login">

<form name="form1" method="post" action="<? echo "".ROUTE_BASE_ADMIN.""; ?>Login/log/">
<table cellpadding="4" border="0" align="center" width="500" bgcolor="#3B3B3B" >

</tr>
<td >
Login: <br /><input type="text" name="user_name" class="txt" />
</td>
<td width="60" rowspan="2" align="right"><img src="<? echo "".ROUTE_BASE_ADMIN.""; ?>views/png/icon.png" align="left" border="0" />
</td>
</tr>
<tr>
<td>
Password: <br /><input type="password" name="user_passwd"  class="txt" />
</td>
</tr>
<tr>
<td align="right" colspan="2">
<input type="hidden" name="log_request" value="1" />
<input type="submit" value="login" class="odeslat" />   
</td>
</tr>
</table>
<br />

</form>

</div>


</body>
</html>
 
