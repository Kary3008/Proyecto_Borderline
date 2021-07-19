<?php
session_start(); //iniciar sesion
session_unset(); //cerrar sesion
session_destroy(); //destruir sesion
header("location:../principal.php");//enviar a la parte de session.php
?>
