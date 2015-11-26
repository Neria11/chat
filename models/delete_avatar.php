<?php 
include("connection.php");

//Recibir el usuario que solicita
$username = $_REQUEST["username"];

//Ruta donde se encuentra el archivo
$final_path = "../img/users/".$username;
unlink($final_path);
mysql_query("DELETE avatar from usuarios where username = '".$username."'");

header("Location: ../profile.php");
?>