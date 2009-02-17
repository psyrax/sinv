<?php 
mysql_select_db($database_sinv, $sinv);
$query_temas = "SELECT * FROM entrevistas";
$temas = mysql_query($query_temas, $sinv) or die(mysql_error());
$row_temas = mysql_fetch_assoc($temas);
$totalRows_temas = mysql_num_rows($temas);

$colname_temaid = "-1";
if (isset($_GET['tema'])) {
  $colname_temaid = (get_magic_quotes_gpc()) ? $_GET['tema'] : addslashes($_GET['tema']);
}
mysql_select_db($database_sinv, $sinv);
$query_temaid = sprintf("SELECT id FROM entrevistas WHERE tema = '%s'", $colname_temaid);
$temaid = mysql_query($query_temaid, $sinv) or die(mysql_error());
$row_temaid = mysql_fetch_assoc($temaid);
$totalRows_temaid = mysql_num_rows($temaid);

$temaid=$row_temaid['id'];

mysql_select_db($database_sinv, $sinv);
$query_pyr = sprintf("SELECT * FROM pyr WHERE tema = '$temaid' ORDER BY id ASC", $colname_pyr);
$pyr = mysql_query($query_pyr, $sinv) or die(mysql_error());
$row_pyr = mysql_fetch_assoc($pyr);
$totalRows_pyr = mysql_num_rows($pyr);?>