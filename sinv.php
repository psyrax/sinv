<?php $vista=$_GET['vista'];
require_once('Connections/sinv.php'); ?>
<?php include('restrict.php'); ?>
<?php include('userid.php'); ?>
<?php if ($vista=="fichas") { ?>
<?php include('ver.php'); ?>
<?php } // ?>
<?php if ($vista=="entrevistas") { // ?>
<?php include('entrevistasquery.php'); ?>
<?php } // ?>
<?php include('globales.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>:: Sistemas de Investigaci&oacute;n :: SIN ::</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('userbar.php'); ?>
  <div class="wrap">
  <div align="right">
<?php include('recordnav.php'); ?></div>
    <div class="navi">
  Navegación
  <hr />
  <a href="sinv.php?vista=fichas">Ver Fichas Bibliograficas o de trabajo</a><br />
  <?php if ($vista=="fichas") { //  ?>
<?php include('navifichas.php'); ?>
  <?php } //?>
  <hr />
  <a href="sinv.php?vista=entrevistas">Ver Entrevistas</a><br />  </div>
  <?php if ($vista=="entrevistas") { //  ?>
  <?php do { ?> 
<a href="sinv.php?vista=entrevistas&tema=<?php echo $row_temas['tema']; ?>"><?php echo $row_temas['tema']; ?></a> |<br /> 
  <?php } while ($row_temas = mysql_fetch_assoc($temas)); ?>
<?php } // ?>
  <!---------------- inicia fichas -------------------->
  <?php if ($vista=="fichas") { //  ?>
  <?php do { ?> 
 <?php include('dofichas.php'); ?>
  <?php } while ($row_ver = mysql_fetch_assoc($ver)); ?>
 <?php } // ?>
 <!---------------- inicia entrevistas -------------------->
  <?php
  $tema=$_GET['tema'];
  if ($tema!="") { //  ?>
  <div class="box"><?php echo $tema; ?><br /><br />
  <?php do { ?> 
<b><?php echo $row_pyr['pregunta'];?></b><br /><br />
<?php echo $row_pyr['respuesta'];?><br/>
<a href="entrevistas.php?pyreditar=<?php echo $row_pyr['id']; ?>">Editar</a><hr />
  <?php } while ($row_pyr = mysql_fetch_assoc($pyr)); ?>
<a href="entrevistas.php?tema=<?php echo $tema;?>">Nueva pregunta</a></div>
<?php } // ?>
</div><br />
</div></body>
</html>