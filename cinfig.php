<?php
$host = "localhost”;
$username = "root”;
$password = "";
$databasename ="berita”;
$connection = mysql_connect($host, $username, $password);
mysql_select_db($databasename, $connection) ;
?>