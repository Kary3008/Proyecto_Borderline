<?php
// consulta para extraer los datos de la tabla alumno
$alumno = "SELECT * FROM alumnos ORDER BY Id_Alumno";
$resultado = $conecta->query($alumno);
// consulta para extraer los datos de la tabla grupo
$grupo = "SELECT * FROM grupo ORDER BY Id_Grupo";
$resultado1 = $conecta->query($grupo);
// consulta para extraer los datos de la tabla carera
$modulo = "SELECT * FROM modulos ORDER BY Id_Modulos";
$resultado8 = $conecta->query($modulo);
// consulta para extraer los datos de la tabla alumnos
$carrera = "SELECT * FROM carrera ORDER BY Id_Carrera";
$resultado3 = $conecta->query($carrera);
// consulta para extraer los datos de la tabla plantel
$doc = "SELECT * FROM docentes ORDER BY Id_Docente";
$resultado4 = $conecta->query($doc);
// consulta para extraer los datos de la tabla plantel
$semestre = "SELECT * FROM semestre ORDER BY Id_Semestre";
$resultado5 = $conecta->query($semestre);
 ?>
