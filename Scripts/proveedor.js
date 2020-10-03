function validarProveedor(){
    var identidad=document.getElementById("_identidad").value;
    var rtn=document.getElementById("_rtn").value;
    var nombre=document.getElementById("_nombre").value;
    var razon=document.getElementById("_razon").value;
    var direccion=document.getElementById("_direccion").value;
    var telefono=document.getElementById("_telefono").value;
    var celular=document.getElementById("_celular").value;
    var email=document.getElementById("_email").value;

    if(identidad.length=="" || rtn.lentgh=="" || nombre.length=="" ||
        razon.length=="" || direccion.length=="" || telefono.length=="" ||
        celular.length=="" || email.length==""){
            alert("Campos necesarios");
    }else{
        
    }
}
//
$(document).ready(function(){
    $("#_agregar").click(function(){
        validarProveedor();
    });
});