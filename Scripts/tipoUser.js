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