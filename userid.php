<?php
$colname_userid = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_userid = (get_magic_quotes_gpc()) ? $_SESSION['MM_Username'] : addslashes($_SESSION['MM_Username']);
}
mysql_select_db($database_sinv, $sinv);
$query_userid = sprintf("SELECT * FROM users WHERE username = '%s'", $colname_userid);
$userid = mysql_query($query_userid, $sinv) or die(mysql_error());
$row_userid = mysql_fetch_assoc($userid);
$totalRows_userid = mysql_num_rows($userid);
?>
