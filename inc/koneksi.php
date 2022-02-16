<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_sppd";
$koneksi = mysql_connect($host,$username,$password);
$pilihdatabase = mysql_select_db($database);
if ($pilihdatabase) echo "";
else echo "";
?>