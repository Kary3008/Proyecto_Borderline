<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/fontello.css">
     <link rel="stylesheet" type="text/css" href="css/preloader.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">

     <script src="js/jquery-3.5.1.min.js"></script>
     <title> BorderLine | Control de Dies</title>
  </head>
  <body>
    <!-- inicia preloader de la pagina web -->
     <div id="loader">
       <div class="dot"></div>
       <div class="dot"></div>
       <div class="dot"></div>
     </div>
    <!-- termina el preloader de la pagina web -->
    <!-- inicia el contenido de la web -->
     <div id="contenido">
       <!-- inicia barra de navegación -->
       <?php include '../menu.php' ?>
<!-- termina barra de navegación -->
<!-- inicia slider -->
<div id="slider" class="carousel slide" data-ride="carousel">
   <!-- elemento son las lineas o puntos de navegacion -->
   <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
 <img src="img/img1.png" class="d-block w-100" alt="Slider2">
        </div>
        <div class="carousel-item">
             <img src="img/img2.png" class="d-block w-100" alt="Slider2">
        </div>
        <div class="carousel-item">
             <img src="img/img3.png" class="d-block w-100" alt="Slider3">
             <div class="carousel-caption d-none d-md-block">
             </div>
         </div>
      </div>
  </div>
    <!-- flechas de slider -->
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Atras</span>

    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Siguiente</span>
    </a>
  </div>
<!-- termina slider -->
<div class="container py-4">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="text text-center">Nuestros Servicios</h3>
    </div>
  </div>
</div>
    <div class="container py-2">
          <div class="row" id="Servicios">
            <div class="col-lg-12" data-aos="fade-up">
                <h3 class="text text-center"> </h3>
            </div>
          </div>
       </div>
      <!-- inicia nuestra tarjeta de presentacion -->
       <div class="container py-3">
          <div class="row" data-aos="fade-down">
            <div class="col aling-middle">
              <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                 <div class="card-header bg-header-card text text-center">
                  SALON
                 </div>
                 <a href="Demo(1).html"><img src="img/PROTOTIPO(1).png" class="card-img-top" alt="INGRESO"></a>
              </div>
           </div>
            <!-- termina primera card-->
              <!-- INICIA SEGUNDA card-->
            <div class="col aling-middle">
              <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                 <div class="card-header bg-header-card text text-center">
                    ASISTENCIA
                 </div>
                 <a href="#"><img src="img/PROTOTIPO(2).png" class="card-img-top" alt="ASISTENCIA"></a>
              </div>
            </div>
    <!-- termina seccion presentacion -->
    <!-- INICIA tercera card-->
    <div class="col aling-middle">
      <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
         <div class="card-header bg-header-card text text-center">
            PERFIL
         </div>
         <a href="../pincipal/main/perfil1.php"><img src="img/PROTOTIPO(3).png" class="card-img-top" alt="REGISTRO"></a>
      </div>
    </div>
<!-- termina seccion presentacion -->
    <div class="container" data-aos="fade-up">+
    </div>
  </div>
    </div>

    <!-- inicia jumbotron -->
      <div class="jumbotron jumbo">
         <div class="container" id="Somos">
           <img src=" " alt="">
            <div class="row">
               <div class="col-sm-6 btn-holder"></div>
                  <div class="col-sm-6">
                      <h1 class="text-dark" data-aos="fade-left">BorderLine</h1>
                      <p class="text-justify text-dark" data-aos="fade-left">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                      do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                      reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                      pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                      qui officia deserunt mollit anim id est laborum.
                      </p>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contac" data-aos="fade-up">Más Información</a>
                  </div>
               </div>
            </div>
         </div>
    <!-- termina jumbotron -->
    <!-- Modal -->
    <div class="modal fade" id="contac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Resgitro</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body">
                  <form class="form-group" action="" method="post">
                     <div class="row">
                        <div class="col">
                           <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo" required>
                        </div>
                        <div class="col">
                           <input type="tel" name="Fecha" class="form-control" placeholder="Fecha" required>
                        </div>
                     </div><br>
                     <div class="row">
                        <div class="col">
                           <input type="email" name="email" class="form-control" placeholder="email" required>
                        </div>
                     </div><br>
                     <div class="container">
                      <div class="row">
                         <textarea name="mensaje" rows="8" cols="80" placeholder="Mensaje" required></textarea>
                      </div>
                    </div>
                   </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
             </div>
         </div>
     </div>
    <!-- inician icono -->
        <div class="container">
           <div class="row" data-aos="fade-up">


               <div class="col-sm">
                   <div class="container">
                      <img src="img/icono1.png" alt="iconos" class="iconos mx-auto d-block">
                      <h5 class="text-center py-2">OutDanger</h5>
                   </div>
               </div>

               <div class="col-sm">
                   <div class="container">
                      <img src="img/icono2.png" alt="iconos" class="iconos mx-auto d-block">
                      <h5 class="text-center py-2">Redes Sociales</h5>
                   </div>
               </div>

           </div>
        </div>
    <!-- terminan iconos -->
    <!--inicia seccion de portafolio -->
    <div class="container" data-aos="fade-down-right">
         <div class="row py-4">
           <div class="card">
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#Portafolio">
                  <div class="card-body">
                      Información de las redes sociales
                  </div>
              </div>
           </div>
        </div>
    </div>

<!-- termina Acordeon -->
<!--inicia parallax -->
<section id="parallax">
   <div class="jumbotron parallax">
       <div class="container-lg">
            <h3 class="text-center text-dark" data-aos="fade-up">Ventas y Usuarios Conectados</h3>
       </div>
       <div class="container text-center">
            <div class="row py-4">
                <!-- caja de iconos -->
                <div class="col-sm align-middle" data-aos="fade-down">
                    <img src="img/icono3.png" alt="iconos">
                    <div class="counter"> + 1000</div>
                    <p class="text-dark parrafo">Usuarios</p>
                </div>
                <!-- terminamos caja de iconos -->
                <!-- caja de iconos -->
                <div class="col-sm align-middle" data-aos="fade-down">
                    <img src="img/icono4.png" alt="iconos">
                    <div class="counter"> + 5000</div>
                    <p class="text-dark parrafo">Ventas</p>
                </div>
                <!-- terminamos caja de iconos -->
                <!-- caja de iconos -->
                <div class="col-sm align-middle" data-aos="fade-down">
                    <img src="img/icono5.png" alt="iconos">
                    <div class="counter"> + 10</div>
                    <p class="text-dark parrafo">Proyectos Nuevos</p>
                </div>
                <!-- terminamos caja de iconos -->
            </div>
       </div>
   </div>
</section>
<!-- termina parallax-->

<!-- inicia - footer -->
 <footer class="bg-card">
    <div class="footer-copyright text-center py-3 cabezera">
         <div class="container">

              <p class="text-center text-light">@2020 copyright: Border-OutDanger</p>
         </div>
    </div>
 </footer>
<!-- termina footer -->
</div>
    <!-- termina el contenido de la web -->
    <!-- inicia los script -->

     <script src="js/bootstrap.min.js"></script>
     <script src="js/preloader.js"></script>
     <script src="js/main.js"></script>
     <!-- terminan los script -->
  </body>
</html>
