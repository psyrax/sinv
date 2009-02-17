<?php require_once('Connections/sinv.php'); ?>
<?php
$colname_temaid = "-1";
if (isset($_GET['tema'])) {
  $colname_temaid = (get_magic_quotes_gpc()) ? $_GET['tema'] : addslashes($_GET['tema']);
}
mysql_select_db($database_sinv, $sinv);
$query_temaid = sprintf("SELECT id FROM entrevistas WHERE tema = '%s'", $colname_temaid);
$temaid = mysql_query($query_temaid, $sinv) or die(mysql_error());
$row_temaid = mysql_fetch_assoc($temaid);
$totalRows_temaid = mysql_num_rows($temaid);

$colname_pyreditar = "-1";
if (isset($_GET['pyreditar'])) {
  $colname_pyreditar = (get_magic_quotes_gpc()) ? $_GET['pyreditar'] : addslashes($_GET['pyreditar']);
}
mysql_select_db($database_sinv, $sinv);
$query_pyreditar = sprintf("SELECT * FROM pyr WHERE id = %s", $colname_pyreditar);
$pyreditar = mysql_query($query_pyreditar, $sinv) or die(mysql_error());
$row_pyreditar = mysql_fetch_assoc($pyreditar);
$totalRows_pyreditar = mysql_num_rows($pyreditar);

$obtenertema=$_GET['tema'];
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "pyreditar")) {
  $updateSQL = sprintf("UPDATE pyr SET pregunta=%s, respuesta=%s WHERE id=%s",
                       GetSQLValueString($_POST['pregunta'], "text"),
                       GetSQLValueString($_POST['respuesta'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($updateSQL, $sinv) or die(mysql_error());

  $updateGoTo = "sinv.php?vista=entrevistas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "pyr")) {
  $insertSQL = sprintf("INSERT INTO pyr (tema, pregunta, respuesta) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['pregunta'], "text"),
                       GetSQLValueString($_POST['respuesta'], "text"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($insertSQL, $sinv) or die(mysql_error());
 $tema=$_POST['tema'];
  $insertGoTo = "entrevistas.php?tema=$tema";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "entrevisainicio")) {
  $insertSQL = sprintf("INSERT INTO entrevistas (tema, entrevistado, archivo) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['entrevistado'], "text"),
                       GetSQLValueString($_POST['archivo'], "text"));
 $tema=$_POST['tema'];
  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($insertSQL, $sinv) or die(mysql_error());

  $insertGoTo = "entrevistas.php?tema=$tema";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
$pyreditar=$_GET['pyreditar'];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nueva Entrevista</title>
</head>

<body><?php if ($obtenertema=="") { // ?>
<form id="entrevisainicio" name="entrevisainicio" method="POST" action="<?php echo $editFormAction; ?>">
Tema:
    <input name="tema" type="text" id="tema" />
    <br />
    Entrevistado: 
    <input name="entrevistado" type="text" id="entrevistado" />
    <br />
    Archivo:
    <input name="archivo" type="text" id="archivo" />
    <br />
<input name="Continuar &gt;" type="submit" id="Continuar &gt;" value="Continuar &gt;" />
  <input type="hidden" name="MM_insert" value="entrevisainicio">
</form>
<?php } // ?><?php if ($obtenertema!="") { // ?>
<form id="pyr" name="pyr" method="POST" action="<?php echo $editFormAction; ?>">
  <input name="tema" type="hidden" id="tema" value="<?php echo $row_temaid['id']; ?>" />
  Tema 
  <?php echo $obtenertema; ?><br />
  Pregunta:
  <input name="pregunta" type="text" id="pregunta" size="60" />
  <br />
  Respuesta: 
    <textarea name="respuesta" cols="60" rows="5" id="respuesta"></textarea>
    <br />
    <input name="Continuar &gt;" type="submit" id="Continuar &gt;" value="Continuar &gt;" />
    <input type="hidden" name="MM_insert" value="pyr">
</form>
<?php } // ?>
<?php if ($pyreditar!="") { // ?>
<form id="pyreditar" name="pyreditar" method="POST" action="<?php echo $editFormAction; ?>">
  <?php echo $row_pyreditar['tema']; ?>
  <input name="id" type="hidden" id="id" value="<?php echo $row_pyreditar['id']; ?>" />
  <br />
  <input name="pregunta" type="text" id="pregunta" value="<?php echo $row_pyreditar['pregunta']; ?>" size="60" />
  <br />
  <textarea name="respuesta" cols="60" rows="5" id="respuesta"><?php echo $row_pyreditar['respuesta']; ?></textarea>
  <br />
  <input name="Editar" type="submit" id="Editar" value="Editar" />
<input type="hidden" name="MM_update" value="pyreditar">
</form>
<?php } // ?>
</body>
</html>