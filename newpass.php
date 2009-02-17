<?php require_once('Connections/sinv.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "passer")) {
  $updateSQL = sprintf("UPDATE users SET password=%s WHERE id=%s",
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($updateSQL, $sinv) or die(mysql_error());

  $updateGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php $passurl=$_GET['pass']; ?>
<?php if ($passurl=="") { //  ?>
<form id="changepass" name="changepass" method="POST" action="newpass.php?pass=2">
 <br />
    newpass:
    <input name="password" type="password" id="password" />
    <br />
    <input type="submit" name="Submit" value="Submit" />
</form>
<?php } // ?>
<?php if ($passurl=="2") { // ?>
<form id="passer" name="passer" method="POST" action="<?php echo $editFormAction; ?>">
  <input name="password" type="hidden" id="password" value="<?php echo md5 ($_POST['password']) ?>" />
  <input name="id" type="hidden" id="id" value="1" />
  <input type="submit" name="Submit2" value="Submit" />
  <input type="hidden" name="MM_update" value="passer">
</form>
<?php } // ?>
</body>
</html>