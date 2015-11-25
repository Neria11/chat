<?php
include("models/connection.php");
session_start();
$message = "";



if(count($_POST) > 0) {

	$usuario_existe = "SELECT * FROM usuarios where username = '" . addslashes($_POST["username"]) . "'";
	$existe = mysql_query($usuario_existe);
	$row_count_user = mysql_num_rows($existe);

	if($row_count_user > 0){
		$verifica_status = "SELECT status FROM usuarios where username = '" . addslashes($_POST["username"]) . "'";
		$status_actual = mysql_query($verifica_status);

		while ($isActive = mysql_fetch_array($status_actual)) {
			$final_status = $isActive["status"];
		}

		if($final_status == 1){
			$user_password = "SELECT * FROM usuarios where username = '" . addslashes($_POST["username"]) . "'";
			$is_password = mysql_query($user_password);
			
			while ($row = mysql_fetch_array($is_password)) {
				if($row["password"] == md5($_POST["password"]) ){
					$_SESSION["idUser"] = $row["idUser"];
					$_SESSION["username"] = $row["username"];
					session_name("logMax");
					$username = addslashes($_POST["username"]);

					date_default_timezone_set('America/Mexico_City');
					$lastLogin = date("F j, Y, g:i a");
					$numLogin = "SELECT numLogin from usuarios";
					$newLogin  = $numLogin + 1;
					mysql_query("UPDATE usuarios set lastLogin = '".$lastLogin."', numLogin = '".$newLogin."'
						WHERE username ='".$username."'");
				}else{
					$message = "<div class='alert alert-warning' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					La contraseña es incorrecta
					</div>";
				}
			}

		}else{
			$message = "<div class='alert alert-warning' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			Tu usuario no está activo.
			</div>";
		}
	}else{
		$message = "<div class='alert alert-warning' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
		El usuario no existe.
		</div>";
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