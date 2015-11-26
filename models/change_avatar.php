<?php 
include("connection.php");

//Recibir variables por POST
$username = $_POST["username"];

// Recibo los datos de la imagen
$nombre_avatar = $_FILES["avatar"]["name"];;
$tipo_avatar = $_FILES["avatar"]["type"];
$tamano_avatar = $_FILES["avatar"]["size"];

$info_avatar = pathinfo($_FILES["avatar"]["name"]);
$nombre_imagen_final = $username.".".$info_avatar["extension"];

//Formatos de imagen permitidos
$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
$limite_kb = 2000; 
$wasMoved  = false;

//Ruta donde se introducira el archivo
$directorio = "../img/users/".$username;
$final_path = "../img/users/".$username."/".$nombre_imagen_final;
$url_save = "img/users/".$username."/".$nombre_imagen_final;


if ($_FILES["avatar"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
//Verifico el tipo/formato de imagen correcto
	if(in_array($tipo_avatar, $permitidos)){

//Verifico que el tamaño no supere los límites
		if($tamano_avatar <= $limite_kb * 1024){

		//Verifico si existe el directorio
			if (!file_exists($directorio)){
			//Sino creo la ruta a donde debe introducirse
				mkdir($directorio, 0777, true);
			}

		//Si ya existe el archivo lo elimino
			unlink($final_path);

		//Muevo el archivo
			@move_uploaded_file($_FILES["avatar"]["tmp_name"], $final_path);
			$wasMoved = true;

			if ($wasMoved){
				$sql = "UPDATE usuarios SET	avatar = '".$url_save."'";
				mysql_query($sql);
				echo "Todo fué exitoso. Tamaño: ". $tamano_avatar . " tipo_avatar: ". $tipo_avatar . " Directorio: " .$final_path ;
				header("Location: ../profile.php");
			}else{
				echo "Ocurrió un  errror:";
			}		
			
		}else{
			echo "El tamaño no está permitido";
		}
	}else{
		echo "El tipo no está permitido";
	}

}

?>