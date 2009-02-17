<?php require_once('Connections/fichero.php'); ?>
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "libro")) {
  $updateSQL = sprintf("UPDATE fichas SET tema=%s, autor=%s, titulo=%s, editor=%s, lugar=%s, fecha=%s, tipo=%s, contenido=%s, comentario=%s, anotaciones=%s, extra1=%s, extra2=%s, pag=%s WHERE id=%s",
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['autor'], "text"),
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['editor'], "text"),
                       GetSQLValueString($_POST['lugar'], "text"),
                       GetSQLValueString($_POST['fecha'], "text"),
                       GetSQLValueString($_POST['tipo'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['extra1'], "text"),
                       GetSQLValueString($_POST['extra2'], "text"),
                       GetSQLValueString($_POST['pag'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_fichero, $fichero);
  $Result1 = mysql_query($updateSQL, $fichero) or die(mysql_error());

  $updateGoTo = "sinv.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "revista")) {
  $updateSQL = sprintf("UPDATE fichas SET tema=%s, autor=%s, titulo=%s, editor=%s, lugar=%s, fecha=%s, revista=%s, tipo=%s, contenido=%s, comentario=%s, anotaciones=%s, extra1=%s, extra2=%s, pag=%s WHERE id=%s",
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['autor'], "text"),
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['editor'], "text"),
                       GetSQLValueString($_POST['lugar'], "text"),
                       GetSQLValueString($_POST['fecha'], "text"),
                       GetSQLValueString($_POST['revista'], "text"),
                       GetSQLValueString($_POST['tipo'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['extra1'], "text"),
                       GetSQLValueString($_POST['extra2'], "text"),
                       GetSQLValueString($_POST['pag'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_fichero, $fichero);
  $Result1 = mysql_query($updateSQL, $fichero) or die(mysql_error());

  $updateGoTo = "sinv.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "internet")) {
  $updateSQL = sprintf("UPDATE fichas SET tema=%s, autor=%s, titulo=%s, editor=%s, lugar=%s, fecha=%s, url=%s, consulta=%s, tipo=%s, contenido=%s, comentario=%s, anotaciones=%s, extra1=%s, extra2=%s WHERE id=%s",
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['autor'], "text"),
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['editor'], "text"),
                       GetSQLValueString($_POST['lugar'], "text"),
                       GetSQLValueString($_POST['fecha'], "text"),
                       GetSQLValueString($_POST['url'], "text"),
                       GetSQLValueString($_POST['consulta'], "text"),
                       GetSQLValueString($_POST['tipo'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['extra1'], "text"),
                       GetSQLValueString($_POST['extra2'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_fichero, $fichero);
  $Result1 = mysql_query($updateSQL, $fichero) or die(mysql_error());

  $updateGoTo = "sinv.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "tesis")) {
  $updateSQL = sprintf("UPDATE fichas SET tema=%s, autor=%s, titulo=%s, lugar=%s, fecha=%s, tesis=%s, tipo=%s, contenido=%s, comentario=%s, anotaciones=%s, extra1=%s, extra2=%s, pag=%s WHERE id=%s",
                       GetSQLValueString($_POST['tema'], "text"),
                       GetSQLValueString($_POST['autor'], "text"),
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['lugar'], "text"),
                       GetSQLValueString($_POST['fecha'], "text"),
                       GetSQLValueString($_POST['tesis'], "text"),
                       GetSQLValueString($_POST['tipo'], "text"),
                       GetSQLValueString($_POST['contenido'], "text"),
                       GetSQLValueString($_POST['comentario'], "text"),
                       GetSQLValueString($_POST['anotaciones'], "text"),
                       GetSQLValueString($_POST['extra1'], "text"),
                       GetSQLValueString($_POST['extra2'], "text"),
                       GetSQLValueString($_POST['pag'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_fichero, $fichero);
  $Result1 = mysql_query($updateSQL, $fichero) or die(mysql_error());

  $updateGoTo = "sinv.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_selecter = "-1";
if (isset($_GET['id'])) {
  $colname_selecter = (get_magic_quotes_gpc()) ? $_GET['id'] : addslashes($_GET['id']);
}
mysql_select_db($database_fichero, $fichero);
$query_selecter = sprintf("SELECT * FROM fichas WHERE id = %s", $colname_selecter);
$selecter = mysql_query($query_selecter, $fichero) or die(mysql_error());
$row_selecter = mysql_fetch_assoc($selecter);
$totalRows_selecter = mysql_num_rows($selecter);

$fuente = $row_selecter['fuente'];
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ficha Nueva de <?php echo $fuente; ?></title>
</head>

<body>
<?php if ($fuente ==""){ // ?>
Selecciona una fuente valida
<?php } // ?>
<!--------------- LIBRO ------------------>
<?php if ($fuente == "libro") { // ?>
  Libro
  <form action="<?php echo $editFormAction; ?>" id="libro" name="libro" method="POST">
    Tema:<br />
    <input name="tema" type="text" id="tema" value="<?php echo $row_selecter['tema']; ?>" size="40" />
    <br />
Autor:<br />
<input name="autor" type="text" id="autor" value="<?php echo $row_selecter['autor']; ?>" size="40" />
<br />
Titulo:<br />
<input name="titulo" type="text" id="titulo" value="<?php echo $row_selecter['titulo']; ?>" size="40" />
<br />
Editor:<br />
<input name="editor" type="text" id="editor" value="<?php echo $row_selecter['editor']; ?>" size="40" />
<br />
Fecha:<br />
<input name="fecha" type="text" id="fecha" value="<?php echo $row_selecter['fecha']; ?>" size="40" />
<br />
Lugar:<br />
<input name="lugar" type="text" id="lugar" value="<?php echo $row_selecter['lugar']; ?>" size="40" />
<br />
    Tipo: <br />
    <select name="tipo" id="tipo">
      <option value="textual">textual</option>
      <option value="s&iacute;ntesis">s&iacute;ntesis</option>
      <option value="resumen">resumen</option>
    </select><br />
    Contenido: <br />
    <textarea name="contenido" cols="100" rows="5" id="contenido"><?php echo $row_selecter['contenido']; ?></textarea>
<br />
	Pagina(s):<br />
    <input name="pag" type="text" id="pag" value="<?php echo $row_selecter['pag']; ?>" size="10" />
    <br />
    Comentario:<br />
    <textarea name="comentario" cols="100" rows="5" id="comentario"><?php echo $row_selecter['comentario']; ?></textarea>
<br />
    Anotaciones:<br />
    <textarea name="anotaciones" cols="100" rows="4" id="anotaciones"><?php echo $row_selecter['anotaciones']; ?></textarea>
<br />
    Extra 1:<br />
    <textarea name="extra1" cols="40" rows="3" id="extra1"><?php echo $row_selecter['extra1']; ?></textarea> 
    <br />
    Extra 2:<br />
    <textarea name="extra2" cols="40" rows="3" id="extra2"><?php echo $row_selecter['extra2']; ?></textarea>
    <input name="id" type="hidden" id="id" value="<?php echo $row_selecter['id']; ?>" />
      <input name="Enviar Libro" type="submit" id="Enviar Libro" value="Enviar Libro" />
<br />
<input type="hidden" name="MM_update" value="libro">
  </form>
  <?php } // ?>
<!--------------- REVISTA ------------------>
  <?php if ($fuente == "revista") { // ?>
  Revista
  <form action="<?php echo $editFormAction; ?>" id="revista" name="revista" method="POST">
    Tema:<br />
    <input name="tema" type="text" id="tema" value="<?php echo $row_selecter['revista']; ?>" size="40" />
    <br />
Autor:<br />
<input name="autor" type="text" id="autor" value="<?php echo $row_selecter['autor']; ?>" size="40" />
<br />
Titulo:<br />
<input name="titulo" type="text" id="titulo" value="<?php echo $row_selecter['titulo']; ?>" size="40" />
<br />
    Revista:<br />
    <input name="revista" type="text" id="revista" value="<?php echo $row_selecter['revista']; ?>" size="40" />
    <br />
Editor:<br />
<input name="editor" type="text" id="editor" value="<?php echo $row_selecter['editor']; ?>" size="40" />
<br />
Fecha:<br />
<input name="fecha" type="text" id="fecha" value="<?php echo $row_selecter['fecha']; ?>" size="40" />
<br />
Lugar:<br />
<input name="lugar" type="text" id="lugar" value="<?php echo $row_selecter['lugar']; ?>" size="40" />
<br />
Tipo: <br />
<select name="tipo" id="tipo">
  <option value="textual">textual</option>
  <option value="s&iacute;ntesis">s&iacute;ntesis</option>
  <option value="resumen">resumen</option>
</select>
<br />
Contenido: <br />
<textarea name="contenido" cols="100" rows="5" id="contenido"><?php echo $row_selecter['contenido']; ?></textarea>
<br />
Pagina(s):<br />
<input name="pag" type="text" id="pag" value="<?php echo $row_selecter['pag']; ?>" size="10" />
<br />
Comentario:<br />
<textarea name="comentario" cols="100" rows="5" id="comentario"><?php echo $row_selecter['comentario']; ?></textarea>
<br />
Anotaciones:<br />
<textarea name="anotaciones" cols="100" rows="4" id="anotaciones"><?php echo $row_selecter['anotaciones']; ?></textarea>
<br />
Extra 1:<br />
<textarea name="extra1" cols="40" rows="3" id="extra1"><?php echo $row_selecter['extra1']; ?></textarea>
<br />
Extra 2:<br />
<textarea name="extra2" cols="40" rows="3" id="extra2"><?php echo $row_selecter['extra2']; ?></textarea>
<input name="id" type="hidden" id="id" value="<?php echo $row_selecter['id']; ?>" />
<input name="Enviar Revista" type="submit" id="Enviar Revista" value="Enviar Revista" />
<br />
<input type="hidden" name="MM_update" value="revista">
  </form>
  <?php } // ?>
<!--------------- Internet ------------------>
  <?php if ($fuente == "internet") { // ?>
  Internet
  <form action="<?php echo $editFormAction; ?>" id="internet" name="internet" method="POST">
    Tema:<br />
    <input name="tema" type="text" id="tema" value="<?php echo $row_selecter['tema']; ?>" size="40" />
    <br />
Autor:<br />
<input name="autor" type="text" id="autor" value="<?php echo $row_selecter['autor']; ?>" size="40" />
<br />
Titulo:<br />
<input name="titulo" type="text" id="titulo" value="<?php echo $row_selecter['titulo']; ?>" size="40" />
<br />
    Url:<br />
    <input name="url" type="text" id="url" value="<?php echo $row_selecter['url']; ?>" size="40" />
    <br />
Editor:<br />
<input name="editor" type="text" id="editor" value="<?php echo $row_selecter['editor']; ?>" size="40" />
<br />
Fecha:<br />
<input name="fecha" type="text" id="fecha" value="<?php echo $row_selecter['fecha']; ?>" size="40" />
<br />
Lugar:<br />
<input name="lugar" type="text" id="lugar" value="<?php echo $row_selecter['lugar']; ?>" size="40" />
<br />
    Consultado:<br />
    <input name="consulta" type="text" id="consulta" value="<?php echo $row_selecter['consulta']; ?>" size="40" />
    <br />
	Tipo: <br />
    <select name="tipo" id="tipo">
      <option value="textual">textual</option>
      <option value="s&iacute;ntesis">s&iacute;ntesis</option>
      <option value="resumen">resumen</option>
    </select><br />
    Contenido: <br />
    <textarea name="contenido" cols="100" rows="5" id="contenido"><?php echo $row_selecter['contenido']; ?></textarea>
<br />
	Comentario:<br />
    <textarea name="comentario" cols="100" rows="5" id="comentario"><?php echo $row_selecter['comentario']; ?></textarea>
<br />
    Anotaciones:<br />
    <textarea name="anotaciones" cols="100" rows="4" id="anotaciones"><?php echo $row_selecter['anotaciones']; ?></textarea>
<br />
    Extra 1:<br />
    <textarea name="extra1" cols="40" rows="3" id="extra1"><?php echo $row_selecter['extra1']; ?></textarea> 
    <br />
    Extra 2:<br />
    <textarea name="extra2" cols="40" rows="3" id="extra2"><?php echo $row_selecter['extra2']; ?></textarea>
    <input name="id" type="hidden" id="id" value="<?php echo $row_selecter['id']; ?>" />
      <input name="Enviar Ficha" type="submit" id="Enviar Ficha" value="Enviar Ficha" />
<br />
<input type="hidden" name="MM_update" value="internet">
  </form>
  <?php } // ?>  
<!--------------- tesis ------------------>
  <?php if ($fuente == "tesis") { // ?>
  Tesís
  <form action="<?php echo $editFormAction; ?>" id="tesis" name="tesis" method="POST">
    Tema:<br />
    <input name="tema" type="text" id="tema" value="<?php echo $row_selecter['tema']; ?>" size="40" />
    <br />
    Autor:<br />
    <input name="autor" type="text" id="autor" value="<?php echo $row_selecter['autor']; ?>" size="40" />
    <br />
    Titulo:<br />
    <input name="titulo" type="text" id="titulo" value="<?php echo $row_selecter['titulo']; ?>" size="40" />
    <br />
    Tesís:<br />
    <input name="tesis" type="text" id="tesis" value="<?php echo $row_selecter['tesis']; ?>" size="40" />
    <br />
    Editor:<br />
    <input name="editor2" type="text" id="editor2" value="<?php echo $row_selecter['editor']; ?>" size="40" />
    <br />
    Fecha:<br />
    <input name="fecha" type="text" id="fecha" value="<?php echo $row_selecter['fecha']; ?>" size="40" />
    <br />
    Lugar:<br />
    <input name="lugar" type="text" id="lugar" value="<?php echo $row_selecter['lugar']; ?>" size="40" />
    <br />
Tipo: <br />
<select name="tipo" id="tipo">
  <option value="textual">textual</option>
  <option value="s&iacute;ntesis">s&iacute;ntesis</option>
  <option value="resumen">resumen</option>
</select>
<br />
Contenido: <br />
<textarea name="contenido" cols="100" rows="5" id="contenido"><?php echo $row_selecter['contenido']; ?></textarea>
<br />
Pagina(s):<br />
<input name="pag" type="text" id="pag" value="<?php echo $row_selecter['pag']; ?>" size="10" />
<br />
Comentario:<br />
<textarea name="comentario" cols="100" rows="5" id="comentario"><?php echo $row_selecter['comentario']; ?></textarea>
<br />
Anotaciones:<br />
<textarea name="anotaciones" cols="100" rows="4" id="anotaciones"><?php echo $row_selecter['anotaciones']; ?></textarea>
<br />
Extra 1:<br />
<textarea name="extra1" cols="40" rows="3" id="extra1"><?php echo $row_selecter['extra1']; ?></textarea>
<br />
Extra 2:<br />
<textarea name="extra2" cols="40" rows="3" id="extra2"><?php echo $row_selecter['extra2']; ?></textarea>
<input name="id" type="hidden" id="id" value="<?php echo $row_selecter['id']; ?>" />
<input name="Enviar Tesís" type="submit" id="Enviar Tesís" value="Enviar Tesís" />
<br />
<input type="hidden" name="MM_update" value="tesis">
  </form>
  <?php } // ?>  
</body>
</html>
<?php
mysql_free_result($selecter);
?>