<?php
  session_start();
  error_reporting(0);
  include 'conecta.php';
  if(isset($_POST['inicio'])){
    $usuario = $conecta->real_escape_string($_POST['usuario']);
    $password = $conecta->real_escape_string(md5($_POST['password']));
    // consulta
    $consulta = "SELECT * FROM alumnos WHERE Usuario = '$usuario' and Password = '$password' and Online = '1'";
    if($resultado = $conecta->query($consulta)){
      while($row = $resultado->fetch_array()){
         $userok = $row['Usuario'];
         $passwordok = $row['Password'];
         $id = $row['Id_Alumno'];
      }
         $resultado->close();
    }
    $conecta->close();
    if(isset($usuario) && isset($password)){
       if($usuario == $userok && $password == $passwordok){
         $_SESSION['login']= TRUE;
         $_SESSION['Usuario'] = $usuario;
         header("location:../principal.php");
       }
       else {
         // si no son correctos los datos
         // asignamos un valor mas al contador de la sesion
         $_SESSION['contador'] = $_SESSION['contador'] + 1;
         // comprobar los 3 intentos
         if ($_SESSION['contador'] > 2) {
           $on = "UPDATE alumnos SET Online = '0' WHERE Id_Alumno = $id";
           $line = $conecta->query($on);
           $mensaje1="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                         <strong>Usuario Invalidado</strong> Por favor comunicate con el área de soporte.
                         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                         </button>
                       </div>";
         }
         // si son menos de 3 intentos
         else{
         $mensaje="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                       <strong>Usuario no válido</strong> El usuario no se encuentra registrado en el sistema consulta a soporte.
                       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                       </button>
                     </div>";
                   }
     }
       } else {
         $mensaje="<div class='alert alert-warning alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                       <strong>Usuario no válido</strong> El usuario no se encuentra registrado en el sistema consulta a soporte.
                       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                       </button>
                     </div>";
   }
   }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Registro | Administrativo </title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fontello.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <style type="text/css">
    </style>
</head>
<body>
  <div align="center" class="containers" style="margin-top: 2em; width: 45%; margin-left: auto; margin-right:auto;">
      <div class="container py-3" style="border: 2px solid rgb(132, 196, 214); color: #000; border-radius: 5%; height:auto;">
          <a href="#"><img src="../img/img1.png" alt="LogoE" style="width: 90px; height: 70px;"></a>
          <h3 class="text-center py-2">Iniciar Sesión En Tu Cuenta <br>Administrativo</h3>
          <div class="card">
              <div style="background:#eee; width:100%; height: 200%;">
                <div class="container" style="width:90%;"><br>
                  <div class="alert alert-primary py-3" role="alert">
                    Le damos la bienvenida, por favor ingrese su cuenta y contraseña.
                  </div>
                  <div class="py-1">
                    <!-- mensajes -->
                    <?php echo $mensaje1; ?>
                    <?php echo $mensaje; ?>
                  </div>
                </div>
                  <div class="container">
                    <form class="form-group" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> <!--falta introducir el metodo-->
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required style="width:90%; margin-bottom:1em;">
                        <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required style="width:90%;">
                        <br>
                        <div>
                            <div class="custom-control custom-switch" align="left" style="width:90%;">
                                <input type="checkbox" class="custom-control-input" id="ver" onclick="verpass(this);">
                                <label  class="custom-control-label " for="ver">Ver Password</label>
                            </div>
                        </div>
                        <input type="submit" name="inicio" value="Iniciar sesión" class="btn btn-sm font-weight-bold rounded" style="background: rgb(187, 219, 206); margin-top: 25px; width: 50%; margin-left: auto; margin-right: auto;"> <br>
                        <div class="boton py-2">
                        <a href="#"> <h6 align="center" style="color: rgb(84, 75, 70); margin-bottom:1em;">¿Olvidaste tu contraseña? </h6></a>
                        </div>
                        <div class="contenedor">
                        <a href="../../registro/registro.php"><button style="background: rgb(187, 219, 206); width:10em; height: 2em; margin-top: 0em; margin-left: auto; margin-right: auto;  border-radius:30px;" type="button" class="btn btn-sm font-weight-bold rounded">Regístrarme</button></a>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <script type="text/javascript">
function verpass(cb){
  if (cb.checked)
    $('#pass').attr("type","text");
    else
    $('#pass').attr("type","password");
}
</script>
  <script src="js/bootstrap.js"></script>
</body>
</html>
