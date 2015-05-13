<?php 
$myServer = "landings.zonaprop360.com";
$myUser = "adminzp360";
$myPass = "zp_360";
$myDB = "landingszp";  

//connection to the database

$enlace =  mysql_connect($myServer, $myUser, $myPass);
mysql_select_db($myDB);
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
?>