<?php
$host  = "localhost";
$user  = "root";
$pass  = "";
$database = "allsmileenglishclassdb";

$connection = mysql_connect($host,$user,$pass) or die("Nope, Can't connect");
mysql_select_db($database);

?>