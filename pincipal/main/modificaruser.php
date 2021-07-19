<?php
include 'conecta.php';
session_start();
// validando usuario
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
   header("location:../session.php");
}

//consulta para extraer los datos de perfil
$q= "SELECT * FROM alumnos WHERE Usuario = '".$usuario."'";
$consulta = $conecta->query($q);
$perfil = $consulta->fetch_array();
if ($perfil > 0) {
  $user = $perfil;
}

//extraer los datos de perfil a modificar
$id = $_GET['Id_Alumno'];
$m = "SELECT * FROM alumnos WHERE Id_Alumno = '$id'";
$modificar = $conecta->query($m);
$row = $modificar->fetch_array(MYSQLI_ASSOC);

//consulta para extraer datos de Perfil
$q = "SELECT * FROM alumnos WHERE Usuario ='".$usuario."'";
$cons = $conecta->query($q);
$perfil = $cons->fetch_array();
if ($perfil > 0){
  $usu1 = $perfil;
}
//consulta para modificar los datos del Perfil
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $userac = $conecta->real_escape_string($_POST['user1']);
  $sql = "UPDATE alumnos SET Usuario = '$userac' WHERE Id_Alumno = '$id'";
  $resultado = $conecta->query($sql);
    header("location:perfil1.php");
}

$conecta->close();
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- optimizar el sitio para moviles -->
    <meta name="MobileOptimizer" content="width"/>
    <!-- optimizacion para cualquier dispositivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- descripción del sitio web -->
    <meta name="description" content="Sistema online para ayuda y guía de estudiantes y futuros estudiantes, gestión del plantel a través de módulos como son:
    registro de alumnos, reporte de alumnos, Recorrido Virtual de las áreas que conforman al plantel, Desarrollo de Juego Interactivos para el aprendizaje de las distintas carreras que ofrece la institución">
    <!-- palabras claves para el seo -->
    <meta name="keywords" content="Sistema Online, Perfil de Usuario, Modificar perfil, Reportes de Asistencia, Recorrido Virtual, Juegos Interactivos, Guía de estudiantes, Conalep Naucalpan 1, Gestión de planteles, Carreras Técnicas">
   <!-- meta para el autor del sitio  -->
    <meta name="autor" content="Borderline">
    <!-- el de la marca --->
    <meta name="copyright" content="Borderline & Conactive">
    <meta name="robots" content="index/">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main2.css">
    <link rel="stylesheet" type="text/css" href="../css/fontello.css">
    <title>Modificar Perfil | Conactive</title>
  </head>
  <body>
    <!--Inicia Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to left, rgb(233, 197, 161), rgb(254, 249, 183)">
          <a href="#"><img src="../img/img1.png" alt="LogoE" style="width: 90px; height: 70px;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                          <nav aria-label="breadcrumb">
                      <ol class="breadcrumb" style="background-color: rgb(255, 255, 255); opacity: 0.3;">
                        <li class="breadcrumb-item"><a href="../principal.php">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="perfil1.php">Perfil de Usuario</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modificar Usuario</li>
                      </ol>
                    </nav>
                    </div>
                  </div>
                  <li class="nav-item active" style="list-style: none">
                     <a class="nav-link disabled" style="color: #000"  href="#" tabindex="-1" aria-disabled="true"> Bienvenid@ <?php echo $_SESSION['Usuario'] ?></a>
                   </li>
                      </li>
                      <!--Inicia lista despegable-->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-white" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../img/dino.png" alt="Perfil" style="width: 30px; height:30px; border-radius:50%; ">
                          </a>
                          <div class="dropdown-menu" aria-labelledby="opciones">
                            <a class="dropdown-item" href="perfil1.php"><span class="icon-cog"></span>Perfil</a>
                            <a class="dropdown-item" href="#"><span class="icon-help"></span>Ayuda</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalCenter"><span class="icon-moon"></span>Cerrar sesión</a>
                          </div>
                        </li>
                      <!--Termina lista despegable-->
                </ul>
              </div>
            </nav>
      <!--Termina navbar-->
      <!--ventana modal cerrar sesion -->
      <div class="modal" tabindex="-1" id="ModalCenter">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><span class="icon-off"></span> Cerrar Sesión </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>¿Deseas cerrar la sesión <?php echo $usuario; ?>?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <a href="cerrar.php" class="btn btn-danger">Cerrar Sesión</a>
            </div>
          </div>
        </div>
      </div>
      <!--Termina ventana modal-->
      <div class="container py-3">
        <div class="card">
          <div class="card-header" style="background: #ccccff;">
            <h2 class="text-center">Modificar Perfil</h2>
          </div>
          <div class="card-body">
            <h5 class="card-title">Nombre:&nbsp;<?php echo $user['Nombre_A']; echo "&nbsp;".$user['ApellidoP_A'];
             echo "&nbsp;".$user['ApellidoM_A']; ?> </h5>
            <!--Inicia tarjeta-->
            <blockquote class="blockquote mb-0">
              <div class="card text-center">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Cambiar nombre de Usuario</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="modificaremail.php?Id_Alumno=<?php echo $usu1['Id_Alumno']; ?>">Cambiar correo electrónico</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="modificarpass.php?Id_Alumno=<?php echo $usu1['Id_Alumno']; ?>">Cambiar contraseña</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <!--Inicia formulario-->
                  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                      <div class="form text-justify">
                        <input type="hidden" name="id" id="id" value="<?php echo $row['Id_Alumno'];?>">
                    <div class="form-group">
                      <label for="user1">Cambiar nombre de usuario:</label>
                        <input type="text" name="user1" class="form-control" id="user1" value="<?php echo $row['Usuario'];?>">
                    </div>
                      <input type="submit" name="submit" value="Modificar" class="btn btn-outline-danger">
                  </div>
                </form>
                  <!--Termina formulario-->
                </div>
              </div>
            </blockquote>
            <!--Termina tarjeta-->
          </div>
        </div>
      </div>
      <!--Integrar scripts-->
      <script src="../js/jquery-3.5.1.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
