<?php include 'main/conecta.php';
 session_start();
 $varsesion = $_SESSION['usuario'];
if (!isset($usuario)){
    header("location: pincipal/session.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INICIO</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
    <script src="js/jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <!--Inicia Navbar y sidebar-->
     <?php include 'main/sidebar1.php' ?>
     <div id="page-content-wrapper">
      <?php include 'main/navbar_principal.php' ?>
      <!--Inicia contenido-->
       <h4 class="text-center display-4 py-2">Dashboard</h4>
       <div class="container">
         <?php include 'main/ejemplo.html' ?>
       </div>
       <!--Termina contenido-->
      </div>
    <!--Termina Navbar y sidebar-->

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
