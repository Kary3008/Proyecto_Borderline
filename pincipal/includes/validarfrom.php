<?php
$erroremail = $errorpass = $errorusuar = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if (!empty($_POST['correo'])){
   if (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)){
   	$email = $_POST['correo'];

   }else{
   	  $erroremail = "<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                                   <strong>Correo no válido.</strong> Por favor ingresa con el correo que te registraste.
                                   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                   </button>
                                 </div>";
   }
   }else{
   	  $erroremail = "<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                                   <strong>Falta ingresar el correo.</strong> Por favor ingresa con el correo que te registraste.
                                   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                   </button>
                                 </div>";
   }


if(!empty($_POST['pass'])){
	$passw = (md5($_POST['pass']));
}else{
	$errorpass = "<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                               <strong>Falta ingresar el password.</strong> Por favor ingresa con el password con el que te registraste.
                               <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                               </button>
                             </div>";
}

//verificar que los datos no estan vacios
if(!empty($email) && !empty($passw)){
//consultar los datos existentes
	include 'main/conecta.php';
    $consulta = "SELECT * FROM alumnos WHERE Correo_U = '$email' and Password ='$passw'";
    $ejecutar = mysqli_query($conecta, $consulta);
//busqueda de valor de la columna selcionada
    while ($row=$ejecutar->fetch_array()){
    	$email=$row['Correo_U'];
    }

    if(mysqli_num_rows($ejecutar)>0){
        session_start();
      $_SESSION['login'] = TRUE;
       $_SESSION['Correo_U'] = $email;
       header ("location: principal.php");
    }else{

    	$errorusuar = "<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                                   <strong>Usuario y/o Password no válidos.</strong> Si no te has registrado, registrate ahora.
                                   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                   </button>
                                 </div>";
    }
  }
}
 ?>
 <?php echo $erroremail; ?>
 <?php echo $errorpass; ?>
 <?php echo $errorusuar; ?><br>
