<?php
// consulta para extraer los datos de la tabla alumnos
$alum = "SELECT * FROM alumnos ORDER BY Id_Alumno";
$resultado1 = $conecta->query($alum);
// consulta para extraer los datos de la tabla carera
$carrera = "SELECT * FROM carrera ORDER BY Id_Carrera";
$resultado2 = $conecta->query($carrera);
// consulta para extraer los datos de la tabla genero
$genero = "SELECT * FROM genero ORDER BY Id_Genero";
$resultado3 = $conecta->query($genero);
// consulta para extraer los datos de la tabla grupo
$grupo = "SELECT * FROM grupos ORDER BY Id_Grupo";
$resultado4 = $conecta->query($grupo);
// consulta para extraer los datos de la tabla plantel
$plantel = "SELECT * FROM plantel ORDER BY Id_Plantel";
$resultado5 = $conecta->query($plantel);
// consulta para extraer los datos de la tabla tipo de usuario
$t_usuario = "SELECT * FROM tipousuario ORDER BY Id_Tusuario";
$resultado6 = $conecta->query($t_usuario);
 ?>
