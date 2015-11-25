<?php 
include("connection.php");

$apellido = $_POST["apellido"];
$email  = $_POST["email"];
$slogan = $_POST["slogan"];
$username = $_POST["username"];

$mypath = "../img/users/".$username;

mkdir($mypath);

//comprobamos si ha ocurrido un error.
if(count($_POST) > 0) {
	$error_avatar = $_FILES["avatar"]["error"];
	if ($error_avatar > 0){
		echo "ha ocurrido un error";
	} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
		$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
		$limite_kb = 2000;

		if (in_array($_FILES["avatar"]["type"], $permitidos) && $_FILES["avatar"]["size"] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
			mkdir($mypath, 0755, true);


			$ruta = "../img/users/".$username;
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
			if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
				$resultado = move_uploaded_file($_FILES["avatar"]["tmp_name"], $ruta);
				if ($resultado){
					$avatar = $_FILES["avatar"]["name"];

					$sql = "UPDATE usuarios 
					set nombre = '".$avatar."', apellido = '".$apellido."', 	email = '".$email."', slogan = '".$slogan."',
					avatar = '".$ruta."'";


					mysql_query($sql);

					echo "el archivo ha sido movido exitosamente";
				} else {
					echo "ocurrio un error al mover el archivo.";
				}
			} else {
				echo $_FILES["avatar"]["name"] . ", este archivo existe";
			}
		} else {
			echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		}
	}
}



?>