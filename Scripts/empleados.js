


$(document).ready(function(){
    $("#_tipo").click(function(){
        $("#modalUser").modal('show');
      });
    $("#_agregarE").click(function(){
        validar_empleado();
    });
    // Registro de tipo de usuario
    $("#_agregarT").click(function(){
        validar_empleado();
    });

});

function validar_empleado(){
var name=document.getElementById("_name").value;
var empleado=document.getElementById("_empleado").value;
var estado=document.getElementById("_estado").value;
var tipoUser= document.getElementById("_tipoUser").value;
if(name.length==""||empleado.length=="" || estado.length=="" || tipoUser.value=="-Tipo de Usuario-"){
    alert("Los datos son necesarios");
   
    }else{

    }
}
function validar_Tipo(){
    var tipo=document.getElementById("_tipo").value;
    if(tipo.length==""){
        alert("Los datos son necesarios");
    }

}