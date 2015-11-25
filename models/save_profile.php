<?php 
include("connection.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email  = $_POST["email"];
$slogan = $_POST["slogan"];
$avatar  = $_POST["avatar"];


$sql = "INSERT INTO usuarios (nombre, apellido, email, slogan, avatar) vaues ('".$nombre."', '".$apellido."', '".$email."', '".$slogan."', '".$avatar."')";

mysql_query($sql);

echo "Datos insertados";
?>