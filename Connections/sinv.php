<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sinv = "localhost";
$database_sinv = "sinv";
$username_sinv = "root";
$password_sinv = "password";
$sinv = mysql_pconnect($hostname_sinv, $username_sinv, $password_sinv) or trigger_error(mysql_error(),E_USER_ERROR); 
?>