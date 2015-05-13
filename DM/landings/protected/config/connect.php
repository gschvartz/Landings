<?php 
$myServer = "landings.demotores360.com";
$myUser = "admindm360";
$myPass = "dm_360";
$myDB = "landings";  

//connection to the database

$enlace =  mysql_connect($myServer, $myUser, $myPass);
mysql_select_db($myDB);
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
?>