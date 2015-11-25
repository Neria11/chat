<?php
session_start();
session_destroy();
unset($_SESSION["idUser"]);
unset($_SESSION["username"]);
header("Location:../../index.php");
?>