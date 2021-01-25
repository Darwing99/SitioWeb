
var usuario=document.getElementById('email');
var contrasenia=document.getElementById('password');

function validar_login(){
  try {
    if(usuario.value=="" || contrasenia.value=="") {
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


function validarCategoria(){
 
  var categoria=document.getElementById("categoria").value;
  if( categoria.length==""){
      alert("Los campos están vacios");
      return false;
  }else{

  }

}
$(document).ready(function(){
 $("#_agregar").click(function(){
     validarCategoria();
 }); 

  
});




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

function validartipoUser(){
  var id=document.getElementById("numero").value;
  var tipoUser=document.getElementById("_tipoUser").value;
  if(id.length=="" || tipoUser.length==""){
      alert("Los campos están vacios");
      return false;
  }else{

  }

}
$(document).ready(function(){
 $("#_agregarUser").click(function(){
     validarCategoria();
 }); 

  
});


function validarProductos(){
   
  codigo=document.getElementById("_codigo").value;
  descripcion=document.getElementById("_descripcion").value;
  precio=document.getElementById("_precio").value;
  cantidad=document.getElementById("_cantidad").value;
  insumo=document.getElementById("_insumo").value;
  cantidadInsumo=document.getElementById("_cantidadinsumo").value;
  if(codigo.length=="" ||descripcion.length=="" || precio.length=="" || 
  cantidad.length=="" || insumo.length==""|| cantidadInsumo.length==""){
    alert("Campos vacíos");
    return false;
  }else{

  }
}
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
  

  