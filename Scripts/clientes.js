function validarCliente(){
var identidad=document.getElementById("_identidad").value;
var nombre=document.getElementById("_nombre").value;
var direccion=document.getElementById("_direccion").value;
var telefono=document.getElementById("_telefono").value;
var email=document.getElementById("_email").value;
if(identidad.length=="" || nombre.length=="" || direccion.length=="" 
|| telefono.length=="" || email.length==""){
    alert("Campos necesarios");
return false;
}else{
	


}
}
$(document).ready(function(){
    $("#_agregar").click(function(){
        validarCliente();
    });
    $("#eliminar_cliente").click(function(e){
    e.preventDefault();
    var cliente=$(this).attr('cliente');
    alert(cliente);
});
});

//Buscar cliente
$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: '../CRUD/crud.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#body").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}


$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
        buscar_datos(valor);
     
	}else{
		buscar_datos();
	}
});