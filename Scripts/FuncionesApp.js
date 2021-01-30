// Initialize collapse button

// $('.collapsible').collapsible();

$(document).ready(function() {
    $('.mdb-select').materialSelect();
    });
$('#ver').click(function(){
    $('#tab').toggle();
    $('#ver').val("Ocultar");

});
$(document).ready(function() {
  
    // SideNav Button Initialization
    $(".button-collapse").sideNav();
     // SideNav Scrollbar Initialization
      var sideNavScrollbar = document.querySelector('.custom-scrollbar');
      var ps = new PerfectScrollbar(sideNavScrollbar);
  });

  
// Codigo de foto
$("#subir").click(function(){
    document.getElementById("image").click();
});
function vistaprevia(input){
if(input.files && input.files[0]){
    var reader=new FileReader();
    reader.onload=function(e){
        $("#imagePreview").html("<img  style='width: 260px; heigth: auto;' src='"+e.target.result+"'/>");
    }
    reader.readAsDataURL(input.files[0]);

}
}
$("#image").change(function(){
    vistaprevia(this);
});

// AGREGAR INFORMACION DE EMPRESA

$(document).ready(function(){
    $("#form_empresa").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '../CRUD/crud.php',
            datatype:"html",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#update').attr("disabled","disabled");
                $('#form_empresa').css("opacity",".5");
            },
            success: function(response){
          
                $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Datos enviados satisfactoriamente.</span>');
              
            
         },
         error: function(error){
            $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Ocurrió un problema al momento de enviar.</span>');
         }
              
            
        }); 
    });

// INSERTAR ARTICULOS
    $("#idblog").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '../CRUD/crud.php',
            datatype:"html",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#publicar').attr("disabled","disabled");
                $('#idblog').css("opacity",".5");
            },
            success: function(msg){
                $('.statusMsg').html('');
                if(msg==0){
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Datos enviados satisfactoriamente.</span>');
                }else{
                   
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Ocurrió un problema al momento de enviar.</span>');
                }
                $('#idblog').css("opacity","");
                $("#publicar").removeAttr("disabled");
            }
        });
    });

    // INSERTAR CLIENTES
    $("#_agregar").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '../CRUD/crud.php',
            datatype:"html",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#guardar').attr("disabled","disabled");
                $('#_agregar').css("opacity",".5");
            },
          
            success: function(response){
          
                $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Datos enviados satisfactoriamente.</span>');
              
            
         },
         error: function(error){
            $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Ocurrió un problema al momento de enviar.</span>');
         }
        });  $('#_agregar').css("opacity","");
        $("#guardar").removeAttr("disabled");
      
    });
  
});

// Agregando categoria de post
$('#formcategoria').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        url: '../CRUD/crud.php',
        type: 'POST',
        async:true,
        data: $("#formcategoria").serialize(),
        success: function(response){
          
               $('#_categoria').html(data);
             
           
        },
        error: function(error){
            console.log(error);
        }
      
    });
   	$('#categoria').modal('hide');
});

// Agregando proveedores
$('#proveedores').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '../CRUD/crud.php',
        datatype:"html",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function(){
            $('#guardar').attr("disabled","disabled");
            $('#proveedores').css("opacity",".5");
        },
        success: function(msg){
            $('.statusMsg').html('');
            if(msg==0){
                $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Datos enviados satisfactoriamente.</span>');
            }else{
               
                $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Ocurrió un problema al momento de enviar.</span>');
            }
            $('#proveedores').css("opacity","");
            $("#guardar").removeAttr("disabled");
        }
    });
});

// agregando usuarios

$('#addusuario').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '../CRUD/crud.php',
        datatype:"html",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function(){
            $('#guardar').attr("disabled","disabled");
            $('#addusuario').css("opacity",".5");
        },
        success: function(msg){
            $('.statusMsg').html('');
            if(msg==0){
                $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Datos enviados satisfactoriamente.</span>');
            }else{
               
                $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Ocurrió un problema al momento de enviar.</span>');
            }
            $('#addusuario').css("opacity","");
            $("#guardar").removeAttr("disabled");
        }
    });
});
// agregando rol o categoría de usuarios
$('#categoria_usuario').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        url: '../CRUD/crud.php',
        type: 'POST',
        async:true,
        data: $("#categoria_usuario").serialize(),
        success: function(response){
          
               $('#_categoria').html(response);
             
           
        },
        error: function(error){
            console.log(error);
        }
      
    });
   	$('#modalUser').modal('hide');
});

// agregando productos
$("#productos").on('submit', function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '../CRUD/crud.php',
        datatype:"html",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function(){
            $('#guardar').attr("disabled","disabled");
            $('#productos').css("opacity",".5");
        },
        success: function(msg){
            $('.statusMsg').html('');
            if(msg==0){
                $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Datos enviados satisfactoriamente.</span>');
            }else{
               
                $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Ocurrió un problema al momento de enviar.</span>');
            }
            $('#productos').css("opacity","");
            $("#guardar").removeAttr("disabled");
        }
    });
});

// aperturando modales
$(document).ready(function(){
  
    $('#mostrar_ocultar').click(function(){
        $("#modal_productos").modal('show');
       
    });
    $('#cliente').click(function(){
        $('#modal_clientes').modal('show');
    });
    
    $('#mostrar').click(function(){
        $('#productos_catalago').slideToggle("slow");
    })
  
  
});

// animacion login
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");


// clientes para ventas
// Tabla de clientes
$(document).ready(function() {
    
    var opcion;
    opcion = 2;
    // Función para cambiar el idioma de la datatable
    var idioma=

            {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningun dato disponible en esta tabla",
                "sInfo":           "_START_ - _END_  De _TOTAL_ Registros",
                "sInfoEmpty":      "0 de 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "<i class='fas fa-fast-forward'></i>",
                    "sLast":     "<i class='fas fa-fast-backward'></i>",
                    "sNext":     "<i class='fas fa-forward'></i>",
                    "sPrevious": "<i class='fas fa-backward'></i>"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copyTitle": 'Informacion copiada',
                    "copyKeys": 'Use your keyboard or menu to select the copy command',
                    "copySuccess": {
                        "_": '%d filas copiadas al portapapeles',
                        "1": '1 fila copiada al portapapeles'
                    },

                    "pageLength": {
                    "_": "Mostrar %d filas",
                    "-1": "Mostrar Todo"
                    }
                }
            }
    
    
                
    tablaclientes = $('#clientes_ventas').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language": idioma,
        "lengthMenu": [[5,20,30, -1],[5,20,30,"Mostrar Todo"]],
        dom: 'Bfrt<"col-md-6 inline"i> <"col-md-6 inline"p>',

    //AJAX//
        "ajax":{            
            "url": "../CRUD/crud.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:opcion}, //enviamos opcion 1 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
        
            {"data": "id"},
            {"data": "identidad"},
            {"data": "cliente"},
            {"data": "direccion"},
            {"data": "telefono"},
            {"data": "email"},
          
            {"defaultContent":"<div class='text-center'><div class=''><a class='btn-floating  seleccionar'><i class='fas fa-clipboard-check '></i></a></div></div>"}
         ],
        "columnDefs": [
            {
                "targets": [ 1 ],
                "visible": true,
                "searchable": true,
                "width": "150px"
            },  {
                "targets": [ 2 ],
                "visible": true,
                "searchable": true,
                "width": "150px"
            },
        ],
        buttons: {
            dom: {
              container:{
                tag:'div',
                className:'flexcontent'
              },
              buttonLiner: {
                tag: null
              }
            },
            
            buttons: [
                    
                      
                     
                      {
                          extend:    'pageLength',
                          titleAttr: 'Registros a mostrar',
                          className: 'selectTable'
                      }
                  ]
            
            
          }
    }); 
    $(document).on("click",".seleccionar",function(){     
        fila = $(this).closest("tr");	
        id_cliente = parseInt(fila.find('td:eq(1)').text()); //capturo el ID	
        nombre = fila.find('td:eq(2)').text();
        email = fila.find('td:eq(5)').text();
        telefono = fila.find('td:eq(4)').text();
        $("#idCliente").val(id_cliente);
        $("#cliente").val(nombre);
        $("#telefono").val(telefono);
        $("#email").val(email);
       
        $('#DeleteModal').modal('show');	    
    }); 

   
}); 



// editor de texto


// tabla de destalles producto
$(document).ready(function(){
    var parametros={"action":"ajax"};
		$.ajax({
			url:'../CRUD/productos.php',
			data: parametros,
			 beforeSend: function(objeto){
			 $('.items').html('Cargando...');
		  },
			success:function(data){
				$(".items").html(data).fadeIn('slow');
		}
		});
})

// USUARIOS