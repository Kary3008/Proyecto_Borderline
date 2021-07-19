<?php
  error_reporting(0);
  include '../main/conecta.php';
  include '../main/configreg.php';
  // Inicia proceso de registro
  // validamos que se presione al boton registro
  if (isset($_POST['submit'])) {
  // variables de password para validarlos
  $pass = $conecta->real_escape_string($_POST['pass']);
  $cpass = $conecta->real_escape_string($_POST['cpass']);
  // verificamos si los password son diferentes
    if ($pass != $cpass) { //si son diferentes muestra un mensaje
      $mensaje.="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                    <strong>Password no Coinciden</strong> Por favor verifica tus password que sean iguales.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
    }
  // de lo contrario recuperamos los datos de el usuario a través de las cajas de texto por el metodo post
    else {
  // recuperamos los valores que nos da el usuario
  $nombre = $conecta->real_escape_string($_POST['nombre']);
  $email = $conecta->real_escape_string($_POST['email']);
  $apellidop = $conecta->real_escape_string($_POST['apellidop']);
  $apellidom = $conecta->real_escape_string($_POST['apellidom']);
  $usern = $conecta->real_escape_string($_POST['usuario']);
  $f_nac = $conecta->real_escape_string($_POST['fecha']);
  $gen = $conecta->real_escape_string($_POST['genero']);
  $grupo = $conecta->real_escape_string($_POST['grupo']);
  $carrera = $conecta->real_escape_string($_POST['carrera']);
  $plantel = $conecta->real_escape_string($_POST['plantel']);
  $passw = md5($pass);
  $estado = "Activo";
  // consulta para verificar si exite un email igual dentro de la base de datos
  $nuevo = "SELECT * FROM usuarios WHERE Correo_U = '$email' or Usuario = '$usern'";
  $new = $conecta->query($nuevo);
  // validacion de el criterio de aceptacion
  if($new->num_rows > 0){
    $mensaje.="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                  <strong>El usuario y/o Email ya existe</strong> El registro ya existe en la base de datos por favor <a href='index.php'>Click para iniciar sesion</a> .
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                     <span aria-hidden='true'>&times;</span>
                  </button>
                </div>";
  } else {
  // consulta para insertar registro en la base de datos

  $reg = "INSERT INTO alumnos(Nombre_A, ApellidoP_A, ApellidoM_A, Fecha_Nac, Id_Genero, Id_Usuario, Id_Grupo, Id_Carrera,Id_Plantel)
  VALUES('$nombre', '$apellidop', '$apellidom', '$f_nac', '$gen', NULL, '$grupo', '$carrera', '$plantel')";
  $registro2 = $conecta->query($reg);
  $reg = "INSERT INTO alumnos(Nombre_A, ApellidoP_A, ApellidoM_A, Fecha_Nac, Id_Genero, Id_Usuario, Id_Grupo, Id_Carrera, Id_Plantel)
  VALUES('$nombre','$apellidop','$apellidom','$f_nac','$gen','NULL', '$grupo','$carrera','$plantel')";
  $registro = $conecta->query($reg);
  $reg1 = "INSERT INTO usuarios(Usuario, Correo_U, Password, Estado)
  VALUES('$usern','$email','$passw','$estado')";
  $registro1 = $conecta->query($reg1);


  //consulta
  $inner = "SELECT a.Id_Alumno, a.Nombre_A, a.ApellidoP_A, a.ApellidoM_A, a.Fecha_Nac, a.Id_Genero, a.Id_Grupo, a.Id_Usuario, a.Id_Carrera, a.Id_Plantel,
  g.Id_Genero, g.Nombre_G, gr.Id_Grupo, gr.Grupo,
  u.Id_Usuario, u.Usuario, u.Correo_U, u.Password, u.F_Nacimiento, u.Estado,
  c.Id_Carrera, c.Nombre_Carrera, c.Codigo_C,
  p.Id_Plantel, p.Nombre_Plantel, p.Codigo_Plantel, p.Direccion FROM alumnos as a INNER JOIN genero as g ON a.Id_Genero = g.Id_Genero
 INNER JOIN usuarios as u ON a.Id_Usuario = u.Id_Usuario INNER JOIN carrera as c ON a.Id_Carrera = c.Id_Carrera INNER JOIN plantel as p ON a.Id_Plantel = p.Id_Plantel WHERE Usuario = '".$usuario."'";
 $join = $conecta->query($inner);
 $imprimir = $join->fetch_assoc();

     //FIN DE CONSULTA
   // consulta para insertar registro en la base de datos
   $imprimir = "INSERT INTO alumnos(Nombre, ApellidoP_A, ApellidoM_A, Fecha_Nac, Id_Genero, Id_Grupo, Id_Carrera, Id_Plantel)
   VALUES('$nombre','$apellidop','$apellidom','$f_nac','$gen','$carrera','$plantel')";
   $registro = $conecta->query($imprimir);
 //  $reg1 = "INSERT INTO usuarios(Usuario, Correo_U, Password, Estado)
   //VALUES('$usern','$email','$passw','$estado')";
   //$registro1 = $conecta->query($reg1);
   // verificamos que el registro sea valido para mandar una alerta

  // verificamos que el registro sea valido para mandar una alerta
   if ($registro2 > 0) {
     $mensaje.="<div class='alert alert-success fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                   <strong>Registro Exitoso</strong> Ya puedes Iniciar sesión <a href='../LOGIN/Login.php' class='text-muted text-decoration-none'>Click para iniciar sesion</a> .
                   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                   </button>
                 </div>";
              }
          }
      }
  }
  $conecta->close();
 ?>
