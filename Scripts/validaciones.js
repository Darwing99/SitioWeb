
var usuario=document.getElementById('email').value;
var contrasenia=document.getElementById('password').value;

function validar_login(){
  try {
    if(usuario.length=="" || contrasenia.length=="") {
    alert("los campos están vacios")
    return false;
  }  
  } catch (error) {
    
      
  }

}
$(document).ready(function(){
  $("#_entrar").click(function(){
    validar_login();
  });
});
// ############VALIDACIONES EN FORMULARIO DE PRODUCTOS###########

