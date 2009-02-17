<?php require_once('Connections/sinv.php'); ?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password= md5 ($_POST['password']);
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "sinv.php";
  $MM_redirectLoginFailed = "index.php?pass=failed";
  $MM_redirecttoReferrer = true;
  mysql_select_db($database_sinv, $sinv);
  
  $LoginRS__query=sprintf("SELECT username, password FROM users WHERE username='%s' AND password='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $sinv) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && true) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::SINV:: Login</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body><div align="center">
  <div  class="logbox"><img src="sin.png" width="228" height="154" /><br /><form id="login" name="login" method="POST" action="<?php echo $loginFormAction; ?>">
      <b>Sistemas de Investigaci&oacute;n</b>
      <table width="224" border="0">
        <tr>
          <td width="70"><div align="right">Usuario:</div></td>
          <td width="144"><input name="username" type="text" id="username" /></td>
        </tr>
        <tr>
          <td><div align="right">Contrase&ntilde;a:</div></td>
          <td><input name="password" type="password" id="password" /></td>
        </tr>
      </table>
      <div align="right">
    <input name="Log me in" type="submit" id="Log me in" value="Log me in" /></div>
</form></div></div>
</body>
</html>
