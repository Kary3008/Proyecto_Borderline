<!--Inicia Navbar-->
<link rel="stylesheet" type="text/css" href="../pincipal/css/fontello.css">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to left, #eac3a3, #95cbc8, #95cbc8)">
      <a href="../pincipal/principal.php"><img src="../img1.png" alt="LogoE" style="width: 90px; height: 70px;"></a>

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
                    <li class="breadcrumb-item"><a href="../pincipal/principal.php">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Módulo</li>
                  </ol>
                </nav>
                </div>
              </div>
                  </li>
                  <!--Inicia lista despegable-->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../pincipal/img/dino.png" alt="Perfil" style="width: 30px; height:30px; border-radius:50%; ">
                      </a>
                      <div class="dropdown-menu" aria-labelledby="opciones">
                        <a class="dropdown-item" href="../pincipal/main/perfil1.php"><span class="icon-cog"></span>Perfil</a>
                        <a class="dropdown-item" href="../pincipal/main/busqueda.php"><span class="icon-search"></span>Búsqueda</a>
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
