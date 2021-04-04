<?php
//disimpan dengan nama koneksi.php
error_reporting(0);
$host="localhost";
$user_db="root";
$pass_db="";
$db="db_apotek";
$conn_db=mysql_connect($host,$user_db,$pass_db);
mysql_select_db($db);
?>
