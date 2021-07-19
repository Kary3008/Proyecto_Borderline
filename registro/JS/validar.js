function validar() {
  var plantel, nombres, apellidop, apellidom, fechadenacimiento, grupo, matricula, correo, ingcontraseña, conficontraseña;
  plantel = document.getElementById("plantel").value;
  nombre = document.getElementById("nombres").value;
  apellidop = document.getElementById("apellidop").value;
  apellidom = document.getElementById("apellidom").value;
  fechadenacimiento = document.getElementById("fechadenacimiento").value;
  grupo = document.getElementById("grupo").value;
  matricula = document.getElementById("matricula").value;
  correo = document.getElementById("correo").value;
  ingcontraseña = document.getElementById("ingcontraseña").value;
  conficontraseña = document.getElementById("conficontraseña").value;
  expresion =/\w+@\w+\.+[a-z]/;

  if(plantel === "" || nombres === "" || apellidop === "" || apellidom === "" fechadenacimiento === "" || grupo === "" || matricula === ""
  correo === "" || ingcontraseña === "" || conficontraseña === ""){
    alert("Todos los campos deben de ser llenados.");
    return false;
  }
  else if(plantel.length>40) {
    alert("El campo plantel es muy largo.");
    return false;
  }
  else if(nombres.length>40) {
    alert("El campo Nombre es muy largo.");
    return false;
  }
  else if(apellidop.length>50 || apellidom.length>50) {
    alert("Los campos de apellidos son muy largos.");
    return false;
  }
  else if(fechadenacimiento.length>10) {
    alert("El campo fecha de nacimiento es muy larga.");
    return false;
  }
  else if(grupo.length>3) {
    alert("El campo grupo tiene muchos caracteres.");
    return false;
  }
  else if(matricula.length>30) {
    alert("El campo matricula es demasiado largo.");
    return false;
  }
  else if(correo.length>100) {
    alert("El campo correo es demasiado largo.");
    return false;
  }
  else if(ingcontraseña.length>40 || conficontraseña.length>40) {
    alert("La contraseña es demasiado larga.");
    return false;
  }
  else if(isNaN(matricula)) {
    alert("La matricula no es un número.");
    return false;
  }
  else if(isNaN(grupo)) {
    alert("El grupo no es un numero.");
    return false;
  }
  else if(nombres.length>40) {
    alert("El campo Nombre es demasioado largo.");
    return false;
  }
  else if (!expresion.test(correo)) {
    alert("El correo no es valido");
    return false;
  }
}

if (formulario.ingcontraseña.value != formulario.conficontraseña.value) {
  document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Las Contraseñas ingresadas no coinciden. </div>';
    formulario.ingcontraseña.value = "";
    formulario.conficontraseña.value = "";
    formulario.ingcontraseña.focus();
    return false;
  } else {
    document.getElementById("alert"). innerHTML = "";
  }

}
