<?php
session_start();
$user = $_SESSION['usuario'];
header("location: inicio.php")

?>