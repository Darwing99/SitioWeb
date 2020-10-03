<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Registro de Productos</h4>
            </div>

            <br>
         
            <br>

            <div>
            

            <form  class="tabla_hide centrar_form" method="POST">
            <div class="md-form mb-5">
                <i class="fa fa-search prefix grey-text"></i>
                <input name="producto" type="text" class="form-control validate" id="caja_busqueda" placeholder="codigo/nombre de producto">
            </div>
                <div id="tabla" class="table-editable">
                   

              
                  
                   <table class="table table-bordered table-responsive-md table-striped text-center">
                   <thead>
                   <tr>
                      <th class="text-center">Codigo</th>
                       <th class="text-center">Descripcion</th>
                       <th class="text-center">Precio</th>
                       <th class="text-center">Cantidad</th>
                       <th class="text-center">Estado</th>
                       <th class="text-center">Foto</th>
                       <th class="text-center">Acción</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php 
                    include('../BD/conexion.php');
                    $sql="SELECT*, if(estado=1,'activo','inactivo') as estad FROM rproductos";
                    $result=mysqli_query($conn,$sql);

                    while($mostrar=mysqli_fetch_array($result)){ $i=0;
                    ?>

                    <tr>
                      <td><?php echo $mostrar['codigo'] ?></td>
                      <td><?php echo $mostrar['descripcion'] ?></td>
                      <td><?php echo $mostrar['precio'] ?></td>
                      <td><?php echo $mostrar['cantidad']?></td>
                      <td><?php echo $mostrar['estad'] ?></td>
                      <td><img src="data:image/jpg; base64,<?php echo base64_encode($mostrar['foto']); ?>" height="100px" width="100px" alt=""></td>
                      <td>
                          <?php $i++; ?>
                      <button type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalUpdate<?php echo $mostrar[0];?>"><i class="far fa-edit"></i></button>
                      <button id="eliminar" type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalDelete<?php echo $mostrar[0];?>"><i class="fas fa-trash-alt"></i></button>    
                      <button id="eliminar" type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalDelete<?php echo $mostrar[0];?>"><i class="fas fa-info-circle"></i></button>    
                      </td>
                    </tr>

                                    
                    <div class="modal fade" id="myModalDelete<?php echo $mostrar[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                           aria-hidden="true">
                           <form action="../CRUD/Deleteproducto.php" method="POST">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                   <div class="modal-header text-center">
                                       <h4 class="modal-title w-100 font-weight-bold">¿Desea Eliminar Este Producto?</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body mx-3">
                                           <div class="form-group col-md-12">
                                               <label for="inputEmail4">Id</label>
                                               <input name="codigoD" type="text" class="form-control"  readonly value="<?php echo $mostrar['codigo'] ?>">
                                           </div>
                                           <div class="form-group col-md-12">
                                               <label for="inputEmail4">Descripcion</label>
                                               <input name="descripcionD" type="text" class="form-control"  readonly value="<?php echo $mostrar['descripcion'] ?>">
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
                                       <h4 class="modal-title w-100 font-weight-bold">Actualizar Datos De Producto</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body mx-3">
                                           <div class="form-group col-md-12">
                                               <label for="inputEmail4">Codigo</label>
                                               <input type="text" class="form-control"name="codigoU" id="numero" readonly value="<?php echo $mostrar['codigo'] ?>">
                                           </div>
                                           <div class="form-group col-md-12">
                                               <label for="inputEmail4">descripcion</label>
                                               <input  type="text" class="form-control" name="descripcionU" id="rtn"  value="<?php echo $mostrar['descripcion'] ?>">
                                           </div>
                                           <div class="form-group col-md-12">
                                               <label for="inputEmail4">Precio</label>
                                               <input type="text" class="form-control" name="precioU" id="empresa"  value="<?php echo $mostrar['precio'] ?>">
                                           </div>
                                           <div class="form-group col-md-12">
                                               <label for="inputEmail4">Cantidad</label>
                                               <input  type="text" class="form-control" name="cantidadU" id="direccion" value="<?php echo $mostrar['cantidad'] ?>">
                                           </div>
                                           <div class="form-group col-md-12">
                                               <label for="inputEmail4">Foto</label>
                                               <input type="text" class="form-control" name="_telefono" id="telefono" value="">
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
            </form>
            </div>
        </div>
      
        
 </div>
      

<footer>
    <?php
    include("../mint/footer.php");
    ?>

</footer>   


 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../../Scripts/Funciones.js"></script>
    <script src="../../Scripts/ajaxProductos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>