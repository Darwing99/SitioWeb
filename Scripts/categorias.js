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