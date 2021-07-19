<?php
$conexion = mysqli_connect('localhost', 'root', '', 'registro1');
if (!$conexion){
	die("conexion fallida". mysqli_connect_error());
	exit();
}

?>
