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

 <div class="outer_div p-5 table-responsive">
                        
    <table id="table_productos" class="table table-condensed table-hover table-striped product-table">
        <thead class='mdb-color lighten-5'>
        <tr>
            <th  class="font-weight-bold">No</th>
            <th class="font-weight-bold">Código</th>
            <th  class="font-weight-bold">Descripción</th>
            <th class="font-weight-bold">Precio</th>
            <th  class="font-weight-bold">Descuento</th>
            <th  class="font-weight-bold">ISV</th>
            <th class="font-weight-bold">Stock</th>
            <th  class="font-weight-bold">Foto</th>
            <th  class="font-weight-bold">Acción</th>
        </tr>
        </thead>
        <tbody>
        <?php

            $sql="SELECT * FROM `rproductos`";
            $resultado=mysqli_query($conn,$sql);


            while($producto=mysqli_fetch_array($resultado)){$i=0;?>
            <tr>
            <td><?php echo $producto[0];?></td>
            <td><?php echo $producto[1];?></td>
            <td><?php echo $producto[2];?></td>
            <td><?php echo $producto[3];?></td>
            <td><?php echo $producto[4];?></td>
            <td><?php echo $producto[5];?></td>
            <td><?php echo $producto[6];?></td>
            <td> <img style="width: 100px; height:auto;" class="card-img-top" src="data:image/jpg; base64,<?php echo base64_encode($producto[7]);?>"></td>
            <td><a class="btn-floating btn-success  btn-sm"><i class="fas fa-edit fa-2x"></i></a>
                <a class="btn-floating btn-warning btnEliminar btn-sm"><i class="fas fa-trash fa-2x"></i></a>
                </td>
            </tr>
            <?php $i++; }

            ?>
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
