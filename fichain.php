<?php require_once('Connections/sinv.php'); ?>
<?php include('restrict.php'); ?>
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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "libro")) {
  $insertSQL = sprintf("INSERT INTO fichero (autor1, autor2, autor3, autor4, autor5, autor6, orgautor, etal, yyyy, titulolibro, ciudad, editorial, contenido, comentario, extra, anotaciones, tipofuente, tema, tipoficha, maker) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['autor1'], "text"),
                       GetSQLValueString($_POST['autor2'], "text"),
                       GetSQLValueString($_POST['autor3'], "text"),
                       GetSQLValueString($_POST['autor4'], "text"),
                       GetSQLValueString($_POST['autor5'], "text"),
                       GetSQLValueString($_POST['autor6'], "text"),
                       GetSQLValueString($_POST['orgautor'], "text"),
                       GetSQLValueString($_POST['etal'], "text"),
                       GetSQLValueString($_POST['yyyy'], "text"),
                       GetSQLValueString($_POST['titulolibro'], "text"),
                       GetSQLValueString($_POST['ciudad'], "text"),
                       GetSQLValueString($_POST['editorial'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['extra'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['tipofuente'], "text"),
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['tipoficha'], "text"),
					   GetSQLValueString($_POST['maker'], "text"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($insertSQL, $sinv) or die(mysql_error());

  $insertGoTo = "sinv.php?vista=fichas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "libroeditar")) {
  $updateSQL = sprintf("UPDATE fichero SET autor1=%s, autor2=%s, autor3=%s, autor4=%s, autor5=%s, autor6=%s, orgautor=%s, etal=%s, yyyy=%s, titulolibro=%s, ciudad=%s, editorial=%s, contenido=%s, comentario=%s, extra=%s, anotaciones=%s, tipofuente=%s, tema=%s, tipoficha=%s, maker=%s WHERE id=%s",
                       GetSQLValueString($_POST['autor1'], "text"),
                       GetSQLValueString($_POST['autor2'], "text"),
                       GetSQLValueString($_POST['autor3'], "text"),
                       GetSQLValueString($_POST['autor4'], "text"),
                       GetSQLValueString($_POST['autor5'], "text"),
                       GetSQLValueString($_POST['autor6'], "text"),
                       GetSQLValueString($_POST['orgautor'], "text"),
                       GetSQLValueString($_POST['etal'], "text"),
                       GetSQLValueString($_POST['yyyy'], "text"),
                       GetSQLValueString($_POST['titulolibro'], "text"),
                       GetSQLValueString($_POST['ciudad'], "text"),
                       GetSQLValueString($_POST['editorial'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['extra'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['tipofuente'], "text"),
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['tipoficha'], "text"),
					   GetSQLValueString($_POST['maker'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($updateSQL, $sinv) or die(mysql_error());

  $updateGoTo = "sinv.php?vista=fichas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "librocapt")) {
  $insertSQL = sprintf("INSERT INTO fichero (autor1, autor2, autor3, autor4, autor5, autor6, orgautor, etal, editor1, editor2, yyyy, titulolibro, titulocapitulo, tituloarticulo, ciudad, editorial, paginas, contenido, comentario, extra, anotaciones, tipofuente, tema, tipoficha, maker) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['autor1'], "text"),
                       GetSQLValueString($_POST['autor2'], "text"),
                       GetSQLValueString($_POST['autor3'], "text"),
                       GetSQLValueString($_POST['autor4'], "text"),
                       GetSQLValueString($_POST['autor5'], "text"),
                       GetSQLValueString($_POST['autor6'], "text"),
                       GetSQLValueString($_POST['orgautor'], "text"),
                       GetSQLValueString($_POST['etal'], "text"),
                       GetSQLValueString($_POST['editor1'], "text"),
                       GetSQLValueString($_POST['editor2'], "text"),
                       GetSQLValueString($_POST['yyyy'], "text"),
                       GetSQLValueString($_POST['titulolibro'], "text"),
                       GetSQLValueString($_POST['titulocapitulo'], "text"),
                       GetSQLValueString($_POST['tituloarticulo'], "text"),
                       GetSQLValueString($_POST['ciudad'], "text"),
                       GetSQLValueString($_POST['editorial'], "text"),
                       GetSQLValueString($_POST['paginas'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['extra'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['tipofuente'], "text"),
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['tipoficha'], "text"),
					   GetSQLValueString($_POST['maker'], "text"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($insertSQL, $sinv) or die(mysql_error());

  $insertGoTo = "sinv.php?vista=fichas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "librocapteditar")) {
  $updateSQL = sprintf("UPDATE fichero SET autor1=%s, autor2=%s, autor3=%s, autor4=%s, autor5=%s, autor6=%s, orgautor=%s, etal=%s, editor1=%s, editor2=%s, yyyy=%s, titulolibro=%s, titulocapitulo=%s, tituloarticulo=%s, ciudad=%s, editorial=%s, paginas=%s, contenido=%s, comentario=%s, extra=%s, anotaciones=%s, tipofuente=%s, tema=%s, tipoficha=%s, maker=%s WHERE id=%s",
                       GetSQLValueString($_POST['autor1'], "text"),
                       GetSQLValueString($_POST['autor2'], "text"),
                       GetSQLValueString($_POST['autor3'], "text"),
                       GetSQLValueString($_POST['autor4'], "text"),
                       GetSQLValueString($_POST['autor5'], "text"),
                       GetSQLValueString($_POST['autor6'], "text"),
                       GetSQLValueString($_POST['orgautor'], "text"),
                       GetSQLValueString($_POST['etal'], "text"),
                       GetSQLValueString($_POST['editor1'], "text"),
                       GetSQLValueString($_POST['editor2'], "text"),
                       GetSQLValueString($_POST['yyyy'], "text"),
                       GetSQLValueString($_POST['titulolibro'], "text"),
                       GetSQLValueString($_POST['titulocapitulo'], "text"),
                       GetSQLValueString($_POST['tituloarticulo'], "text"),
                       GetSQLValueString($_POST['ciudad'], "text"),
                       GetSQLValueString($_POST['editorial'], "text"),
                       GetSQLValueString($_POST['paginas'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['extra'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['tipofuente'], "text"),
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['tipoficha'], "text"),
					   GetSQLValueString($_POST['maker'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($updateSQL, $sinv) or die(mysql_error());

  $updateGoTo = "sinv.php?vista=fichas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "revista")) {
  $insertSQL = sprintf("INSERT INTO fichero (autor1, autor2, autor3, autor4, autor5, autor6, orgautor, etal, yyyy, tituloarticulo, titulopublicacion, paginas, volumen, tomo, contenido, comentario, extra, anotaciones, tipofuente, tema, tipoficha, maker) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['autor1'], "text"),
                       GetSQLValueString($_POST['autor2'], "text"),
                       GetSQLValueString($_POST['autor3'], "text"),
                       GetSQLValueString($_POST['autor4'], "text"),
                       GetSQLValueString($_POST['autor5'], "text"),
                       GetSQLValueString($_POST['autor6'], "text"),
                       GetSQLValueString($_POST['orgautor'], "text"),
                       GetSQLValueString($_POST['etal'], "text"),
                       GetSQLValueString($_POST['yyyy'], "text"),
                       GetSQLValueString($_POST['tituloarticulo'], "text"),
                       GetSQLValueString($_POST['titulopublicacion'], "text"),
                       GetSQLValueString($_POST['paginas'], "text"),
                       GetSQLValueString($_POST['volumen'], "text"),
                       GetSQLValueString($_POST['tomo'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['extra'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['tipofuente'], "text"),
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['tipoficha'], "text"),
					   GetSQLValueString($_POST['maker'], "text"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($insertSQL, $sinv) or die(mysql_error());

  $insertGoTo = "sinv.php?vista=fichas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "revistaed")) {
  $updateSQL = sprintf("UPDATE fichero SET autor1=%s, autor2=%s, autor3=%s, autor4=%s, autor5=%s, autor6=%s, orgautor=%s, etal=%s, yyyy=%s, tituloarticulo=%s, titulopublicacion=%s, paginas=%s, volumen=%s, tomo=%s, contenido=%s, comentario=%s, extra=%s, anotaciones=%s, tipofuente=%s, tema=%s, tipoficha=%s, maker=%s WHERE id=%s",
                       GetSQLValueString($_POST['autor1'], "text"),
                       GetSQLValueString($_POST['autor2'], "text"),
                       GetSQLValueString($_POST['autor3'], "text"),
                       GetSQLValueString($_POST['autor4'], "text"),
                       GetSQLValueString($_POST['autor5'], "text"),
                       GetSQLValueString($_POST['autor6'], "text"),
                       GetSQLValueString($_POST['orgautor'], "text"),
                       GetSQLValueString($_POST['etal'], "text"),
                       GetSQLValueString($_POST['yyyy'], "text"),
                       GetSQLValueString($_POST['tituloarticulo'], "text"),
                       GetSQLValueString($_POST['titulopublicacion'], "text"),
                       GetSQLValueString($_POST['paginas'], "text"),
                       GetSQLValueString($_POST['volumen'], "text"),
                       GetSQLValueString($_POST['tomo'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['extra'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['tipofuente'], "text"),
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['tipoficha'], "text"),
					   GetSQLValueString($_POST['maker'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($updateSQL, $sinv) or die(mysql_error());

  $updateGoTo = "sinv.php?vista=fichas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "periodico")) {
  $insertSQL = sprintf("INSERT INTO fichero (autor1, autor2, autor3, autor4, autor5, autor6, orgautor, etal, yyyy, mm, dd, tituloarticulo, tituloperiodico, paginas, contenido, comentario, extra, anotaciones, tipofuente, tema, tipoficha, maker) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['autor1'], "text"),
                       GetSQLValueString($_POST['autor2'], "text"),
                       GetSQLValueString($_POST['autor3'], "text"),
                       GetSQLValueString($_POST['autor4'], "text"),
                       GetSQLValueString($_POST['autor5'], "text"),
                       GetSQLValueString($_POST['autor6'], "text"),
                       GetSQLValueString($_POST['orgautor'], "text"),
                       GetSQLValueString($_POST['etal'], "text"),
                       GetSQLValueString($_POST['yyyy'], "text"),
                       GetSQLValueString($_POST['mm'], "text"),
                       GetSQLValueString($_POST['dd'], "text"),
                       GetSQLValueString($_POST['tituloarticulo'], "text"),
                       GetSQLValueString($_POST['tituloperiodico'], "text"),
                       GetSQLValueString($_POST['paginas'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['extra'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['tipofuente'], "text"),
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['tipoficha'], "text"),
					   GetSQLValueString($_POST['maker'], "text"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($insertSQL, $sinv) or die(mysql_error());

  $insertGoTo = "sinv.php?vista=fichas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "periodicoed")) {
  $updateSQL = sprintf("UPDATE fichero SET autor1=%s, autor2=%s, autor3=%s, autor4=%s, autor5=%s, autor6=%s, orgautor=%s, etal=%s, yyyy=%s, mm=%s, dd=%s, tituloarticulo=%s, tituloperiodico=%s, paginas=%s, contenido=%s, comentario=%s, extra=%s, anotaciones=%s, tipofuente=%s, tema=%s, tipoficha=%s, maker=%s WHERE id=%s",
                       GetSQLValueString($_POST['autor1'], "text"),
                       GetSQLValueString($_POST['autor2'], "text"),
                       GetSQLValueString($_POST['autor3'], "text"),
                       GetSQLValueString($_POST['autor4'], "text"),
                       GetSQLValueString($_POST['autor5'], "text"),
                       GetSQLValueString($_POST['autor6'], "text"),
                       GetSQLValueString($_POST['orgautor'], "text"),
                       GetSQLValueString($_POST['etal'], "text"),
                       GetSQLValueString($_POST['yyyy'], "text"),
                       GetSQLValueString($_POST['mm'], "text"),
                       GetSQLValueString($_POST['dd'], "text"),
                       GetSQLValueString($_POST['tituloarticulo'], "text"),
                       GetSQLValueString($_POST['tituloperiodico'], "text"),
                       GetSQLValueString($_POST['paginas'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['extra'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['tipofuente'], "text"),
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['tipoficha'], "text"),
					   GetSQLValueString($_POST['maker'], "text"),
                       GetSQLValueString($_POST['id'], "int"));
					   
  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($updateSQL, $sinv) or die(mysql_error());

  $updateGoTo = "sinv.php?vista=fichas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "internet")) {
  $insertSQL = sprintf("INSERT INTO fichero (autor1, autor2, autor3, autor4, autor5, autor6, orgautor, etal, yyyy, mm, dd, tituloarticulo, url, contenido, comentario, extra, anotaciones, tipofuente, tema, tipoficha, maker) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['autor1'], "text"),
                       GetSQLValueString($_POST['autor2'], "text"),
                       GetSQLValueString($_POST['autor3'], "text"),
                       GetSQLValueString($_POST['autor4'], "text"),
                       GetSQLValueString($_POST['autor5'], "text"),
                       GetSQLValueString($_POST['autor6'], "text"),
                       GetSQLValueString($_POST['orgautor'], "text"),
                       GetSQLValueString($_POST['etal'], "text"),
                       GetSQLValueString($_POST['yyyy'], "text"),
                       GetSQLValueString($_POST['mm'], "text"),
                       GetSQLValueString($_POST['dd'], "text"),
                       GetSQLValueString($_POST['tituloarticulo'], "text"),
                       GetSQLValueString($_POST['url'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['extra'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['tipofuente'], "text"),
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['tipoficha'], "text"),
					   GetSQLValueString($_POST['maker'], "text"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($insertSQL, $sinv) or die(mysql_error());

  $insertGoTo = "sinv.php?vista=fichas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "interneted")) {
  $updateSQL = sprintf("UPDATE fichero SET autor1=%s, autor2=%s, autor3=%s, autor4=%s, autor5=%s, autor6=%s, orgautor=%s, etal=%s, yyyy=%s, mm=%s, dd=%s, tituloarticulo=%s, url=%s, contenido=%s, comentario=%s, extra=%s, anotaciones=%s, tipofuente=%s, tema=%s, tipoficha=%s, maker=%s WHERE id=%s",
                       GetSQLValueString($_POST['autor1'], "text"),
                       GetSQLValueString($_POST['autor2'], "text"),
                       GetSQLValueString($_POST['autor3'], "text"),
                       GetSQLValueString($_POST['autor4'], "text"),
                       GetSQLValueString($_POST['autor5'], "text"),
                       GetSQLValueString($_POST['autor6'], "text"),
                       GetSQLValueString($_POST['orgautor'], "text"),
                       GetSQLValueString($_POST['etal'], "text"),
                       GetSQLValueString($_POST['yyyy'], "text"),
                       GetSQLValueString($_POST['mm'], "text"),
                       GetSQLValueString($_POST['dd'], "text"),
                       GetSQLValueString($_POST['tituloarticulo'], "text"),
                       GetSQLValueString($_POST['url'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['extra'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['tipofuente'], "text"),
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['tipoficha'], "text"),
					   GetSQLValueString($_POST['maker'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_sinv, $sinv);
  $Result1 = mysql_query($updateSQL, $sinv) or die(mysql_error());

  $updateGoTo = "sinv.php?vista=fichas";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$editar = $_GET['editar'];?>
<?php include('globales.php'); ?>
<?php
$fuente = $_GET['fuente'];

$editartipo = $_GET['tipofuente'];?>
<?php include('userid.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php if ($fuente !=""){ //?> Ficha Nueva de <?php echo $fuente; ?><?php } // }?><?php if ($editar !=""){ //?> Editar Ficha de <?php echo $row_global['tipofuente'];?><?php } // }?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('userbar.php'); ?>
<div class="wrap">
<!--- Ingresar --->

<?php if ($fuente =="libro"){ // ?>
<?php include('libroin.php'); ?>
<?php }// ?>

<?php if ($fuente =="librocapt"){ // ?>
<?php include('librocaptin.php'); ?>
<?php }// ?>

<?php if ($fuente =="revista"){ // ?>
<?php include('revistain.php'); ?>
<?php }// ?>

<?php if ($fuente =="periodico"){ // ?>
<?php include('periodicoin.php'); ?>
<?php }// ?>

<?php if ($fuente =="internet"){ // ?>
<?php include('internetin.php'); ?>
<?php }// ?>

<!--- Editar --->
<?php if ($editar!=""){ // ?>

<?php if ($row_global['tipofuente']=="libro"){ // ?>
<?php include('libroeditar.php'); ?>
<?php }// ?>

<?php if ($row_global['tipofuente']=="librocapt"){ // ?>
<?php include('librocapted.php'); ?>
<?php }// ?>

<?php if ($row_global['tipofuente']=="revista"){ // ?>
<?php include('revistaed.php'); ?>
<?php }// ?>

<?php if ($row_global['tipofuente']=="periodico"){ // ?>
<?php include('periodicoed.php'); ?>
<?php }// ?>

<?php if ($row_global['tipofuente']=="internet"){ // ?>
<?php include('interneted.php'); ?>
<?php }// ?>


<?php }// ?>
</div>
</body>
</html>