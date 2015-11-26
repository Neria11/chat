<?php 
include("connection.php");

$query = "SELECT * from usuarios";

$result = mysql_query($query);

while ($row = mysql_fetch_array($result)) {
	$nombre = $row["nombre"];
	$apellido = $row["apellido"];
	$email = $row["email"];
	$slogan = $row["slogan"];
	$fotoUsuario = $row["avatar"];

	if($fotoUsuario == ""){
		$avatar = "img/noavatar.png";
	}else{
		$avatar = $row["avatar"];
	}
}
?>