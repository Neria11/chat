<?php
include("models/connection.php");

//Variable que retorna un mensaje
$message = "";

//Verificamos que exista al menos una petición de POST
if(count($_POST) > 0) {
	//Obtenemos el username por método POST
	$username = addslashes($_POST["username"]);

	//Verificamos si el usuario que llega por POST existe en la BD
	$usuario_existe = "SELECT * FROM usuarios where username = '" . $username . "'";
	$existe = mysql_query($usuario_existe);
	$row_count_user = mysql_num_rows($existe);

	//Si existe procedemos, sino enviamos mensaje
	if($row_count_user > 0){
		//Verificamos que su status sea 1 sino enviamos mensaje
		$verifica_status = "SELECT status FROM usuarios where username = '" . $username . "'";
		$status_actual = mysql_query($verifica_status);

		while ($isActive = mysql_fetch_array($status_actual)) {
			$final_status = $isActive["status"];
		}

		if($final_status == 1){
			//Verificamos si la contraseña es la que le corresponde al usuario
			$user_password = "SELECT * FROM usuarios where username = '" . $username . "'";
			$is_password = mysql_query($user_password);
			
			while ($row = mysql_fetch_array($is_password)) {
				//COmparamos la del uusario con la que nos envía el usaurio en el momento
				if($row["password"] == md5($_POST["password"]) ){
					
					//SI es la contraseña, creamos la sesioón
					//Asignamos variables a la sesión
					session_start();
					$_SESSION["idUser"] = $row["idUser"];
					$_SESSION["username"] = $row["username"];
					session_name("logMax");

					// Creamos un tiempo definido para la sesion y posteriormente la iniciamos
					$_SESSION["intervalo"]  = 30; // en minutos
					$_SESSION["inicio"] = time();
					
					
					//Establece la zona horaria para guardar el último logueo
					date_default_timezone_set('America/Mexico_City');
					$lastLogin = date("F j, Y, g:i a");

					//COntamoss cuantos logueos ha hecho en total y le incrementamos uno
					$numLogin = "SELECT numLogin from usuarios";
					$newLogin  = $numLogin + 1;

					//Actualizamos las variables del ultimo logueo, incrementamos un login mas
					mysql_query("UPDATE usuarios 
							     SET lastLogin = '".$lastLogin."', 
								 numLogin = '".$newLogin."'
								 WHERE username ='".$username."'");

					//Verificamos si la sesion existe y redireccionamos a pagina principal
					if(isset($_SESSION["intervalo"])) {
						header("Location:dashboard.php");
					}else{
					//SIno existe ninguna session lo rebotamos a index.php
						header("Location:index.php");
					}
					
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

?>