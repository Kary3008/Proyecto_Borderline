  <!--Inicia Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to left, rgb(233, 197, 161), rgb(254, 249, 183)">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active" style="list-style: none">
                      <a class="nav-link disabled" style="color: #000"  href="#" tabindex="-1" aria-disabled="true">Bienvenid@: <?php echo $usuario; ?></a>
                    </li>
                    <!--Inicia lista despegable-->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="opciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="img/dino.png" alt="Imagen de Perfil" style="width: 30px; height:30px; border-radius:50%; ">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="opciones">
                          <a class="dropdown-item" href="main/perfil1.php"><span class="icon-cog"></span>Perfil</a>
                          <a class="dropdown-item" href="main/busqueda.php"><span class="icon-search"></span>Búsqueda</a>
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
            <a href="main/cerrar.php" class="btn btn-danger">Cerrar Sesión</a>
          </div>
        </div>
      </div>
    </div>
