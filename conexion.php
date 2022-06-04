<?php
$server="localhost";
$username="root";
$password="";
$db="ayuntamiento";
$mysql =  new mysqli($server,$username,$password,$db);
if ($mysql->connect_error)
die("Problemas con la conexion de base de datos");



?>