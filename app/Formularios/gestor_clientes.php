<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
 
   
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
                <h4 class="modal-title black-text w-50 font-weight-bold py-0">Lista de Clientes</h4>
                <a id="ver"type="button" href="cliente" class="btn btn-elegant"><i class="far fa-plus-square"></i> Nuevo</a>
            </div>
            <br>
           
            </div>
          
           
    
 </div>

 <div class="container table-responsive-sm">
                        
    <table id="clientes" class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Identidad</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Email</th>
            <th scope="col">Acción</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
 
<div class="modal fade modal-responsive" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <form method="POST">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Eliminar Cliente?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
               
                <input type="text" id="idCliente" class="form-control " readonly>
               
                </div>

                <div class="md-form mb-4">
                
                <input type="text" id="nombre" class="form-control validate" readonly>
               
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button id="borrar_cliente" type="submit" class="borrar_cliente btn btn-elegant">Eliminar</button>
            </div>
            </div>
        </div>
        </form>
        </div>  

       <!-- ########### ACTUALIZAR INFORMACION DEL CLIENTE######### -->
<div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <form action="../CRUD/updateCliente.php" method="POST" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Actualizar Datos De Cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Id</label>
                        <input type="text" class="form-control"name="_idcliente" id="numero" readonly value="<?php echo $mostrar['id'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">RTN</label>
                        <input  type="text" class="form-control" name="_identidad" id="rtn"  value="<?php echo $mostrar['identidad'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Empresa</label>
                        <input type="text" class="form-control" name="_cliente" id="empresa"  value="<?php echo $mostrar['cliente'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Dirección</label>
                        <input  type="text" class="form-control" name="_direccion" id="direccion" value="<?php echo $mostrar['direccion'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Teléfono</label>
                        <input type="text" class="form-control" name="_telefono" id="telefono" value="<?php echo $mostrar['telefono'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="_email" id="email" value="<?php echo $mostrar['email'] ?>">
                    </div>
                    
                        
                    <div class="modal-footer d-flex justify-content-center">
                        <button  type="submit" class="btn btn-deep-orange">Actualizar</button>
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
