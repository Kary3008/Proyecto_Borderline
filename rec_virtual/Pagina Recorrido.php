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
    registro de alumnos, reporte de alumnos, Recorrido Virtual de las áreas que conforman al plantel, Desarrollo de Juego Interactivos para el aprendizaje de las distintas carreras que ofrece la institución">
    <!-- palabras claves para el seo -->
    <meta name="keywords" content="Sistema Online, Perfil de Usuario, Reportes de Asistencia, Recorrido Virtual, Juegos Interactivos, Guía de estudiantes, Conalep Naucalpan 1, Gestión de planteles, Carreras Técnicas">
   <!-- meta para el autor del sitio  -->
    <meta name="autor" content="Borderline">
    <!-- el de la marca --->
    <meta name="copyright" content="Borderline & Conactive">
    <meta name="robots" content="index/">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/fontello.css">
     <link rel="stylesheet" type="text/css" href="css/preloader.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <link rel="stylesheet" type="text/css" href="css/socialrv.css">

     <script src="js/jquery-3.5.1.min.js"></script>
     <title> Recorrido Virtual</title>
  </head>
  <body>
        <!--Incia el apartadod de redes-->
    <div class="social">
      <ul>
        <li><a href="https://www.facebook.com/BorderlineMexico" target ="_blank" class="icon-facebook-rect"></a></li>

        <li><a href="https://twitter.com/Borderline_mex?fbclid=IwAR2hb9iYPsIS4zulDei5bnZjRj3TXfRR2UUqAS58z6mrfqlkqy5rFdpU9aE" target ="_blank" class="icon-twitter-bird"></a></li>

        <li><a href="https://www.instagram.com/borderline_mexico/?fbclid=IwAR0Kscn-Oott6IvaTzz0ar9omAcSQD7IZsN5ozXznmKeTThojr78OWGQbYE" target ="_blank" class="icon-instagram-filled"></a></li>
      </ul>

    </div>
    <!--Termina el apartado de redes sociales -->
    <!-- inicia preloader de la pagina web -->
     <div id="loader">
       <div class="dot"></div>
       <div class="dot"></div>
       <div class="dot"></div>
     </div>
     <!-- termina el preloader de la pagina web -->
    <!-- inicia el contenido de la web -->
     <div id="contenido">
         <?php include '../menu.php' ?> <!--Inserta navbar-->
<!-- inicia slider -->
<div id="carouselExampleCaptions" class="carousel slide slider" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">
  </li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img4.jpg" class="d-block w-100" alt="0" style="width:100%; height: 500px;">
      <div class="carousel-caption d-none d-md-block">
          <h2 class="text-center slider"></h2>
            <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" class="d-block w-100" alt="1" style="width:100%; height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-center slider"></h2>
          <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <a href="../registro/Registro.php"><img src="img/img5.jpg" class="d-block w-100" alt="2" style="width:100%; height: 500px;"></a>
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-center slider"></h2>
          <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" class="d-block w-100" alt="2" style="width:100%; height: 500px;">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-center slider"></h2>
          <p></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- flechas de slider -->
  </div>
<!-- termina slider -->
  <div class="container py-5"> <br> <br>
    <h2 class="text-center py-4">Recorridos</h2>
    <div class="row">
      <div class="col aling-middle">
<!--inicia tarjeta de servicios-->
  <div class="card shadow py-3 mb-5 bgcard rounded" style="width: 18rem;">
    <div class="card-header text-center" style="font-size:20px;">
       Recorrido Virtual Parque.
    </div>
    <a href="https://goo.gl/maps/Hj88WNvXFmf514C58"><img src="img/img1.png" class="card-img-top " alt="Recorrido virtual"></a>
   <div class="card-body">
     <p class="card-text text-justify">Conoce los alrededores cerca del plantel.</p>
  </div>
  </div>
  <!--termina primera card-->
  </div>
  <div class="col aling-middle">
<!--inicia tarjeta de servicios-->
<div class="card shadow py-3 mb-5 bgcard rounded" style="width: 18rem;">
<div class="card-header bg-header-card text-center">
   Recorrido Virtual.
</div>
<a href="../REGISTRO/Registro.php"><img src="../pincipal/img/recVirtual.png" class="card-img-top" alt="Recorrido virtual2"></a>
<div class="card-body">
 <p class="card-text text-justify">Registrate para seguir recorriendo más tour virtuales.</p>
</div>
</div>
<!--termina segunda card-->
  </div>
  <div class="col aling-middle">
<!--inicia tarjeta de servicios-->
<div class="card shadow py-3 mb-5 bgcard rounded" style="width: 18rem;">
<div class="card-header bg-header-card text-center">
   Conocenos.
</div>
<a href="#"><img src="../pincipal/img/desarrollo.png" class="card-img-top" alt="Recorrido virtual3"></a>
<div class="card-body">
 <p class="card-text text-justify">Conoce el por qué de este proyecto.</p>
</div>
</div>
<!--termina tercera card-->
</div>
</div>
<!--INICIA RECORRIDO-->
<div class="container">
  <h2 class="py-3">Tour Virtual</h2>
 <iframe width="100%" height="480px" src="https://poly.google.com/view/3Z1fruwFnEQ/embed?chrome=min" frameborder="0" style="border:none;" allowvr="yes" allow="vr; xr; accelerometer; magnetometer; gyroscope; autoplay;" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="" ></iframe>
</div>
<!--INICIO DEL VIDEO-->
<div class="container text-center mb-5" style="margin-top:3rem;">
<h3>Conoce más sobre CONALEP</h3>
    <iframe width="790" height="515" src="https://www.youtube.com/embed/lwLQ8AI1Dpo" title="Conocer mas sobre Conalep" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<!--TERMINA EL VIDEO-->
<!--Termina recorrido-->
<!--termina seccion servicios-->
    <!-- termina el contenido de la web -->
     <script src="js/bootstrap.min.js"></script>
     <script src="js/preloader.js"></script>
     <script src="js/main.js"></script>
  </body>
</html>
