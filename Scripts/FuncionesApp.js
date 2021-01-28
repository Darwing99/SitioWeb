// Initialize collapse button

// $('.collapsible').collapsible();

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
            url: '../CRUD/insertEmpresa.php',
            datatype:"html",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#update').attr("disabled","disabled");
                $('#form_empresa').css("opacity",".5");
            },
            success: function(msg){
                $('.statusMsg').html('');
                if(msg==0){
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Datos enviados satisfactoriamente.</span>');
                }else{
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Ocurrió un problema al momento de enviar.</span>');
                }
                $('#form_empresa').css("opacity",".5");
                $("#update").removeAttr("disabled");
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
            success: function(msg){
                $('.statusMsg').html('');
                if(msg==0){
                    $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Datos enviados satisfactoriamente.</span>');
                }else{
                   
                    $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Ocurrió un problema al momento de enviar.</span>');
                }
                $('#_agregar').css("opacity","");
                $("#guardar").removeAttr("disabled");
            }
        });
      
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
           if(response=='error'){
             
           }
        },
        error: function(error){
            console.log(error);
        }
      
    });
   	$('#categoria').modal('hide');
});


// animacion login
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

// sign_up_btn.addEventListener("click", () => {
//   container.classList.add("sign-up-mode");
// });

// sign_in_btn.addEventListener("click", () => {
//   container.classList.remove("sign-up-mode");
// });



// editor de texto

// USUARIOS