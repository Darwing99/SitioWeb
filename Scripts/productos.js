
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
