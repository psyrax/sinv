<?php 
$makerid=$row_userid['id'];
$currentPage = $_SERVER["PHP_SELF"];
$maxRows_ver = 20;
$pageNum_ver = 0;
if (isset($_GET['pageNum_ver'])) {
  $pageNum_ver = $_GET['pageNum_ver'];
}
$startRow_ver = $pageNum_ver * $maxRows_ver;

mysql_select_db($database_sinv, $sinv);
$query_ver = "SELECT * FROM fichero WHERE maker=$makerid ORDER BY id ASC";
$query_limit_ver = sprintf("%s LIMIT %d, %d", $query_ver, $startRow_ver, $maxRows_ver);
$ver = mysql_query($query_limit_ver, $sinv) or die(mysql_error());
$row_ver = mysql_fetch_assoc($ver);

if (isset($_GET['totalRows_ver'])) {
  $totalRows_ver = $_GET['totalRows_ver'];
} else {
  $all_ver = mysql_query($query_ver);
  $totalRows_ver = mysql_num_rows($all_ver);
}
$totalPages_ver = ceil($totalRows_ver/$maxRows_ver)-1;

$queryString_ver = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_ver") == false && 
        stristr($param, "totalRows_ver") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_ver = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_ver = sprintf("&totalRows_ver=%d%s", $totalRows_ver, $queryString_ver); ?>