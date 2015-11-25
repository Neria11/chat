<?php
include("models/connection.php");
session_start();
$message = "";
date_default_timezone_set('America/Mexico_City');
$lastLogin = date("F j, Y, g:i a");
$numLogin = "SELECT numLogin from usuarios";
$newLogin  = $numLogin + 1;


if(count($_POST) > 0) {

	$sql = "SELECT * FROM usuarios 
	WHERE username = '" . addslashes($_POST["username"]) . "' 
	and password = '". md5($_POST["password"])."'";

	$result = mysql_query($sql);
	$row  = mysql_fetch_array($result);

	if(is_array($row)) {
		$_SESSION["idUser"] = $row['idUser'];
		$_SESSION["username"] = $row['username'];
		session_name("logMax");
		$username = addslashes($_POST["username"]);
		mysql_query("UPDATE usuarios set lastLogin = '".$lastLogin."', numLogin = '".$newLogin."'
			         WHERE username ='".$username."'");
	} else {
		$message = "El usuario o clave es incorrecta.";
	}



	
}


$time = 3600; // una hora en mili-segundos

if(isset($_SESSION["idUser"])) {
	header("Location:dashboard.php");

	// verificamos si existe la sesión que se encarga del tiempo
      // si existe, y el tiempo es mayor que una hora, expiramos la sesión 
	if(isset($_SESSION["expire"]) && time() > $_SESSION["expire"] + $time){
		unset($_SESSION["expire"]);
		unset($_SESSION["session_name"]);
	} else {// si no existe la creamos
		$_SESSION["expire"] = time();
	}
}

?>