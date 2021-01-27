<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálago de Productos</title>
 
   
    <?php
     include('../mint/datatables.php');
    ?>
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
        <div class="modal-header text-rigth  white darken-2">
                <h4 class="modal-title black-text w-50 font-weight-bold py-0">Productos</h4>
                <a id="ver"type="button" href="Productos" class="btn btn-elegant"><i class="far fa-plus-square"></i> Nuevo</a>
            </div>
            <br>
           
            </div>
          
           
    
 </div>

 <div class="p-5 table-responsive-sm">
                        
    <table id="productos" class="table">
        <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Descuento</th>
            <th scope="col">ISV</th>
            <th scope="col">Stock</th>
            <!-- <th scope="col">Foto</th> -->
            <th scope="col">Acción</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
 
<div class="modal fade modal-responsive" id="modalProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <form method="POST">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Eliminar Producto?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
               
                <input type="text" id="id_producto" class="form-control " readonly>
               
                </div>

                <div class="md-form mb-4">
                
                <input type="text" id="nombre" class="form-control validate" readonly>
               
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button id="borrar_producto" type="submit" class="borrar_producto btn btn-elegant">Eliminar</button>
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
    
    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="../../Styles/js/popper.min.js"></script> 
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="../../Scripts/FuncionesApp.js"></script>
    <script src="../../Scripts/datatables.js"></script>
</body>
</html>
