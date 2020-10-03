function validacion(){
    var fecha=document.getElementById("_fecha").value;
    var proveedor=document.getElementById("_proveedor").value;
    var descripcion=document.getElementById("_insumo").value;
    var precio=parseFloat(document.getElementById("_precio").value);
    var cantidad=document.getElementById("_cantidad").value;
    var isv=parseFloat(document.getElementById("_isv").value);
    var descuento=parseFloat(document.getElementById("_descuento").value);
    var categoria=document.getElementById("_categoria").value;
    
    if(fecha.length=="" || proveedor.length==""  || descripcion.length=="" 
        || precio.length=="" || cantidad.length==""|| categoria.length==""){
            alert("todos los campos son necesarios");
    }else{
        try {
            var subtotal=Math.round(cantidad*precio,4); 
            document.getElementById("_subtotal").value=subtotal;
            var total=Math.round(subtotal*(1+isv/100-descuento/100),4);
            document.getElementById("_total").value=total;

            // Agregar datos a una tabla
            var codigo=0;
            var fila='<tr id="fila"+cont+><td>'+(codigo+=1)+'</td><td>'+descripcion+'</td><td>'+precio+
            '</td><td>'+cantidad+'</td><td>'+isv+'</td><td>'+descuento+'</td><td>'+categoria+'</td><td>'+subtotal+'</td><td>'+total+
            '</td><td><button type="button" id="btn_update" class="btn btn-primary px-3"><i class="far fa-edit"></i></button><button type="button" id="btn_remove" class="btn btn-primary px-3"><i class="fas fa-trash-alt"></i></button></td></tr>';
            $('#tabla').append(fila);

            suma_columnas();
        } catch (error) {
            alert(error);            
        }
    }
}

$(document).ready(function(){
    $("#_agregar").click(function(){
        validacion();
        var datos=$('#insertar').serialize(); 
        $.ajax({
            type: "POST",
            url: "../CRUD/insertCompra.php",
            data: datos,
            asinc: false,
            success: function(r){
            }
         });  

    });
    
    $("#_proveedor").click(function(){
        $("#centralModal").modal('show');
      });

});
// JQUERY PERMITE BORRAR FILAS DE LA TABLA
$('body').on('click', '#btn_remove', function() {
    var opcion = confirm("Eliminar Registro");
    if (opcion == true){
        $(this).parents('tr').remove(); 
        suma_columnas();
	}
 });
 function suma_columnas(){
    var total_isv=0;
    var total_descuento=0;  
    var total_subtotal = 0;
    var total_total = 0;
    //Recorro todos los tr ubicados en el tbody
    $('#tabla tbody').find('tr').each(function (i, el) {
          total_isv+= parseFloat($(this).find('td').eq(4).text());
          total_descuento+= parseFloat($(this).find('td').eq(5).text());        
          total_subtotal+= parseFloat($(this).find('td').eq(7).text());
          total_total+= parseFloat($(this).find('td').eq(8).text());    
      });
      document.getElementById("_descuento2").value=total_descuento;
      document.getElementById("_ISV2").value=total_isv;
      document.getElementById("_subtotal2").value=total_subtotal;
      document.getElementById("_total2").value=total_total;
  

  } 

//   ajax para mandar datos Mysql desde una tabla
$(document).ready(function(){
    $("#_guardar").click(function(){
   
     var datos=$('#insertar').serialize();    
    $.ajax({
        type: "POST",
        url: "../CRUD/insertRecibo.php",
        data: datos,
        asinc: false,
        success: function(r) {
          alert("Compra agregada");
        }
     });    
    
    });
    
     });
 
 