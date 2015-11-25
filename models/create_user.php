<?php 
header( 'Content-type: text/html; charset=utf-8' );
include("connection.php");
$message = "";

/*Recibo parámetros por POST y convierto password en md5*/
$username = $_POST["username"];
$password = addcslashes(md5($_POST["password"])) ;
$status = 1;
date_default_timezone_set('America/Mexico_City');
$dateRegistered = date("F j, Y, g:i a");

/*Verifico que no exista el usuario*/
$verificar = "SELECT * FROM usuarios where username = '".$username."'";
$existe = mysql_query($verificar);

/*Si los resultados son mayores o igual a 1 que envie un msg indicando elegir otro username*/
if(mysql_num_rows($existe) > 0){
	echo "Éste usuario ya existe. Intenta uno nuevo";
}else{
	/*Sino existe ese usuario, se inserta*/
	$sql = "INSERT INTO usuarios (username, password, dateRegistered) values ('".$username."','".$password."','".$dateRegistered."','".$status."')";
	mysql_query($sql);
	$message = "<div class='alert alert-success' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					Usuario registrado. Inicia sesión
				</div>";
	header("Location: ../registry.php"); 
}


?>