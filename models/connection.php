<?php 
	$server = "localhost";
	$username = "root";
	$password = "";
	$dataBase = "moonchaton";

	$link = mysql_connect($server, $username, $password)
	or die("Problemas en la conexión: ".mysql_error());

	mysql_set_charset('utf8',$link);

	$db = mysql_select_db($dataBase, $link)
	or die("Problemas al seleccionar la base de datos: ".mysql_error()); 
?>
