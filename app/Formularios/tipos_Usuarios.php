<?php
// if($_SESSION['rol']!=1){
//   header("location: ventas.php");
// }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles de Usuarios</title>
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
<div  class="pt-5 margenes card-deck">

      

        <div  class="col-sm-12 card mb-4">
        <br>
        <div class="modal-header text-rigth  white darken-2">
                <h4 class="modal-title black-text w-100 font-weight-bold py-0">Tipos de Usuario</h4>
            </div>
            <br>
         

            <div class="table" id="tabla">
            
            <div  class="tabla_hide centrar_form">
            <button type="button" id="_tipo" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModal"><i class="far fa-plus-square"></i></button>
                   <table class="table table-bordered table-responsive-md table-striped text-center">
                       <thead>
                       <tr>
                           <th class="text-center">Id</th>
                           <th class="text-center">Tipo de Usuario</th>
                           <th class="text-center">Acción</th>
                           
                       </tr>
                       </thead>
                       <tbody>

                       <!-- ######Mostrar Empleados o usuarios desde la base de datos###### -->
                       <?php 
                        
                            $sql="select*from rtipouser";
                            $result=mysqli_query($conn,$sql);
                            while($mostrar=mysqli_fetch_array($result)){ $i=0;
                            ?>
                           
                             <tr>
                                <td><?php echo $mostrar[0] ?></td>
                                <td><?php echo $mostrar[1] ?></td>
                                <td>
                              <?php $i++; ?>
                              <button type="button" id="_update" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalUpdate<?php echo $mostrar[0];?>"><i class="far fa-edit"></i></button>
                              <button type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalDelete<?php echo $mostrar[0];?>"><i class="fas fa-trash-alt"></i></button>    
                            </td>
                         </tr>
                       
                      
                         <div class="modal fade" id="myModalUpdate<?php echo $mostrar[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <form action="../CRUD/updateTipouser.php" method="POST">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Actualizar Rol</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Id</label>
                                                    <input name="idU" type="text" class="form-control" id="_idUser" readonly value="<?php echo $mostrar[0] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Cargo</label>
                                                    <input name="cargo" type="text" class="form-control" id="_idcargo"value="<?php echo $mostrar[1] ?>">
                                                </div>
                                               
                                         
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button id="_agregar" type="submit" class="btn btn-deep-orange">Actualizar</button>
                                        </div>
                                       
                                        </div>
                                    </div> 
                                   
                                </form>
                                </div>


                                <div class="modal fade" id="myModalDelete<?php echo $mostrar[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <form action="../CRUD/DeleteTipouser.php" method="POST">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Eliminar Rol</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Id</label>
                                                    <input name="idUD" type="text" class="form-control" id="_idUserD" readonly value="<?php echo $mostrar[0] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Rol</label>
                                                    <input name="cargoD" type="text" class="form-control" id="_idcargoD" readonly value="<?php echo $mostrar[1] ?>">
                                                </div>
                                               
                                         
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button id="_agregar" type="submit" class="btn btn-deep-orange">Eliminar</button>
                                        </div>
                                       
                                        </div>
                                    </div> 
                                   
                                </form>
                                </div>
                            <?php } 
                        ?>  
                     
                       </tbody>
                   </table>    
                </div>
            </div>
        </div>
      
        
 </div>
      
    

 <div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel aria-hidden="true">
  <form action="../CRUD/insertTipoUser.php" method="POST">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Agregar Nuevo Rol</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
            
            <div class="form-group col-md-12">
            <?php 
                    
                    $sql="select Max(idtipo+1) as num from rtipouser";
                    $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                <label for="inputEmail4">Código</label>
                <input name="num"type="text" class="form-control" id="numero" readonly value="<?php echo $mostrar['num'] ?>">
                </div>
                <?php } ?>
            <div class="form-group col-md-12">
            
            <label for="inputEmail4">Tipo de Usuario</label>
                <input name="_tipoUser"type="text" class="form-control" id="_tipoUser">
            </div>
            </div>  
            <div class="modal-footer d-flex justify-content-center">
            <button id="_agregarUser" class="btn btn-deep-orange">Agregar</button>
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
        
    <script src="../../Scripts/validaciones.js"></script>
    <script src="../../Scripts/FuncionesApp.js"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>