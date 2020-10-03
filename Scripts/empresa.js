function validarEmpresa(){
    var rtn=document.getElementById("_rtn").value;
    var empresa=document.getElementById("_empresa").value;
    var direccion=document.getElementById("_direccion").value;
    var telefono=document.getElementById("_telefono").value;
    var correo=document.getElementById("_correo").value;
    if(rtn.length=="" || empresa.lentgh=="" || direccion.length==""||
    telefono.length=="" || correo.length==""){
        alert("Los campos son necesarios");
    }

} 
$(document).ready(function(){
    $("#_agregar").click(function(){
        validarEmpresa();
    });
});