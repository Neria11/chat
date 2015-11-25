<?php 
session_start();
// Archivo control_sesion.php
// se ejecuta cada vez que se haga un proceso o cambio de pagina
$segundos = time();
$tiempo_transcurrido = $segundos;
$tiempo_maximo = $_SESSION["inicio"]  + ( $_SESSION["intervalo"] * 60 ) ; // se multiplica por 60 segundos ya que se configura en minutos
if($tiempo_transcurrido > $tiempo_maximo){
header("Location: index.php");
session_destroy();
}else{
// se resetea el inicio
$_SESSION["inicio"] = time();
}

 ?>