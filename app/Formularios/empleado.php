<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
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
<div " class="margenes card-deck">

        <!-- Card -->
        <div class=" col-sm-1">
          
        </div>
     

        <div  class="col-sm-10 card mb-4">
        <br>
        <div class="modal-header text-center  yellow darken-2">
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Registro de Empleado</h4>
            </div>
            <br>
         
            <form method="POST" action="../CRUD/insertEmpleado.php" class="centrar_form">
            <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Nombre</label>
                <input type="text" name="_name" class="form-control" id="_name">
                </div>
                <div class="form-group col-md-4">
                <label for="inputEmail4">Usuario de Empleado</label>
                <input type="email" name="_empleado" class="form-control" id="_empleado">
                </div>
                <div class="form-group col-md-4">
                <label for="inputPassword4">Estado</label>
                <select class="form-control" id="_estado" name="_estado">
                    <option disabled selected></option>
                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>
                </select>
                </div>
             
                <div class="form-group col-md-4">
                <label for="inputEmail4">Tipo de usuario</label>
                <select class="form-control" id="_tipoUser" name="_tipoUser">
                            <option value="0" disabled selected></option>
                            <?php
                            include('../BD/conexion.php');
                            $sql="select*from rtipouser";
                            $result=mysqli_query($conn,$sql);
                            while($mostrar=mysqli_fetch_array($result)){?>
                           
                            <option value="<?php echo  $mostrar['idtipo']?>"> <?php echo  $mostrar['tipo'] ?></option>
                            <?php } ?>
                </select>
        
                </div>
                
                <div class="form-group col-md-4">
                <label for="inputEmail4">Nuevo</label>
                <button type="button" id="_tipo" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModal"><i class="far fa-plus-square"></i></button>
                </div>
              
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputPassword4">Contraseña</label>
                <input type="password" class="form-control" id="_pass" name="_pass">
                </div>
                
            </div>
            
            <button id="_agregarE" type="submit" class="btn btn-rounded btn-amber"><i class="fas fa-plus-square"></i>Agregar</button>
            <button id="ver"type="button" class="btn btn-rounded btn-brown"><i class="fas fa-eye"></i>Mostrar</button>
            <button type="reset" class="btn btn-rounded btn-blue-grey"><i class="far fa-save pr-2" aria-hidden="true"></i>Limpiar</button>
            </form>
            <br>

            <!-- ################################################################################################### -->
            <!-- tabla -->
            <div class="tabla" id="tab">

            <div  class="tabla_hide centrar_form">
            <div id="table" class="table-editable">
                   
                   <table class="table table-bordered table-responsive-md table-striped text-center">
                       <thead>
                       <tr>
                           <th class="text-center">Id</th>
                           <th class="text-center">Nombre</th>
                           <th class="text-center">Usuario</th>
                           <th class="text-center">Estado</th>
                           <th class="text-center">Tipo de Usuario</th>
                           <th class="text-center">Acciones</th>
                           
                       </tr>
                       </thead>
                       <tbody>

                       <!-- ######Mostrar Empleados o usuarios desde la base de datos###### -->
                       <?php 
                         include('../BD/conexion.php');
                         $sql="SELECT A.identidad,A.name, A.nombre_user,if(A.estado=0,'Inactivo','Activo') as Estad,B.tipo FROM rusuario AS A INNER JOIN rtipouser AS B where A._idtipo=B.idtipo";
                         $result=mysqli_query($conn,$sql);

                         while($mostrar=mysqli_fetch_array($result)){ $i=0;
                         ?>

                         <tr>
                           <td><?php echo $mostrar['identidad'] ?></td>
                           <td><?php echo $mostrar['name'] ?></td>
                           <td><?php echo $mostrar['nombre_user']?></td>
                           <td><?php echo $mostrar['Estad'] ?></td>
                           <td><?php echo $mostrar['tipo'] ?></td>
                          
                           <td> 
                            <?php $i++; ?>
                           <button type="button" class="btn btn-primary px-3"  data-toggle="modal" data-target="#myModalbaja<?php echo $mostrar[0];?>"><i class="fas fa-unlock"></i></button>    
                           </td>
                         </tr>
                         
                                
                         <div class="modal fade" id="myModalbaja<?php echo $mostrar[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <form action="../CRUD/updateEstado.php" method="POST">
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
                                                    <label for="inputEmail4">Id</label>
                                                    <input name="idUsuario" type="text" class="form-control" id="numero" readonly value="<?php echo $mostrar[0] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Nombre</label>
                                                    <input name="nombreUser" type="text" class="form-control" id="numero" readonly value="<?php echo $mostrar[1] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Usuario</label>
                                                    <input name="usuario" type="text" class="form-control" id="numero" readonly value="<?php echo $mostrar[2] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                <label for="inputEmail4">Estado</label>
                                                <select class="form-control" id="_tipoUser" name="estado">
                                                            <option value="0">Deshabilitar</option>
                                                            <option value="1">Habilitar</option>
                                                            
                                                </select>
                                        
                                                </div>
                                         
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button id="_agregar" type="submit" class="btn btn-deep-orange">Actualizar</button>
                                        </div>
                                       
                                        </div>
                                    </div> 
                                   
                                </form>
                                </div>
                       <?php 
                       }
                       ?>
                   
                       </tbody>
                   </table>
               </div>
                
            </div>
            </div>
        </div>
      
        
 </div>
      
    
<!-- #################Modal de Registro de Tipos de Empleado o Usuarios# -->


<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel aria-hidden="true">
  <form action="../CRUD/insertTipoUser.php" method="POST">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Tipo de Usuario/Empleado</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
            
            <div class="form-group col-md-12">
            <?php 
                    include('../BD/conexion.php');
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
 
</div>





<footer>
    <?php
    include("../mint/footer.php");
    ?>

</footer>   

 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../../Scripts/empleados.js"></script>
    <script src="../../Scripts/tipoUser.js"></script>
    <script src="../../Scripts/Funciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>