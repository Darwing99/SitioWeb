


// USUARIOS
$(document).ready(function() {
    
    var opcion;
    opcion = 1;
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
    
    
                
    tablaUsuarios = $('#usuarios').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language": idioma,
        "lengthMenu": [[2,20,30, -1],[2,20,30,"Mostrar Todo"]],
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
            {"data": "nombre"},
            {"data": "usuario"},
            {"data": "estado"},
            {"data": "tipo"},
          
            {"defaultContent": "<div class='text-center'><div class=''> <button type='button' class='btn btn-floating btn-elegant px-0 btnHabilitar' data-toggle='modal' ><i class='fas fa-unlock'></i></button></div></div>"}
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
                          extend:    'copyHtml5',
                          text:      '<i class="fa fa-clipboard fa-2x"></i>',
                          title:'Registro de empleados',
                          titleAttr: 'Copiar',
                          
                          className: 'botones botones-app export barras',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4 ]
                          }
                      },
                      
                      {
                          extend:    'pdfHtml5',
                          text:      '<i class="fa fa-file-pdf fa-2x"></i>',
                          title:'Registro de empleados',
                          titleAttr: 'PDF',
                          className: 'botones botones-app export pdf',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4]
                          },
                          customize:function(doc) {
                              doc.styles.title = {
                                  color: '#4c8aa0',
                                  fontSize: '20',
                                  alignment: 'center'
                              }
                              doc.styles['td:nth-child(2)'] = { 
                                  width: '100px',
                                  'max-width': '100px'
                              },
                              doc.styles.tableHeader = {
                                  fillColor:'#4c8aa0',
                                  color:'white',
                                  alignment:'center'
                              },
                              doc.content[1].margin = [ 20, 20, 20, 20 ]
  
                          }
  
                      },
  
                      {
                          extend:    'excelHtml5',
                          text:      '<i class="fa fa-file-excel fa-2x"></i>',
                          title:'Registro de empleados',
                          titleAttr: 'Excel',
                          className: 'botones botones-app export excel',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4]
                          },
                      },
                    
                    
                      {
                          extend:    'csvHtml5',
                          text:      '<i class="fa fa-file-csv fa-2x"></i>',
                          title:'Registro de empleados',
                          titleAttr: 'CSV',
                          className: 'botones botones-app export csv',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4]
                          }
                      },
                      {
                          extend:    'print',
                          text:      '<i class="fa fa-print fa-2x"></i>',
                          title:'Registro de empleados',
                          titleAttr: 'Imprimir',
                          className: 'botones botones-app export imprimir',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4]
                          }
                      },
                      {
                          extend:    'pageLength',
                          titleAttr: 'Registros a mostrar',
                          className: 'selectTable'
                      }
                  ]
            
            
          }
    }); 
    $(document).on("click",".btnHabilitar",function(){
        opcion = 2; //guardaar           
        id_usuario=null;
        fila = $(this).closest("tr");	
        id_usuario = parseInt(fila.find('td:eq(0)').text()); //capturo el ID
        nombre = fila.find('td:eq(1)').text();		
        usuario = fila.find('td:eq(2)').text();
        estado = fila.find('td:eq(3)').text();
        tipo = fila.find('td:eq(4)').text();
        if(estado=="Activo"){
                document.getElementById("estado").selectedIndex=1;
        }else{
            document.getElementById("estado").selectedIndex=0;
        }

        $("#id_usuario").val(id_usuario);
        $("#nombre").val(nombre);
        $("#usuario").val(usuario);
        $("#tipo_usuario").val(tipo);
       
        $('#modalUsuarios').modal('show');	    
    });  
    // Habilitando y deshabilitando usuarios
    $(".agregar").click(function(e){
        e.preventDefault();
       opcion = 5; //actualizar estado de post      
      
       var id_usuario=document.getElementById("id_usuario").value;
       var estado =  document.getElementById("estado").value;
      
       $.ajax({
           type: 'POST',
           url: '../CRUD/crud.php',
           datatype:'json',
           data: {id_usuario:id_usuario,
               estado:estado,
               opcion:opcion},
               success: function(r) {
                   if (r) {
                    tablaUsuarios.ajax.reload(null, true);
                   }else{
                    
                   }
                                     
                }
       });
       $('#modalUsuarios').modal('hide');	    
   });   
}); 

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
    
    
                
    tablaclientes = $('#clientes').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language": idioma,
        "lengthMenu": [[2,20,30, -1],[2,20,30,"Mostrar Todo"]],
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
          
            {"defaultContent":"<div class='text-center'><div class=''><a type='button' class='btn btn-floating btn-warning Editar'><i class='fas fa-edit'></i></a><a class='btn-floating btn-danger Delete'><i class='fas fa-trash '></i></a></div></div>"}
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
                          extend:    'copyHtml5',
                          text:      '<i class="fa fa-clipboard fa-2x"></i>',
                          title:'Registro de clientes',
                          titleAttr: 'Copiar',
                          
                          className: 'botones botones-app export barras',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4,5 ]
                          }
                      },
                      
                      {
                          extend:    'pdfHtml5',
                          text:      '<i class="fa fa-file-pdf fa-2x"></i>',
                          title:'Registro de clientes',
                          titleAttr: 'PDF',
                          className: 'botones botones-app export pdf',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4,5]
                          },
                          customize:function(doc) {
                              doc.styles.title = {
                                  color: '#4c8aa0',
                                  fontSize: '20',
                                  alignment: 'center'
                              }
                              doc.styles['td:nth-child(2)'] = { 
                                  width: '100px',
                                  'max-width': '100px'
                              },
                              doc.styles.tableHeader = {
                                  fillColor:'#4c8aa0',
                                  color:'white',
                                  alignment:'center'
                              },
                              doc.content[1].margin = [ 20, 20, 20, 20 ]
  
                          }
  
                      },
  
                      {
                          extend:    'excelHtml5',
                          text:      '<i class="fa fa-file-excel fa-2x"></i>',
                          title:'Registro de clientes',
                          titleAttr: 'Excel',
                          className: 'botones botones-app export excel',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4,5]
                          },
                      },
                    
                    
                      {
                          extend:    'csvHtml5',
                          text:      '<i class="fa fa-file-csv fa-2x"></i>',
                          title:'Registro de clientes',
                          titleAttr: 'CSV',
                          className: 'botones botones-app export csv',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4,5]
                          }
                      },
                      {
                          extend:    'print',
                          text:      '<i class="fa fa-print fa-2x"></i>',
                          title:'Registro de clientes',
                          titleAttr: 'Imprimir',
                          className: 'botones botones-app export imprimir',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4,5]
                          }
                      },
                      {
                          extend:    'pageLength',
                          titleAttr: 'Registros a mostrar',
                          className: 'selectTable'
                      }
                  ]
            
            
          }
    }); 
    $(document).on("click",".Delete",function(){     
        fila = $(this).closest("tr");	
        id_cliente = parseInt(fila.find('td:eq(0)').text()); //capturo el ID	
        nombre = fila.find('td:eq(2)').text();
       
        $("#idCliente").val(id_cliente);
        $("#nombre").val(nombre);
       
        $('#DeleteModal').modal('show');	    
    }); 
    $(".borrar_cliente").click(function(e){
        e.preventDefault();
       opcion = 6; //borrar cliente   
       var id_cliente=document.getElementById("idCliente").value;
       
       $.ajax({
           type: 'POST',
           url: '../CRUD/crud.php',
           datatype:'json',
           data: {id_cliente:id_cliente,
                   opcion:opcion},
               success: function(r) {
                   if (r) {
                    tablaclientes.ajax.reload(null, true);
                   }else{
                       console.log("Hola");
                    
                   }
                                     
                }
       });
       $('#DeleteModal').modal('hide');	    
   });  
}); 

//proveedores
$(document).ready(function() {
    
    var opcion;
    opcion = 10;
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
    
    
                
    tablaproveedores = $('#proveedores').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language": idioma,
        "lengthMenu": [[2,20,30, -1],[2,20,30,"Mostrar Todo"]],
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
            {"data": "rtn"},
            {"data": "proveedor"},
            {"data": "razon_social"},
            {"data": "direccion"},
            {"data": "telefono"},
            {"data": "email"},
            {"data": "celular"},
          
            {"defaultContent":"<div class='text-center'><div class=''><a type='button' class='btn btn-floating btn-warning Editar'><i class='fas fa-edit'></i></a><a class='btn-floating btn-danger Delete'><i class='fas fa-trash '></i></a></div></div>"}
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
                          extend:    'copyHtml5',
                          text:      '<i class="fa fa-clipboard fa-2x"></i>',
                          title:'Registro de Proveedores',
                          titleAttr: 'Copiar',
                          
                          className: 'botones botones-app export barras',
                          exportOptions: {
                              columns: [ 0, 1, 2,3,4,5,6,7,8]
                          }
                      },
                      
                      {
                          extend:    'pdfHtml5',
                          text:      '<i class="fa fa-file-pdf fa-2x"></i>',
                          title:'Registro de Proveedores',
                          titleAttr: 'PDF',
                          className: 'botones botones-app export pdf',
                          exportOptions: {
                            columns: [ 0, 1, 2,3,4,5,6,7,8]
                          },
                          customize:function(doc) {
                              doc.styles.title = {
                                  color: '#4c8aa0',
                                  fontSize: '20',
                                  alignment: 'center'
                              }
                              doc.styles['td:nth-child(2)'] = { 
                                  width: '100px',
                                  'max-width': '100px'
                              },
                              doc.styles.tableHeader = {
                                  fillColor:'#4c8aa0',
                                  color:'white',
                                  alignment:'center'
                              },
                              doc.content[1].margin = [ 20, 20, 20, 20 ]
  
                          }
  
                      },
  
                      {
                          extend:    'excelHtml5',
                          text:      '<i class="fa fa-file-excel fa-2x"></i>',
                          title:'Registro de Porveedores',
                          titleAttr: 'Excel',
                          className: 'botones botones-app export excel',
                          exportOptions: {
                            columns: [ 0, 1, 2,3,4,5,6,7,8]
                          },
                      },
                    
                    
                      {
                          extend:    'csvHtml5',
                          text:      '<i class="fa fa-file-csv fa-2x"></i>',
                          title:'Registro de Proveedores',
                          titleAttr: 'CSV',
                          className: 'botones botones-app export csv',
                          exportOptions: {
                            columns: [ 0, 1, 2,3,4,5,6,7,8]
                          }
                      },
                      {
                          extend:    'print',
                          text:      '<i class="fa fa-print fa-2x"></i>',
                          title:'Registro de Proveedores',
                          titleAttr: 'Imprimir',
                          className: 'botones botones-app export imprimir',
                          exportOptions: {
                            columns: [ 0, 1, 2,3,4,5,6,7,8]
                          }
                      },
                      {
                          extend:    'pageLength',
                          titleAttr: 'Registros a mostrar',
                          className: 'selectTable'
                      }
                  ]
            
            
          }
    }); 
    $(document).on("click",".Delete",function(){     
        fila = $(this).closest("tr");	
        id_proveedor = parseInt(fila.find('td:eq(0)').text()); //capturo el ID	
        nombre = fila.find('td:eq(3)').text();
       
        $("#idProveedor").val(id_proveedor);
        $("#nombre").val(nombre);
       
        $('#DeleteModal').modal('show');	    
    }); 
    $(".borrarproveedor").click(function(e){
        e.preventDefault();
       opcion = 6; //borrar cliente   
       var id_proveedor=document.getElementById("idProveedor").value;
       
       $.ajax({
           type: 'POST',
           url: '../CRUD/crud.php',
           datatype:'json',
           data: {id_proveedor:id_proveedor,
                   opcion:opcion},
               success: function(r) {
                   if (r) {
                    tablaproveedores.ajax.reload(null, true);
                   }else{
                       console.log(data);
                    
                   }
                                     
                }
       });
       $('#DeleteModal').modal('hide');	    
   });  
}); 


// POSTs
$(document).ready(function() {
    
    var opcion;
    opcion = 3;
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
    
    
                
    tablapost = $('#articulos').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language": idioma,
        "lengthMenu": [[2,20,30, -1],[2,20,30,"Mostrar Todo"]],
        dom: 'Bfrt<"col-md-6 inline"i> <"col-md-6 inline"p>',

    //AJAX//
        "ajax":{            
            "url": "../CRUD/crud.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:opcion}, //enviamos opcion 1 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
        
            {"data": "id_post"},
            {"data": "titulo"},
            {"data": "created_at"},
            {"data": "estado_post"},
            {"data": "creador"},
            {"defaultContent": "<div class='text-center'><div class=''> <button type='button' class='btn btn-primary px-3 update' data-toggle='modal' ><i class='fas fa-unlock'></i></button></div></div>"}
         
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
                          extend:    'copyHtml5',
                          text:      '<i class="fa fa-clipboard fa-2x"></i>',
                          title:'Registro de post',
                          titleAttr: 'Copiar',
                          
                          className: 'botones botones-app export barras',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4 ]
                          }
                      },
                      
                      {
                          extend:    'pdfHtml5',
                          text:      '<i class="fa fa-file-pdf fa-2x"></i>',
                          title:'Registro de artículos',
                          titleAttr: 'PDF',
                          className: 'botones botones-app export pdf',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4]
                          },
                          customize:function(doc) {
                              doc.styles.title = {
                                  color: '#4c8aa0',
                                  fontSize: '20',
                                  alignment: 'center'
                              }
                              doc.styles['td:nth-child(2)'] = { 
                                  width: '100px',
                                  'max-width': '100px'
                              },
                              doc.styles.tableHeader = {
                                  fillColor:'#4c8aa0',
                                  color:'white',
                                  alignment:'center'
                              },
                              doc.content[1].margin = [ 20, 20, 20, 20 ]
  
                          }
  
                      },
  
                      {
                          extend:    'excelHtml5',
                          text:      '<i class="fa fa-file-excel fa-2x"></i>',
                          title:'Registro de clientes',
                          titleAttr: 'Excel',
                          className: 'botones botones-app export excel',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4]
                          },
                      },
                    
                    
                      {
                          extend:    'csvHtml5',
                          text:      '<i class="fa fa-file-csv fa-2x"></i>',
                          title:'Registro de clientes',
                          titleAttr: 'CSV',
                          className: 'botones botones-app export csv',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4]
                          }
                      },
                      {
                          extend:    'print',
                          text:      '<i class="fa fa-print fa-2x"></i>',
                          title:'Registro de clientes',
                          titleAttr: 'Imprimir',
                          className: 'botones botones-app export imprimir',
                          exportOptions: {
                              columns: [ 0, 1, 2, 4,5]
                          }
                      },
                      {
                          extend:    'pageLength',
                          titleAttr: 'Registros a mostrar',
                          className: 'selectTable'
                      }
                  ]
            
            
          }
    }); 
    
    $(document).on("click",".update",function(){     
        fila = $(this).closest("tr");	
        id_post = parseInt(fila.find('td:eq(0)').text()); //capturo el ID	
        estado = fila.find('td:eq(4)').text();
        if(estado=="Activo")
        {
            document.getElementById("estado").selectedIndex=1;

        }else{
            document.getElementById("estado").selectedIndex=0;
        }
        $("#id_post").val(id_post);
       
        $('#modalpost').modal('show');	    
    });  

//   Cambiar estado de post
    $(".cambiar").click(function(e){
         e.preventDefault();
        opcion = 4; //actualizar estado de post      
       
        var id_post=document.getElementById("id_post").value;
        var estado =  document.getElementById("estado").value;
       
        $.ajax({
            type: 'POST',
            url: '../CRUD/crud.php',
            datatype:'json',
            data: {id_post:id_post,
                estado:estado,
                opcion:opcion},
                success: function(r) {
                    if (r) {
                      tablapost.ajax.reload(null, true);
                    }else{
                     
                    }
                                      
                 }
        });
        $('#modalpost').modal('hide');	    
    });  
}); 


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


//  Productos


$(document).ready(function() {
    
    var opcion;
    opcion = 7;
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
    
    
                
    tablaProductos = $('#table_productos').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language": idioma,
        "lengthMenu": [[2,20,30, -1],[2,20,30,"Mostrar Todo"]],
        dom: 'Bfrt<"col-md-6 inline"i> <"col-md-6 inline"p>',

    //AJAX//
        "ajax":{            
            "url": "../CRUD/crud.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:opcion}, //enviamos opcion 1 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
        
            {"data": "Idproducto"},
            {"data": "descripcion"},
            {"data": "precio"},
            {"data": "descuento"},
            {"data": "impuesto"},
            {"data": "existencia"},
            {"data": "foto"},
          
            {"defaultContent": "<div class='text-center'><div class=''> <button type='button' class='btn btn-floating btn-elegant px-0 btnHabilitar' data-toggle='modal' ><i class='fas fa-unlock'></i></button></div></div>"}
         ],
        "columnDefs": [
             {
                "targets": [ 0 ],
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
                          extend:    'copyHtml5',
                          text:      '<i class="fa fa-clipboard fa-2x"></i>',
                          title:'Registro de Productos',
                          titleAttr: 'Copiar',
                          
                          className: 'botones botones-app export barras',
                          exportOptions: {
                              columns: [ 0, 1, 2, 3, 4,5 ]
                          }
                      },
                      
                      {
                          extend:    'pdfHtml5',
                          text:      '<i class="fa fa-file-pdf fa-2x"></i>',
                          title:'Registro de Productos',
                          titleAttr: 'PDF',
                          className: 'botones botones-app export pdf',
                          exportOptions: {
                            columns: [ 0, 1, 2, 3, 4,5 ]
                          },
                          customize:function(doc) {
                              doc.styles.title = {
                                  color: '#4c8aa0',
                                  fontSize: '20',
                                  alignment: 'center'
                              }
                              doc.styles['td:nth-child(2)'] = { 
                                  width: '100px',
                                  'max-width': '100px'
                              },
                              doc.styles.tableHeader = {
                                  fillColor:'#4c8aa0',
                                  color:'white',
                                  alignment:'center'
                              },
                              doc.content[1].margin = [ 20, 20, 20, 20 ]
  
                          }
  
                      },
  
                      {
                          extend:    'excelHtml5',
                          text:      '<i class="fa fa-file-excel fa-2x"></i>',
                          title:'Registro de Productos',
                          titleAttr: 'Excel',
                          className: 'botones botones-app export excel',
                          exportOptions: {
                            columns: [ 0, 1, 2, 3, 4,5 ]
                          },
                      },
                    
                    
                      {
                          extend:    'csvHtml5',
                          text:      '<i class="fa fa-file-csv fa-2x"></i>',
                          title:'Registro de Productos',
                          titleAttr: 'CSV',
                          className: 'botones botones-app export csv',
                          exportOptions: {
                            columns: [ 0, 1, 2, 3, 4,5 ]
                          }
                      },
                      {
                          extend:    'print',
                          text:      '<i class="fa fa-print fa-2x"></i>',
                          title:'Registro de Productos',
                          titleAttr: 'Imprimir',
                          className: 'botones botones-app export imprimir',
                          exportOptions: {
                            columns: [ 0, 1, 2, 3, 4,5 ]
                          }
                      },
                      {
                          extend:    'pageLength',
                          titleAttr: 'Registros a mostrar',
                          className: 'selectTable'
                      }
                  ]
            
            
          }
    }); 
    $(document).on("click",".btnHabilitar",function(){
        opcion = 2; //guardaar           
        id_usuario=null;
        fila = $(this).closest("tr");	
        id_usuario = parseInt(fila.find('td:eq(0)').text()); //capturo el ID
        nombre = fila.find('td:eq(1)').text();		
        usuario = fila.find('td:eq(2)').text();
        estado = fila.find('td:eq(3)').text();
        tipo = fila.find('td:eq(4)').text();
        if(estado=="Activo"){
                document.getElementById("estado").selectedIndex=1;
        }else{
            document.getElementById("estado").selectedIndex=0;
        }

        $("#id_usuario").val(id_usuario);
        $("#nombre").val(nombre);
        $("#usuario").val(usuario);
        $("#tipo_usuario").val(tipo);
       
        $('#modalUsuarios').modal('show');	    
    });  
    // Habilitando y deshabilitando usuarios
    $(".agregar").click(function(e){
        e.preventDefault();
       opcion = 5; //actualizar estado de post      
      
       var id_usuario=document.getElementById("id_usuario").value;
       var estado =  document.getElementById("estado").value;
      
       $.ajax({
           type: 'POST',
           url: '../CRUD/crud.php',
           datatype:'json',
           data: {id_usuario:id_usuario,
               estado:estado,
               opcion:opcion},
               success: function(r) {
                   if (r) {
                    tablaProductos.ajax.reload(null, true);
                   }else{
                    
                   }
                                     
                }
       });
       $('#modalUsuarios').modal('hide');	    
   });   
}); 
 