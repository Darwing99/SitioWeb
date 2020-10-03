<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css">
    <link rel="stylesheet" href="../../Styles/form.css">
    <script src="../../Scripts/jquery.min.js"></script>
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
        <div class=" col-sm-0">
          
        </div>
     

        <div  class="col-sm-12 card mb-4">
        <br>
        <div class="modal-header text-center  yellow darken-2">
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Registro de Clientes</h4>
            </div>
            <br>
         
            <form class="centrar_form" method="POST" action="../CRUD/insertCliente.php">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputEmail4">Identidad</label>
                <input type="text" class="form-control" name="_identidad" id="_identidad">
                </div>
                <div class="form-group col-md-4">
                <label for="inputPassword4">Nombre</label>
                <input type="text" class="form-control" name="_nombre" id="_nombre">
                </div> 
                <div class="form-group col-md-4">
                <label for="inputPassword4">Dirección</label>
                <input type="text" class="form-control" name="_direccion" id="_direccion">
                </div>
            </div>
            <div class="form-row">
                
               
                <div class="form-group col-md-4">
                <label for="inputPassword4">Teléfono</label>
                <input type="Telephone" class="form-control" name="_telefono" id="_telefono">
                </div>  
                <div class="form-group col-md-4">
                <label for="inputZip">Email</label>
                <input type="email" class="form-control" name="_email" id="_email">
                </div>
            </div>
           
           
            <button type="submit" id="_agregar" class="btn btn-rounded btn-amber"><i class="fas fa-plus-square"></i> Agregar</button>
            <button id="ver"type="button" class="btn btn-rounded btn-brown"><i class="fas fa-eye"></i> Mostrar</button>
            <button type="reset" class="btn btn-rounded btn-blue-grey"><i class="far fa-save pr-2" aria-hidden="true"></i> Limpiar</button>
            </form>
            <br>


            <!-- ################################################################################################### -->
            <!-- tabla -->
            <div class="tabla" id="tab">

            <div  class="tabla_hide centrar_form">
                        <div id="table" class="table-editable">
                        <div class="md-form mb-5">
                            <i class="fa fa-search prefix grey-text"></i>
                            <input name="caja_producto" type="text" class="form-control validate" id="caja_busqueda" placeholder="codigo, identidad/nombre de cliente">
                        </div>
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                        <tr>
                           <th class="text-center">Id</th>
                            <th class="text-center">Identidad</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Direccion</th>
                            <th class="text-center">Teléfono</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Acción</th>
                        </tr>
                        </thead>
                        <tbody id="body">
                        <?php 
                        
                         include('../BD/conexion.php');

                         $query = "SELECT * FROM rclientes WHERE cliente NOT LIKE '' ORDER By identidad LIMIT 25";

                         if (isset($_POST['consulta'])) {
                             $q=mysqli_real_escape_string($conn,$_POST['consulta']);
                             $query = "SELECT * FROM rclientes WHERE identidad LIKE '%"+$q+"%' OR cliente LIKE '%"+$q+"%'";
                         }
                         $resultado = mysqli_query($conn,$query);

                       

                         while($mostrar=mysqli_fetch_assoc($resultado)){ $i=0;
                         ?>

                         <tr>
                           <td><?php echo $mostrar['id'] ?></td>
                           <td><?php echo $mostrar['identidad'] ?></td>
                           <td><?php echo $mostrar['cliente'] ?></td>
                           <td><?php echo $mostrar['direccion']?></td>
                           <td><?php echo $mostrar['telefono'] ?></td>
                           <td><?php echo $mostrar['email'] ?></td>
                           <td>
                               <?php $i++; ?>
                               <?php $i++; mysqli_close($conn); ?>
                               
                           <button type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalUpdate<?php echo $mostrar[0];?>"><i class="far fa-edit"></i></button>
                           <button id="eliminar" type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalDelete<?php echo $mostrar[0];?>"><i class="fas fa-trash-alt"></i></button>    
                           </td>
                         </tr>

                                         
                         <div class="modal fade" id="myModalDelete<?php echo $mostrar[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <form action="../CRUD/Deletecliente.php" method="POST">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">¿Desea Eliminar Este Cliente?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Id</label>
                                                    <input name="idCliente" type="text" class="form-control" id="numero" readonly value="<?php echo $mostrar[0] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Identidad</label>
                                                    <input name="nombreUser" type="text" class="form-control" id="numero" readonly value="<?php echo $mostrar[1] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Nombre</label>
                                                    <input name="nombreUser" type="text" class="form-control" id="numero" readonly value="<?php echo $mostrar[2] ?>">
                                                </div>
                                              
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button id="_agregar" type="submit" class="btn btn-deep-orange">Eliminar</button>
                                        </div>
                                       
                                        </div>
                                    </div> 
                                   
                                </form>
                                </div>



                                
                         <!-- ########### ACTUALIZAR INFORMACION DEL CLIENTE######### -->
                         <div class="modal fade" id="myModalUpdate<?php echo $mostrar[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
      
    

<footer>
    <?php
    include("../mint/footer.php");
    ?>
</footer>   
    

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="../../Scripts/Funciones.js"></script>
    <script src="../../Scripts/clientes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>