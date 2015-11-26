<?php 
include("connection.php");

//Recibir el usuario que solicita
$username = $_REQUEST["username"];

//Ruta donde se encuentra el archivo
$final_path = "../img/users/".$username . "/";

unlink($final_path);
header("Lacation: ../profile.php");

?>