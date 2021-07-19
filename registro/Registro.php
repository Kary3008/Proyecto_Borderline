<?php
  error_reporting(0);
  include '../pincipal/main/conecta.php';
  include '../pincipal/main/configreg.php';
  // Inicia proceso de registro
  // validamos que se presione al boton registro
  if (isset($_POST['submit'])) {
  // variables de password para validarlos
  $pass = $conecta->real_escape_string($_POST['pass']);
  $cpass = $conecta->real_escape_string($_POST['cpass']);
  // verificamos si los password son diferentes
    if ($pass != $cpass) {//muestra un mensaje
      $mensaje.="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                    <strong>Password no Coinciden</strong> Por favor verifica tus password que sean iguales.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
    }
  // de lo contrario recuperamos los datos de el usuario a travez de las cajas de texto por el metodo post
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
  $t_usuario = $conecta->real_escape_string($_POST['Id_Tusuario']);
  $passw = md5($pass);
  // consulta para verificar si exite un email igual dentro de la base de datos
  $nuevo = "SELECT * FROM alumnos WHERE Correo_U = '$email' or Usuario = '$usern'";
  $new = $conecta->query($nuevo);
  // validacion de el criterio de aceptacion
  if($new->num_rows > 0){
    $mensaje.="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                  <strong>El usuario y/o Email ya existe</strong> El registro ya existe en la base de datos por favor <a href='../inicio/session.php'>Click para iniciar sesion</a> .
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                     <span aria-hidden='true'>&times;</span>
                  </button>
                </div>";
  }
  else {
    $reg = "INSERT INTO alumnos(Nombre_A, ApellidoP_A, ApellidoM_A, Fecha_Nac, Usuario, Correo_U, Password, Id_Tusuario, Id_Genero, Id_Grupo, Id_Carrera, Id_Plantel)
    VALUES('$nombre','$apellidop','$apellidom','$f_nac', '$usern', '$email', '$passw','$t_usuario','$gen', '$grupo','$carrera','$plantel')";
    $registro = $conecta->query($reg);

  // verificamos que el registro sea valido para mandar una alerta
   if ($registro > 0) {
     $mensaje.="<div class='alert alert-success alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                   <strong>Registro Exitoso</strong> Ya puedes iniciar sesión <a href='../inicio/session.php' class='text-muted text-decoration-none'>Click para iniciar sesion</a> .
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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- meta tipos de caracteres especiales en la web -->
    <meta charset="utf-8">
    <!-- optimizar el sitio para moviles -->
    <meta name="MobileOptimizer" content="width"/>
    <!-- optimizacion para cualquier dispositivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- descripción del sitio web -->
    <meta name="description" content="Sistema online para ayuda y guía de estudiantes y futuros estudiantes, gestión del plantel a través de módulos como son:
    registro de alumnos, reporte de alumnos, Perfil educativo, Recorrido Virtual de las áreas que conforman al plantel, Desarrollo de Juego Interactivos para el aprendizaje de las distintas carreras que ofrece la institución">
    <!-- palabras claves para el seo -->
    <meta name="keywords" content="Sistema Online, Registro de Alumno, Perfil de Usuario, Reportes de Asistencia, Recorrido Virtual, Juegos Interactivos, Guía de estudiantes, Conalep Naucalpan 1, Gestión de planteles, Carreras Técnicas">
   <!-- meta para el autor del sitio  -->
    <meta name="autor" content="Borderline">
    <!-- el de la marca --->
    <meta name="copyright" content="Borderline & Conactive">
    <meta name="robots" content="index/">
    <!-- estilos css -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <!-- script de jquery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Registro de CoNactive | BorderLine</title>
  </head>
  <body>
    <!-- inicio de contenedor -->
    <div class="container py-4">
        <div class="row justify-content-center h-100 py-4">
          <div class="card col-sm-8 col-md-8 col-lg-8 shadow-lg p-3 mb-5 bg-black rounded">
               <article class="card-body">
                    <div class="row">
                        <div class="col">
                            <a  href="../inicio/session.php">
                              <span class="icon-left-big"></span>Iniciar Sesión</a>
                        </div>
                        <div class="col">
                          <img src="img/logo.jpg" alt="logotipo Conactive" class="logo">
                        </div>
                        <div class="container text-center">
                          <h3>Registro Conactive</h3>
                        </div>
                    </div>
                   <hr>
                   <p class="text-primary text-center">Ingresa los Datos que se te solicitan</p>
                      <!-- formulario de registro -->
                      <form name="Fregistro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="registro" enctype="multipart/form-data">
                        <div class="row py-2">
                           <div class="col">
                              <input type="text" name="nombre" class="caja" placeholder="Nombre(s)" required>
                           </div>
                           <div class="col">
                              <input type="text" name="email" class="caja" placeholder="Email" required>
                           </div>
                         </div>
                         <div class="row py-2">
                            <div class="col">
                               <input type="text" name="apellidop" class="caja" placeholder="Apellido Paterno" required>
                            </div>
                            <div class="col">
                                 <input type="password" name="pass" class="caja" placeholder="Contraseña" required>
                            </div>
                          </div>
                         <div class="row py-2">
                            <div class="col">
                               <input type="text" name="apellidom" class="caja" placeholder="Apellido Materno" required>
                            </div>
                            <div class="col">
                                <input type="password" name="cpass" class="caja"  placeholder="Confirmar Contraseña" required>
                            </div>
                          </div>
                          <div class="row py-2">
                            <div class="col">
                              <input type="text" name="usuario" class="caja"  placeholder="Usuario" required>
                            </div>
                            <div class="col">
                            <select class="caja" name="Id_Tusuario" id="tipo" required>
                                 <option selected>Selecciona el tipo de usuario</option>
                                 <?php while($row1 = $resultado6->fetch_assoc()) {  ?>
                                  <option value="<?php echo $row1['Id_Tusuario']; ?>"><?php echo $row1['Tipo']; ?></option>
                                 <?php } ?>
                              </select>
                            </div>
                          </div>
                            <div class="row py-2">
                            <div class="col">
                                 <input type="date" name="fecha" class="caja"  placeholder="Fecha De Nacimiento" required>
                            </div>
                            <div class="col">
                            <select class="caja" name="genero" id="genero" required>
                                 <option selected>Selecciona el género</option>
                                 <?php while($row2 = $resultado3->fetch_assoc()) {  ?>
                                  <option value="<?php echo $row2['Id_Genero']; ?>"><?php echo $row2['Nombre_G']; ?></option>
                                 <?php } ?>
                              </select>
                            </div>
                           </div>
                         <div class="row py-2">
                           <div class="col">
                           <select class="caja" name="grupo" id="grupo" required>
                                <option selected>Selecciona el grupo</option>
                                <?php while($row3 = $resultado4->fetch_assoc()) {  ?>
                                 <option value="<?php echo $row3['Id_Grupo']; ?>"><?php echo $row3['Grupo']; ?></option>
                                <?php } ?>
                             </select>
                           </div>
                              <div class="col">
                                <select class="caja" name="carrera" id="carrera" required>
                                   <option selected>Selecciona la carrera</option>
                                   <?php while($row4 = $resultado2->fetch_assoc()) {  ?>
                                    <option value="<?php echo $row4['Id_Carrera']; ?>"><?php echo $row4['Nombre_Carrera']; ?></option>
                                   <?php } ?>
                                </select>
                              </div>
                           </div>
                           <div class="row py-2">
                               <div class="col">
                                 <select class="caja" name="plantel" id="plantel" required>
                                    <option selected>Selecciona el plantel</option>
                                    <?php while($row5 = $resultado5->fetch_assoc()) {  ?>
                                     <option value="<?php echo $row5['Id_Plantel']; ?>"><?php echo $row5['Nombre_Plantel']; ?></option>
                                    <?php } ?>
                                 </select>
                               </div>
                           </div>
                           <a href="../login/politicas(demo).php " class="text-muted text-decoration-none">Leer políticas de privacidad</label></a>
                           <div class="row py-1">
                              <div class="col">
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" id="checkbox" onclick="habilitar();">
                                    <label for="checkbox" class="custom-control-label"><a href="../login/politicas(demo).php " class="text-muted text-decoration-none" data-toggle="modal" data-target="#staticBackdrop">Acepto Terminos y Condiciones</label></a>
                                 </div>
                              </div>
                           </div>
                           <div class="row py-1">
                               <input type="submit" name="submit" value="Registrar" class="btn btn-sm btn-block btn-primary" disabled>
                           </div>
                      </form>
                      <!-- termina registro -->
                   </article>
                   <?php echo $mensaje; ?>
            </div>
        </div>

  </div>
  <!-- termina el contenedor -->
  <!-- script de bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- script para habilitar boton registro -->
  <script type="text/javascript">
    function habilitar(){
      document.Fregistro.submit.disabled = !document.Fregistro.checkbox.checked;
    }
  </script>
  </body>
</html>
