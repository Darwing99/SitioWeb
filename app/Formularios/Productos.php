<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <?php
     include('../mint/datatables.php');
    ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css">
    <link rel="stylesheet" href="../../Styles/form.css">
   
</head>
<body>
<header>
<?php
  include('../mint/header.php');

?>
</header>
<br>
<div class="pt-5">

       
        <div  class="col-sm-12  mb-4">
        <br>
        <div class="modal-header text-left white darken-2">
          
                <div>
                        <i class="fas fa-cocktail fa-4x indigo-text"></i>
                  
                </div>
                <h4 class="modal-title black-text w-50 font-weight-bold py-0">Nuevo Producto</h4>
                <a id="ver"type="button" href="gestor_productos" class="btn btn-elegant"><i class="fas fa-list-ol"></i> Lista</a>
            </div>
            <br>
         
            <form class="pt-5 centrar_form" method="POST" action="../CRUD/insertCliente.php">
            <div class="row">
            <div class="col-lg-9 mb-4 p-4">
                <div class="text-left">
              
                <div class="card-body">
                <div class="form-row">
                    <div class="col-md-3 col-5">
                        
                        <h5 class="font-weight-bold mb-3">Codigo</h5>
                        <div class="md-form">
                        
                            <input type="text" name="codigo" id="codigo" class="form-control">
                            
                        </div>
                    </div>
                    <div class="col-md-9 col-5">
                        
                        <h5 class="font-weight-bold mb-3">Descripción</h5>
                        <div class="md-form">
                        
                            <input type="text" name="descripcion" id="descripcion" class="form-control">
                            
                        </div>
                    </div>
                    </div>
                    
                    <div class="form-row">
                        
                    
                    <div class="col-md-3 col-5">
                        
                        <h5 class="font-weight-bold mb-3">Precio</h5>
                        <div class="md-form">
                        
                            <input type="text" name="precio" id="precio" placeholder="0.00" class="form-control">
                            
                        </div>
                    </div> 
                    <div class="col-md-3 col-5">
                        
                        <h5 class="font-weight-bold mb-3">Descuento</h5>
                        <div class="md-form">
                        
                            <input type="number" name="descuento" id="descuento" placeholder="0.00" class="form-control">
                            
                        </div>
                    </div> 
                    <div class="col-md-3 col-5">
                        
                        <h5 class="font-weight-bold mb-3">Impuesto</h5>
                        <div class="md-form">
                        
                            <input type="number" name="impuesto" id="impuesto" placeholder="0.00" class="form-control">
                            
                        </div>
                    </div> 
                
                </div>
                </div>
               
                </div>
            </div>
            <div class="col-lg-3 mb-4 p-2">
                <div class="text-center">
               
               
                <div class="card-body">
                    <div  style="width: auto;">
                        <div  id="imagePreview"  class="col-md-12 imagePreview card-img-top"></div>
                        <div class="card-body">
                        
                            <div class="form-group">
                                <button type="button" id="subir" class="col-md-12 btn btn-elegant"><i class="fas fa-cloud-upload-alt fa-1.5x pr-2"></i>Image</button>
                                <input type="file" id="image" hidden class="file-upload form-control-file" data-max-file-size="2M" name="image" accept="image/*" >
                            </div>
                        </div>
                    </div>

                </div>
              
                </div>
            </div>
            </div>
            <button type="submit" id="_agregar" class="btn btn-elegant"><i class="fas fa-plus-square"></i> Agregar</button>
           
            <button type="reset" class="btn btn-elegant"><i class="far fa-save pr-2" aria-hidden="true"></i> Limpiar</button>
            </form>
            <br>

            </div>
           
    
 </div>


<footer>
    <?php
    include("../mint/footer.php");
    ?>
</footer>   
    <script type="text/javascript" src="../../Styles/js/popper.min.js"></script>
    <!-- <script type="text/javascript" src="../../Styles/js/jquery.min.js"></script> -->
    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>   
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="../../Scripts/FuncionesApp.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../../Scripts/datatables.js"></script>
</body>
</html>