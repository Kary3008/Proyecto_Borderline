<?php include '../pincipal/main/conecta.php';
session_start();
$usuario = $_SESSION['Usuario'];
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
  <meta name="keywords" content="Sistema Online, Videojuegos, Perfil de Usuario, Reportes de Asistencia, Recorrido Virtual, Juegos Interactivos, Guía de estudiantes, Conalep Naucalpan 1, Gestión de planteles, Carreras Técnicas">
 <!-- meta para el autor del sitio  -->
  <meta name="autor" content="Borderline">
  <!-- el de la marca --->
  <meta name="copyright" content="Borderline & Conactive">
  <meta name="robots" content="index/">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/preloader.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/social.css">
    <script src="js\jquery-3.5.1.min.js"></script>
    <title>Juegos Interactivos</title>
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
  <!--inicio de preloader de la pagina web-->

    <!--inicia contenido de la web-->
    <div id="contenido">
    <!--inicia barra de navegacion-->
    <?php include '../menu.php' ?>
    <!--termina barra de navegacion-->
    <!--inicia slider-->
     <div id="slider" class="carousel slide" data-ride="carousel">
    <!--elementos o lineas de navegacion-->
     <ol class="carousel-indicators">
         <li data-target="#slider" data-slide-to="0" class="active"></li>
         <li data-target="#slider" data-slide-to="1"></li>
         <li data-target="#slider" data-slide-to="2"></li>
    </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/img1.jpg" class="d-block w-100" alt="Slider1">
    </div>
        <div class="carousel-item">
        <img src="img/img2.jpg" class="d-block w-100" alt="Slider2">
        <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
    </div>
    </div>
        <div class="carousel-item">
        <img src="img/img2.jpg" class="d-block w-100" alt="Slider3">
        <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
    </div>
    </div>
    </div>
    <!--flechas de slider-->
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Atras</span>
     </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
    </div>
    <!---termina slider-->
    <div class="container py-4">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="text text-center">Nuestros Servicios</h3>
        </div>
      </div>
    </div>

      <div class="container py-3">
        <div class="row">
          <div class="col aling-middle">
    <!--inicia tarjeta de servicios-->
      <div class="card shadow py-3 mb-5 bg-white rounded" style="width: 18rem;">
        <div class="card-header bg-header-card">
           Memorama
        </div>
        <a href="memorama/memorama.html"><img src="img/servicio1.png" class="card-img-top " alt="Posicionamiento seo"></a>
       <div class="card-body">
         <p class="card-text">Aprende y juega con nosotros de la mejor manera.</p>
      </div>
      </div>
      <!--termina primera card-->
      </div>
      <div class="col aling-middle">
    <!--inicia tarjeta de servicios-->
    <div class="card shadow py-3 mb-5 bg-white rounded" style="width: 18rem;">
    <div class="card-header bg-header-card">
       Juego del ahorcado
    </div>
    <a href="Ahorcado/JuegoAhorcado.html"><img src="img/servicio2.jpg" class="card-img-top" alt="Posicionamiento seo"></a>
    <div class="card-body">
     <p class="card-text">Registrate y suscribete para tener mas beneficios.</p>
    </div>
    </div>
    <!--termina segunda card-->
      </div>
      <div class="col aling-middle">
    <!--inicia tarjeta de servicios-->
    <div class="card shadow py-3 mb-5 bg-white rounded" style="width: 18rem;">
    <div class="card-header bg-header-card">
       Juego de la Pelota
    </div>
    <a href="../juego/index.html"><img src="img/servicio3.jpg" class="card-img-top" alt="Posicionamiento seo"></a>
    <div class="card-body">
     <p class="card-text">Conectate con tus amigos y empieza a aprender.</p>
    </div>
    </div>
    <!--termina tercera card-->
</div>
</div>
<!--termina seccion servicios-->
     <div class="container">
       <p class="text text-center"><a href="" class="text-muted">Mas Información</a></p>
     </div>
   </div>
   <!--inicia jumbotron-->
   <div class="jumbotron jumbo">
     <div class="container">
       <div class="row">
         <div class="col-sm-6 btn-holder"></div>
           <div class="col-sm-6">
             <h1 class="text-light">¿Quienes Somos?</h1>
             <p class="text-justify text-light">
              Somos una consultoria en donde atravez de una dinamica de aprendizaje
              en base a juegos de reforzaremos los conosimiento de los alumnos de cada carrera
              para que podamos covencer alos estudianres que se interesen en reforsar sus
              conosimientos en la carrera que estan estudiando con nuestros juegos en linea.
             </p>
          <a href="#" class="btn btn-primary">Mas Informacion</a>
  </div>
  </div>
  </div>
  </div>
   <!--termina jumbotron-->
   <!--inician iconos-->
       <div class="container">
         <div class="row">
           <div class="col-sm">
             <div class="container">
               <img src="img/icono1.png" alt="iconos " class="iconos mx-auto d-block">
               <h5 class="text-center py-2">Tienda Online.</h5>

    </div>
    </div>
        <div class="col-sm">
        <div class="container">
        <img src="img/icono2.png" alt="iconos " class="iconos mx-auto d-block">
         <h5 class="text-center py-2">Cursos Online.</h5>
  </div>
  </div>
        <div class="col-sm">
        <div class="container">
        <img src="img/icono3.png" alt="iconos " class="iconos mx-auto d-block">
          <h5 class="text-center py-2">Busquedas.</h5>
  </div>
  </div>
  </div>
   </div>
   <!--terminan iconos-->
   <!--seccion de portafolio-->
   <div class="container">
       <div class="row py-4">
          <div class="col col-sm-12  col-md-6 col-lg-6">
           <img src="img/Contacto.png" class="img-fluid " alt="Contacto">
  </div>
         <div class="col col-sm-12  col-md-6 col-lg-6">


<!--inicia acordeon-->
<div class="accordion" id="Portafolio">
     <div class="card">
        <div class="card-header bg-header-card  " id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left   text-decoration-none  text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Categorias.
                   </button>
             </h2>
       </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#Portafolio">
              <div class="card-body">
                  Contenidos
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item">Alimentos y Bebidas</li>
                      <li class="list-group-item">Informatica</li>
                       <li class="list-group-item">Contabilidad</li>
                        <li class="list-group-item">Hospitalidad</li>
                          </ul>
    <!--inicia slider de imagenes web-->
                <div id="carouselweb" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/somos1.png" class="d-block w-100" alt="slider1">
            </div>
                <div class="carousel-item">
                <img src="img/somos2.jpg" class="d-block w-100" alt="slider1">
            </div>
                <div class="carousel-item">
                <img src="img/somos3.jpg" class="d-block w-100" alt="slider1">
           </div>
           </div>
                <a class="carousel-control-prev" href="#carouselweb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
           </a>
                <a class="carousel-control-next" href="#carouselweb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
          <a>
        </div>
    <!---termina slider de imagens web-->
                 </div>
            </div>
      </div>
<div class="card">
          <div class="card-header  bg-header-card  " id="headingTwo">
               <h2 class="mb-0">
                   <button class="btn btn-link btn-block text-left collapsed text-decoration-none  text-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Grupos
               </button>
           </h2>
        </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#Portafolio">
                <div class="card-body">
               Ingresa tu Grupo
          </div>
       </div>
         </div>
         <div class="card">
             <div class="card-header bg-header-card  " id="headingThree">
                  <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed  text-decoration-none  text-light" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Redes Sociales
              </button>
             </h2>
         </div>
     <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#Portafolio">
        <div class="card-body">
            Informacion de las redes sociales
      </div>
    </div>
  </div>
</div>
</div>
 </div>
</div>
<!--termina acordeom-->
<!--termina seccion de portafolio-->

<!--comienza parallax-->
<section  id="parallax">
  <div class="jumbotron parallax">
    <div class="container-lg">
      <h3 class="text-center  text-light">Tenemos las Herramientas </h3>
    </div>
  <div class="container text-center">
    <div class="row py-4">
      <!--caja de iconos-->
      <div class="col-sm aling-middle">
        <img src="img/icono8.png" alt="iconos">
        <div class="counter">+ 10</div>
        <p class="text-light  parrafo">Puntuaciones</p>
      </div>
      <!--termina caja de iconos-->
      <!--caja de iconos-->
      <div class="col-sm aling-middle">
        <img src="img/icono6.png" alt="iconos">
        <div class="counter">+ 10</div>
        <p class="text-light  parsrafo">Busquedas</p>
      </div>
      <!--termina caja de iconos-->
      <!--caja de iconos-->
      <div class="col-sm aling-middle">
        <img src="img/icono5.png" alt="iconos">
        <div class="counter">+ 10</div>
        <p class="text-light  parrafo">Reseñas</p>
      </div>
      <!--termina caja de iconos-->
    </div>
  </div>
  </div>
</section>
<!--termina parallax-->
<section id="contacto">
  <div class="container">
  <div class="row py-4">
    <div class="col-sm-6  col-md-6  col-lg-6">
      <div id="map"></div>
     </div>
    <div class="col-sm-6  col-md-6  col-lg-6">
      <p>.</p>
    </div>
</div>
</div>
</section>
<!-- inicia-footer-->
<footer class="bg-card">
  <div class="footer-copyright text-center py-3 cabezera">
    <div class="container">
      <div class="row">
           <div class="col"></div>
           <div class="col"></div>
           <div class="col text-center">
           <a class="btn btn-holder nav-item" data-toggle="collapse" href="#footer" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
           <span class="icon-rocket text-light">Abrir</span></a>
       <div class="row">
         <div class="col"></div>
      </div>
      </div>
</div>
  <div class="collapse multi-collapse" id="footer">
    <div class="cabezera">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <p class="text-center text-white"><span class="icon-map-o"></span>Mapa de sitio</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-left cabezera"><span class="icon-basket"></span>Servicios</li>
                  <li class="list-group-item text-left cabezera"><span class="icon-user"></span>Quienes Somos</li>
                  <li class="list-group-item text-left cabezera"><span class="icon-dropbox"></span>Portafolio</li>
                    <li class="list-group-item text-left cabezera"><span class="icon-th-list"></span>Aviso de  privasidad</li>
              </ul>
              </div>
              <div class="col-sm">
                <p class="text-center text-white"><span class="icon-map-o"></span>Links de interes</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-left cabezera"><span class="icon-facebook"></span><a href="https://www.facebook.com/BorderlineMexico">Facebook</a></li>
                    <li class="list-group-item text-left cabezera"><span class="icon-twitter"></span><a href="https://twitter.com/Borderline_mex?fbclid=IwAR2hb9iYPsIS4zulDei5bnZjRj3TXfRR2UUqAS58z6mrfqlkqy5rFdpU9aE">Twitter</a></li>
                    <li class="list-group-item text-left cabezera"><span class="icon-youtube-play"></span>YouTube</li>
                      <li class="list-group-item text-left cabezera"><span class="icon-instagram"></span><a href="https://www.instagram.com/borderline_mexico/?fbclid=IwAR0Kscn-Oott6IvaTzz0ar9omAcSQD7IZsN5ozXznmKeTThojr78OWGQbYE">Instagram</a></li>
                </ul>
                </div>
      </div>
      </div>
       </div>
       </div>


    </div>
  </div>
</footer>

<!--termina -footer-->
</div>
<!--termina contenido de la web-->
<script type="text/javascript">
var map;
function iniMap(){
  map = new google.maps.Map(document.getElementById('map'),{
  center:{lat:19.4446232 , lng:-99.2718253},
  zoom:13
  });
}
</script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLTSukAoUZfj2947RAFWOHOkuT_lthmt0&callback=initMap"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/preloader.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
