
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

