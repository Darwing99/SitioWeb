<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
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
<div class="">


<div class="pt-5">

        <div  class="col-sm-12  mb-4">
        <br>
        <div class="modal-header text-rigth  white darken-2">
                <h4 class="modal-title black-text w-50 font-weight-bold py-0">Registro de Usuarios</h4>
                <a id="ver"type="button" href="empleado" class="btn btn-elegant"><i class="far fa-plus-square"></i> Nuevo</a>
            </div>
         
            <br>        
                <div  class="p-5 tabla_hide">
                <div class="table-responsive-sm col-lg-12">
                    
                    <table id="usuarios" class="table table-striped table-bordered ">
                        <thead >
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Tipo de Usuario</th>
                            <th scope="col">Acciones</th>
                            
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                    

                </div>

       
        </div>
       
      
        
 </div>

<div class="modal fade" id="modalUsuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
<form method="POST">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Habilitar/Deshabilitar</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
                <div class="form-group col-md-12">
                    <label for="id_usuario">Id</label>
                    <input name="idUsuario" type="text" class="form-control" id="id_usuario" readonly value="<?php echo $mostrar[0] ?>">
                </div>
                <div class="form-group col-md-12">
                    <label for="nombre">Nombre</label>
                    <input name="nombreUser" type="text" class="form-control" id="nombre" readonly value="<?php echo $mostrar[1] ?>">
                </div>
                <div class="form-group col-md-12">
                    <label for="usuario">Usuario</label>
                    <input name="usuario" type="text" class="form-control" id="usuario" readonly value="<?php echo $mostrar[2] ?>">
                </div>
                <div class="form-group col-md-12">
                <label for="inputEmail4">Estado</label>
                <select class="form-control" id="estado" name="estado">
                            <option value="0">Inactivo</option>
                            <option value="1">Activo</option>
                            
                </select>
        
                </div>
            
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button  type="submit" class="agregar btn btn-elegant">Actualizar</button>
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

    <!-- <script type="text/javascript" src="../../Styles/js/jquery.min.js"></script> -->
    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>   
    <script type="text/javascript" src="../../Styles/js/popper.min.js"></script>
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
    <script src="../../Scripts/FuncionesApp.js"></script>
    <script src="../../Scripts/datatables.js"></script>
</body>
</html>