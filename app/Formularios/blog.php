<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script type="text/javascript" src="../datatables/Datatables/jQuery/jquery-3.3.1.min.js"></script>	
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
 
	 <link rel="stylesheet" href="../../Styles/form.css">   
    
  

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
    
   

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 
    
    
</head>
<body>
<header>
<?php
  include('../mint/header.php');
  
?>

</header>
<br>
<div  class="pt-5 margenes card-deck">


    <div class="col-md-12">
       <div  class="px-20 mx-auto col-md-12 mb-4">
        <br>
        <div class="modal-header text-rigth  white darken-2">
                <h4 class="modal-title black-text w-90 font-weight-bold py-0">New Post</h4>
                <a type="button" href="post" class="btn btn-elegant"><i class="fas fa-eye pr-2"></i>Post Publicados</a>
            </div>
            <br>
            
            <form class="centrar_form" method="POST" id="idblog" enctype="multipart/form-data">
            <p class="statusMsg"></p>
            <div class="form-row">
                <div class="form-group col-md-4 px-4">
                <label for="inputEmail4">Título de Post</label>
                <input type="text" class="form-control" name="titulo" id="_titulo" required>
                </div>
                <div class="form-group col-md-5 px-4">
                <label for="inputEmail4">Pequeña descripción</label>
                <textarea type="text" class="descripcion form-control" name="subtitulo" id="_subtitulo" cols="30" rows="1" required></textarea>
                </div>
                <div class="form-group col-md-2 px-3">
                <label for="inputZip">Categoría</label>
                <select class="custom-select browser-default" name="categoria" required>
                    <option selected disabled value="">Categoría de post</option>
                    <?php 
                   
                    $sql="SELECT*FROM rcategoria_post";
                    $consulta=mysqli_query($conn,$sql);
                    while($datos=mysqli_fetch_array($consulta)){
                        $i=0;
                    ?>
                    <option value="<?php echo $datos[0];?>"><?php echo $datos[1];?></option>
                    <?php } $i++;?>
                </select>
                </div>
                <div class="form-group col-md-1 px-1 pt-3">
                <button type="button" id="addcategoria" data-toggle="modal" data-target="#categoria" class="btn btn-elegant"><i class="far fa-plus-square"></i></button>
                </div>
         
            </div>
            <div class="form-row">
                
                <div class="form-group  col-md-9 px-4">
                <label for="descripcion">Descripción</label>
                <textarea class="descripcion  form-control" name="descripcion" id="descripcion"  required></textarea>
                </div>
                
                <div class="pt-4 form-group col-md-3 px-1">
                <div class="card" style="width: auto;">
					<div  id="imagePreview"  class="col-md-12 imagePreview card-img-top"></div>
					<div class="card-body">
						<h5 class="card-title">Sube una ilustración</h5>
						
						<div class="form-group">
                            <button type="button" id="subir" class="col-md-12 btn btn-elegant"><i class="fas fa-cloud-upload-alt fa-1.5x pr-2"></i>Image</button>
							<input type="file" id="image" hidden class="file-upload form-control-file" data-max-file-size="2M" name="image" accept="image/*" >
						</div>
					</div>
                </div>
                </div>
               
            </div>
            <div class="form-row">
                <input type="hidden" name="option" value="2" required>
                <div class="form-group col-md-3 pt-3 px-4">
                    <button type="submit" id="publicar" class="btn btn-elegant"><i class="fas fa-upload pr-2"></i>Publicar</button>
                </div>
            </div>
           
        
            </form>
            <br>


        </div>
      
        
 </div>
      

 </div>

<!-- Agregar nueva categoría de post -->
       <div class="modal fade" id="categoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <form  method="POST" id="formcategoria">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Categoría Post</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Categoria</label>
                            <input name="categoriapost" id="categoriapost" type="text" class="form-control" required>
                            <input type="hidden" name="option" value="3">
                        </div>
                        
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button id="addregistro" class="btn btn-elegant">Guardar</button>
                </div>
                
                </div>
            </div> 
            
        </form>
        </div>

<footer>
    <?php
    include("../mint/footer.php");
    ?>
</footer>   


    <script type="text/javascript" src="../../Styles/js/popper.min.js"></script>
 
    <script type="text/javascript" src="../../Styles/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>   
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.4.25/jodit.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.4.25/jodit.min.js"></script>
    <script src="../../Scripts/FuncionesApp.js"></script>
  
   <script>
   var editor = new Jodit("#descripcion", {
    "autofocus": true,
  "defaultFontSizePoints": "pt",
  "iframe": true,
  "uploader": {
    "insertImageAsBase64URI": true
  },
  "enter": "DIV"
});
   </script>
	
   
</body>
</html>