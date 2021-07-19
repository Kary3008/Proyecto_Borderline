<?php include 'main/conecta.php';
session_start();
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
 header("location:inicio/session.php");
}
//cerrar la BD
$conecta->close();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="includes/push/push.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Sistema | Conactive</title>
    <!--Inicia notificaciones-->
    <?php
      $notification= '<script>
          Push.create("Hola, bienvenid@.", {
                body: "Conoce el futuro proyecto de la empresa BorderLine",
                icon: "img/logo.png",
                timeout: 6000,
                onClick: function() {
                  window.location="project.php";
                  this.close();
                }
          });
        </script>';
          echo $notification;
          ?>
        <!--Termina notificaciones-->
  </head>
  <body>
    <!--Inicia Navbar y sidebar-->
     <?php include 'main/sidebar.php' ?>
     <div id="page-content-wrapper">
      <?php include 'main/navbar.php' ?>
       <?php include 'main/contenido.php' ?>
       <!--Termina contenido-->
      </div>
    <!--Termina Navbar y sidebar-->
    </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
