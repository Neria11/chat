<?php 
include("connection.php");

$apellido = $_POST["apellido"];
$email  = $_POST["email"];
$slogan = $_POST["slogan"];
$avatar  = $_POST["avatar"];


$sql = "UPDATE usuarios 
		set 
		nombre = '".$_POST["nombre"]."',
		apellido = '".$apellido."', 
		email = '".$email."',
		slogan = '".$slogan."',
		avatar = '".$avatar."'";

mysql_query($sql);

echo "Datos insertados";
?>