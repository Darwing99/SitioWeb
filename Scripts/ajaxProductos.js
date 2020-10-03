$(document).ready(function(){
	$('#_agregarInsumo').click(function(){
		var datos=$('#insumos').serialize();
		$.ajax({
			type:"POST",url:"../CRUD/InsertInsumo.php",data:datos,asinc:true,
			
			success:function(r){
				if(r==1){
					alertify("agregado con exito");
				}else{
				alertify("error");
				}
			}
		});
		return false;
	});
});