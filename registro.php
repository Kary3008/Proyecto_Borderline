<?php

$errorusu = $errorpassword = $erroremail = $errorexis = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){

if(!empty($_POST['usuario'])){
	$usuario = $_POST['usuario'];
}else{
	$errorusu = "*Falta agregar el usuario.";

}
if(!empty($_POST['password'])){
	$password = $_POST['password'];
}else{
	$errorpassword = "*Falta agregar password.";

}
if (!empty($_POST['email'])){
   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
   	$email = $_POST['email'];

   }else{
   	  $erroremail = "*El correo que colocaste no es correcto.";
   }
   }else{
   	  $erroremail = "*Falta el email.";
   }
 //valida que no existan campos vacios
if(!empty($usuario) && !empty($password) && !empty($email)){
    include 'conexion.php';

//verficar que los datos no exiten ya en la base
    $consul = "SELECT * FROM usuarios WHERE email = '$_POST[email]'";
    $resul = $conexion ->query ($consul);
    if(mysqli_num_rows($resul)>0){

    	$errorexis = "*Este usuario ya existe.";
    
    }else{
    	//metodo de mandar a la base de datos
    	$sql = "INSERT INTO usuarios (usuario, password, email) VALUE('$_POST[usuario]','$_POST[password]','$_POST[email]')";
    	if(mysqli_query($conexion,$sql)){

    		header("location: index1.php");
    	}else{
    		echo "Error al registrar" . $sql. "<br>" . mysqli_error($conexion);
    	} 

          mysqli_close($conexion);
    }


}
}





?>