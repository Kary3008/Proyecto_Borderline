<<?php
$servidor="localhost";
$usuario="root";
$password="";
$base ="registro1";
$conecta= mysqli_connect($servidor,$usuario,$password,$base);// mysqliconectar con el servidor, usuario, password y base
if ($conecta->connect_error) {
  //si cualquiera de las variables esta mal aparece el siguiente mensaje
  die('Error al conectar la Base de datos'.$conecta->connect_error);
}
 ?>
