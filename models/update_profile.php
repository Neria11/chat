<?php 
include("connection.php");

//Recibir variables por POST
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email  = $_POST["email"];
$slogan = $_POST["slogan"];
$username = $_POST["username"];

$data_sql = "UPDATE usuarios 
		SET nombre = '".$nombre."', apellido = '".$apellido."', email = '".$email."', slogan = '".$slogan."'";
mysql_query($data_sql);

echo "<div class='alert alert-success' role='alert'>
	  	<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
		¡Datos actualizados correctamente.!
	  </div>";
?>