
// Forgot Password
function modal(){      
    $("#olvidado").click(function(){
      $("#forgot").modal('show');
  });
}


//Mostrar tablas
$(document).ready(function(){
    $('#ver').click(function(){
          $('#tab').toggle();
          $('#ver').val("mostrar");
      
    });
});

// desplegar con hover

// $('#dmenu').hover(function(){
//   $('#navbarDropdown').trigger('click') 
//   document.getElementById('dmenu').style.setProperty("Border-width","0");
//   document.getElementById('navbarDropdown').style.setProperty("Border-width","0");
// })


// validando datos de contactos
$(document).ready(function(){

  $('#contacto').click(function(){
    var nombre=document.getElementById('nombre').value;
    var telefono=document.getElementById('telefono').value;
    var email=document.getElementById('email').value;
    var mensaje=document.getElementById('mensaje').value;
    if(nombre==""){
        document.getElementById('nombre').style.setProperty("border","0px");
        document.getElementById('alerta').style.setProperty("display","0px");  
        return false; 
        
       
    }if(email==""){
      document.getElementById('email').style.setProperty("border-color","red"); 
      document.getElementById('alerta').style.setProperty("display","block"); 
      return false;
       
    }
    if(telefono==""){
      document.getElementById('telefono').style.setProperty("border-color","red"); 
      document.getElementById('alerta').style.setProperty("display","block");
      return false;  
       
    }
    if(mensaje==""){
      document.getElementById('mensaje').style.setProperty("border-color","red");   
      document.getElementById('alerta').style.setProperty("display","block"); 
      $('#alerta')
      return false; 
    
    }else{
      $('#modal_email').modal('show');
    }
});
});
