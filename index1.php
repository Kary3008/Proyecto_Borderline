<?php
include "validarfrom.php";
if(isset($_POST['login'])){
$correo = $_POST['correo'];
$pass = $_POST['pass'];
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="container">
  <div class="info">


   <div class="form">
     <h3 class="text-center py-4">Inicio de Sesión</h3>

     <form class="login1-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
        <input type="text"  class="form-control" placeholder="Usuario" name="correo" value="<?php if (isset($correo)) echo $correo; ?>">
        <input type="password"  class="form-control" placeholder="Password" id="pass" name="pass" value="<?php if (isset($pass)) echo $pass; ?>">
           <div class="custom-control custom-switch">
               <input type="checkbox" class="custom-control-input" id="ver" onclick="verpass(this);">
               <label class="custom-control-label py-3" for="ver">Ver Password</label>
           </div>
        <button type="submit" value="boton" id="idBoton" name="login" class="btn btn-success btn-sm btn-block" >Iniciar Sesión </button>

       <div class="col py-3">
         <a href="REGISTRO/Registro.php" class="text-muted text-decoration-none">Registrate</a>
       </div>
     <?php echo $erroremail; ?><br>
     <?php echo $errorpass; ?><br>
     <?php echo $errorusuar; ?><br>
   </form>
  </div>
</div>
<script type="text/javascript">
  function verpass(cb){
      if (cb.checked)
      $('#pass').attr("type","text");
      else
      $('#pass').attr("type","password");
  }
</script>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
