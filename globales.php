<?php if ($editar==""){//?>
<?php mysql_select_db($database_sinv, $sinv);
$query_global = "SELECT * FROM fichero";
$global = mysql_query($query_global, $sinv) or die(mysql_error());
$row_global = mysql_fetch_assoc($global);
$totalRows_global = mysql_num_rows($global);
?><?php } //?>
<?php if ($editar!=""){//?>
<?php mysql_select_db($database_sinv, $sinv);
$query_global = "SELECT * FROM fichero where id='$editar'";
$global = mysql_query($query_global, $sinv) or die(mysql_error());
$row_global = mysql_fetch_assoc($global);
$totalRows_global = mysql_num_rows($global);
?><?php } //?>