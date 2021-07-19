<?php
//llamar a la conexion a la BD
include 'conecta.php';
if(isset($_POST['entrar'])){
  $ruser = $conecta->real_escape_string($_POST['usuario']);
  $rpass = $conecta->real_escape_string(md5($_POST['password']));
  //generar una consulta que extraiga los datos de la BD
  $consulta = "SELECT * FROM alumnos WHERE Usuario = '$ruser' and Password = '$rpass'";
  if ($resultado = $conecta->query($consulta)){
    while ($row = $resultado->fetch_array()){
      $userok = $row['Usuario'];
      $passwordok = $row['Password'];
    }
    $resultado->close();
  }
  $conecta->close();
  if (isset($ruser) && isset($rpass)){
    if ($ruser == $userok && $rpass == $passwordok){
      $_SESSION['login'] = TRUE;
      $_SESSION['Usuario'] = $usuario;
      header("location:../principal.php");
    }
    else {
      $mensaje1="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                                   <strong>Usuario y/o Password no válidos.</strong> Si no te has registrado, registrate ahora.
                                   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                   </button>
                                 </div>";
    }
  }
  else {
    $mensaje2="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                                 <strong>No es un usuario</strong> Si no te has registrado, registrate ahora.
                                 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                 </button>
                               </div>";
  }
}
  //creamos una variable de sesion
  session_start();
  include 'conecta.php';
  $usuario = $_POST['usuario'];
  $password = md5($_POST['password']);
  //consulta para ingresar al sistema y determinar la variable de sesión.
  $q = "SELECT * FROM alumnos WHERE Usuario = '$usuario' and Password = '$password'";
  if ($resultado = $conecta->query($q)) {
    while ($row = $resultado->fetch_array()) {//revisar una linea
      $userok = $row['Usuario'];
      $passwordok = $row['Password'];
    }
    $resultado->close();
  }

  $conecta->close();
  if (isset($usuario) && isset($password)) {
    if ($usuario == $userok && $password == $passwordok) {
      $_SESSION['login']= TRUE;
      $_SESSION['Usuario'] = $usuario;
      header("location:../principal.php");
    }
    else {
      header("location:../session.php");
    }
  }
  else {
    header("location:../session.php");
  }
   //limpiar cualquier caracter especial real_escape_string
/*    $usuario = $conecta->real_escape_string($_POST['usuario']); //dos variables que guarde el usuario
    $password = $conecta->real_escape_string(md5($_POST['password']));
    //consulta para extraer la base de datos del alumno
    $consulta = "SELECT * FROM alumnos WHERE Usuario = '$usuario' and Password = '$password'";
    if ($resultado = $conecta->query($consulta)) {
      while ($row = $resultado->fetch_array()) {//revisar una linea
        $userok = $row['Usuario'];
        $passwordok = $row['Password'];
      }
      $resultado->close();
    }
    $conecta->close();
    if (isset($usuario) && isset($password)) {
      if ($usuario == $userok && $password == $passwordok) {
          $_SESSION['login']= TRUE;
          $_SESSION['Usuario']= $usuario;
          header("location:../principal.php");
      }
      else {
        header("location:../session.php");
      }
    }
    else {
      header("location:../session.php");
    }
*/
 ?>
