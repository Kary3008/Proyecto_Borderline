<?php include 'conecta.php';
error_reporting(0);
session_start();
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
 header("location:session.php");
}
//consulta para la busqueda
$where = ""; //esperar un dato
if (!empty($_POST)) { //no puede estar vacío
  $valor = $_POST['buscar']; //en caso de no estar vacío busca la letra
  if (!empty($valor)) { //si tiene un valor
    $where = "WHERE Nombre_A LIKE '%$valor%'"; // where va a buscar cualquiera que contenga el caracter
  }
}
//consulta para extraer datos de la BD
$consulta = "SELECT * FROM alumnos $where"; //va a ser una busca siempre y cuando no esté vacío
$resultado = $conecta->query($consulta);
$numero = $resultado->num_rows;
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
    <meta name="keywords" content="Sistema Online, Perfil de Usuario, Buscar datos, Reportes de Asistencia, Recorrido Virtual, Juegos Interactivos, Guía de estudiantes, Conalep Naucalpan 1, Gestión de planteles, Carreras Técnicas">
   <!-- meta para el autor del sitio  -->
    <meta name="autor" content="Borderline">
    <!-- el de la marca --->
    <meta name="copyright" content="Borderline & Conactive">
    <meta name="robots" content="index/">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main2.css">
    <link rel="stylesheet" type="text/css" href="../css/fontello.css">
    <script src="includes/push/push.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Búsqueda de Datos | Conactive</title>
  </head>
  <body>
    <!--Inicia Navbar-->
      <?php include 'navbar_b.php' ?>
    <!--Termina navbar-->
    <!--Inicia contenido-->
    <div class="container">
      <div class="col py-4">
        <h4 class="text-center">Búsqueda</h4>
        <div class="col">
          <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="card w-100">
              <div class="card-body">
                <div class="container">
                  <div>
                    <div class="row">
                      <div class="col">
                        <input type="text" name="buscar" class="form-control" placeholder="Búsqueda por nombre"><br>
                      </div>
                      <div class="col">
                        <input type="submit" name="buscando" value="Buscar" class="btn btn-info">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="col py-3">
            <?php if($resultado->num_rows > 0) {?>
            <div class="table-responsive">
              <table class="table">
                <thead class="text-muted">
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Correo</th>
                  <th>Usuario</th>
                </thead>
                <tbody>
                  <?php while($row = $resultado->fetch_assoc()){?>
                    <tr>
                      <td><?php echo $row['Nombre_A']; ?></td>
                      <td><?php echo $row['ApellidoP_A']; ?></td>
                      <td><?php echo $row['ApellidoM_A']; ?></td>
                      <td><?php echo $row['Fecha_Nac']; ?></td>
                      <td><?php echo $row['Usuario']; ?></td>
                      <td><?php echo $row['Correo_U']; ?></td>
                    </tr>
                  <?php }?>
                </tbody>
              </table>
            <?php } else {?>
              <div class="alert alert-warning" role="alert">
                No se encontraron resultados de la búsqueda.
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--Termina contenido-->
    <!--Integrar scripts-->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
