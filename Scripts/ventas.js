function validarVenta(){
    var fecha=document.getElementById("_fecha").value;
    var cliente=document.getElementById("_cliente").value;
    var codigo=document.getElementById("_codigo").value;
    var precio=document.getElementById("_precio").value;
    var cantidad=parseInt(document.getElementById("_cantidad").value);
    var isv=parseFloat(document.getElementById("_isv").value);
    var descuento=parseFloat(document.getElementById("_descuento").value);
    if(fecha.length=="" || cliente.length=="" || codigo.length==""  || 
    precio.length=="" || cantidad.length=="" || isv.length=="" || descuento.length==""){
        alert("Los campos son necesarios");
        return false;
    }else{
        try {
            var subtotal=Math.round((cantidad*precio),4);
            var total=Math.round(subtotal*(1+isv/100-descuento/100),4);
            document.getElementById("_subtotal").value=subtotal;
            document.getElementById("_total").value=total;
            // Agregar datos a una tabla

            var fila='<tr id="fila"+cont+><td>'+codigo+'</td><td>'+precio+
            '</td><td>'+cantidad+'</td><td>'+isv+'</td><td>'+descuento+'</td><td>'+subtotal+
            '</td><td>'+total+'</td><td><button class="btn btn-primary px-3" type="button" id="btn_remove"><i class="fas fa-trash-alt"></i></button><button class="btn btn-primary px-3" type="button" id="btn_remove" ><i class="far fa-edit"></i></button></td></tr>';
            $('#tabla').append(fila);
            suma_columnas();

        } catch (error) {
            alert("Error:"+error);
        }
       
    }
}
$(document).ready(function(){
$("#_agregarC").click(function(){
    validarVenta();
    var datosV=$('#ventas').serialize(); 
    $.ajax({
        type: "POST",
        url: "../CRUD/insertVenta.php",
        data: datosV,
        asinc: false,
        success: function(r) {
        }
     });  
});
// modal emrgente para clientes
$("#_cliente").click(function(){
    $("#centralModal").modal('show');
  });
//   Modal Emergente para Productos
  $("#_codigo").click(function(){
    $("#centralModalSm").modal('show');
  });

});
$('body').on('click', '#btn_remove', function() {
    var opcion = confirm("Eliminar Registro");
    if (opcion == true) {
        $(this).parents('tr').remove(); 
        suma_columnas();
	}
 });
//popup
 function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
  }
//suma de columnas
function suma_columnas(){
  var total_isv=0;
  var total_descuento=0;  
  var total_subtotal = 0;
  var total_total = 0;
  //Recorro todos los tr ubicados en el tbody
  $('#tabla tbody').find('tr').each(function (i, el) {
        total_isv+= parseFloat($(this).find('td').eq(3).text());
        total_descuento+= parseFloat($(this).find('td').eq(4).text());        
        total_subtotal+= parseFloat($(this).find('td').eq(5).text());
        total_total+= parseFloat($(this).find('td').eq(6).text());    
    });
    document.getElementById("_descuento2").value=total_descuento;
    document.getElementById("_ISV2").value=total_isv;
    document.getElementById("_subtotal2").value=total_subtotal;
    document.getElementById("_total2").value=total_total;

 

}
$(document).ready(function(){
  $("#guardar").click(function(){
 
   var datosF=$('#ventas').serialize();    
  $.ajax({
      type: "POST",
      url: "../CRUD/insertfactura.php",
      data: datosF,
      asinc: false,
      success: function(r) {
        alert("Venta agregada");     
      }
   });    
  
  });
  
   });