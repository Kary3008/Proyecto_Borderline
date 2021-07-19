<?php
session_start();
include 'conecta.php';
include 'configreg.php';
require '../phpqrcode/qrlib.php';
$usuario = $_SESSION['Usuario'];
if(!isset($usuario)){
    header("location:../inicio/index.php");
  }
  //consulta para extraer datos de Perfil
  $q = "SELECT * FROM alumnos WHERE Usuario ='".$usuario."'";
  $cons = $conecta->query($q);
  $perfil = $cons->fetch_array();
  if ($perfil > 0){
    $usu1 = $perfil;
  }

  $inner = "SELECT a.Id_Alumno, a.Nombre_A, a.ApellidoP_A, a.ApellidoM_A, a.Fecha_Nac, a.Usuario, a.Correo_U, a.Password, a.Id_Tusuario, a.Id_Genero, a.Id_Grupo, a.Id_Carrera, a.Id_Plantel,
  g.Id_Genero, g.Nombre_G, c.Id_Carrera, c.Nombre_Carrera, c.Codigo_C, gr.Id_Grupo, gr.Grupo, gr.Id_Carrera,
  p.Id_Plantel, p.Nombre_Plantel, p.Codigo_Plantel, p.Direccion, t.Id_Tusuario, t.Tipo FROM alumnos as a INNER JOIN genero as g ON a.Id_Genero = g.Id_Genero INNER JOIN carrera as c ON a.Id_Carrera = c.Id_Carrera
  INNER JOIN grupos as gr ON a.Id_Grupo = gr.Id_Grupo INNER JOIN plantel as p ON a.Id_Plantel = p.Id_Plantel INNER JOIN tipousuario as t ON a.Id_Tusuario = t.Id_Tusuario WHERE Usuario = '".$usuario."'";
  $join = $conecta->query($inner);
  $imprimir = $join->fetch_array();

  $conecta->close();

//consulta para generar QR
$dir = '../img/qr/';
if (!file_exists($dir))
mkdir($dir);
{
  $filename = $dir.'user'.$usu1['Id_Alumno'].'png';
  $tam = 6; //tamaño de el pixel 10
  $lavel = 'M'; //precision de QR M
  $frameSize = '4'; //tamaño blanco
  $Qrnom = $imprimir['Nombre_A'];
  $Qrnom1 = $imprimir['ApellidoP_A'];
  $Qrnom2 = $imprimir['ApellidoM_A'];
  $Qrnom3 = $imprimir['Fecha_Nac'];
  $Qrnom4 = $imprimir['Correo_U'];
  $Qrcontenido = ('Nombre: '.$Qrnom.' Apellido paterno: '.$Qrnom1.' Apellido materno: '.$Qrnom2.' Fecha de Nacimiento: '.$Qrnom3.' Correo: '.$Qrnom4);
  /*'BEGIN:VCARD'."\n";
  'VERSION:3'."\n";
  'FN:'.$Qrnom. $Qrnom1. $Qrnom2."\n";
  'TEL;WORK;VOICE'.$Qrnom3."\n";
  'TITLE:Perfil de Usuario'."\n";
  'EMAIL:'.$Qrnom4."\n";
  "END:VCARD";*/
  QRcode::png($Qrcontenido,$filename,$lavel,$tam,$frameSize);
}


 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- meta tipos de caracteres especiales en la web -->
    <meta charset="utf-8">
    <!-- optimizar el sitio para moviles -->
    <meta name="MobileOptimizer" content="width"/>
    <!-- optimizacion para cualquier dispositivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- descripción del sitio web -->
    <meta name="description" content="Sistema online para ayuda y guía de estudiantes y futuros estudiantes, gestión del plantel a través de módulos como son:
    registro de alumnos, reporte de alumnos, Recorrido Virtual de las áreas que conforman al plantel, Desarrollo de Juego Interactivos para el aprendizaje de las distintas carreras que ofrece la institución">
    <!-- palabras claves para el seo -->
    <meta name="keywords" content="Sistema Online, Perfil de Usuario, Reportes de Asistencia, Recorrido Virtual, Juegos Interactivos, Guía de estudiantes, Conalep Naucalpan 1, Gestión de planteles, Carreras Técnicas">
   <!-- meta para el autor del sitio  -->
    <meta name="autor" content="Borderline">
    <!-- el de la marca --->
    <meta name="copyright" content="Borderline & Conactive">
    <meta name="robots" content="index/">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main2.css">
    <link rel="stylesheet" type="text/css" href="../css/fontello.css">
    <title>Perfil | Código QR</title>
  </head>
  <body>
      <!--inicia navbar-->
      <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to left, rgb(233, 197, 161), rgb(254, 249, 183)">
        <a href="#"><img src="../img/img1.png" alt="LogoE" style="width: 80px; height: 60px;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: rgb(255, 255, 255); opacity: 0.5;">
                      <li class="breadcrumb-item"><a href="../principal.php">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="perfil1.php">Perfil</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Imprimir Perfil</li>
                    </ol>
                  </nav>
                  <li class="nav-item active" style="list-style: none">
                     <a class="nav-link disabled" style="color: rgba(84, 75, 70);"  href="#" tabindex="-1" aria-disabled="true">Bienvenid@ <?php echo $_SESSION['Usuario'] ?></a>
                   </li>
                   <!--Inicia lista despegable-->
                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle text-white" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img src="../img/dino.png" alt="Perfil" style="width: 30px; height:30px; border-radius:50%; ">
                       </a>
                       <div class="dropdown-menu" aria-labelledby="opciones">
                         <a class="dropdown-item" href="busqueda.php"><span class="icon-search"></span>Búsqueda</a>
                         <a class="dropdown-item" href="#"><span class="icon-help"></span>Ayuda</a>
                         <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalCenter"><span class="icon-moon"></span> Cerrar sesión</a>
                       </div>
                     </li>
                   <!--Termina lista despegable-->
              </ul>
            </div>
          </nav>
      <!--termina navbar-->
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
      <br><br>
      <h1 class="text-center">Perfil de Usuario</h1>
      <!--Inicia contenido-->
      <div class="container" style="margin-top: 50px; background-color: rgb(187, 219, 206);" >
      <div class="container">
        <h4 align= center>&nbsp;<?php echo $usu1['Nombre_A']; echo "&nbsp".$usu1['ApellidoP_A']; echo "&nbsp".$usu1['ApellidoM_A']; ?></h4>
        <div class="card">
          <!--Foto de perfil-->
          <!--Inicia Datos del usuario-->
          <div class="card">
            <div class="container">
              <div class="container">
          <div class="row py-4">
              <div class="col col-sm-6 col-md-6 col-lg-6">
                  <div class="card shadow-lg p-3 mb-5 rounded">
                        <div class="card-header" style="background-color: rgb(187, 219, 206);"><span class="icon-address-book"></span> <b>Datos de Perfil</b></div>
                        <div class="card-body">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="icon-mail-alt"></span>Correo: <?php echo $usu1['Correo_U']; ?></li>
                            <li class="list-group-item"><span class="icon-calendar"></span> Fecha de Nacimiento: <?php echo $usu1['Fecha_Nac']; ?></li>
                            <li class="list-group-item"><span class="icon-user"></span> Genero: <?php echo $imprimir['Nombre_G'] ?></li>
                            <li class="list-group-item"><span class="icon-user-circle"></span> Tipo de Usuario: <?php echo $imprimir['Tipo'] ?></li>
                            <li class="list-group-item"><span class="icon-home"></span> Plantel: <?php echo $imprimir['Nombre_Plantel'] ?></li>
                            <li class="list-group-item"><span class="icon-users"></span> Grupo: <?php echo $imprimir['Grupo'] ?></li>
                            <li class="list-group-item"><span class="icon-star"></span> Carrera: <?php echo $imprimir['Nombre_Carrera'] ?></li>
                          </ul>
                        </div>
                  </div>
              </div>
              <div class="col col-sm-5 col-md-5 col-lg-5">
                  <div class="card shadow-lg p-3 mb-5 rounded">
                      <div class="card-header" style="background-color: rgb(187, 219, 206);"><span class="icon-address-card"></span> <b>Código QR</b></div>
                      <div class="card-body">
                         <?php echo '<img src="'.$filename.'">';?>
                    </div>
                  </div>
              </div>
          </div>
          <!--Termina Datos de perfil-->
          </div>
        </div>
      </div>
        </div>
        <div class="container">
            <p class="text-center py-2">
              <span class="icon-copyright"></span><img src="../img/logo.png" alt="Logotipo Borderline" class="logo" style="width: 105px;
              height: 40px">
            </p>
          </div>
      </div>
      <!--Termina contenido-->
    <!--Integrar scripts-->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
