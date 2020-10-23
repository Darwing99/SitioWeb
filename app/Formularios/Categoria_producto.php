
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias de productos</title>
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

<div  class="margenes card-deck">

        <!-- Card -->
        <div class=" col-sm-0">
          
        </div>
        <div  class="col-sm-12 card mb-4">
        <br>
        <div class="modal-header text-center  yellow darken-2">
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Categoría de insumos</h4>
            </div>
            <br>
         
            <form name="form" action="../CRUD/insertCategoria.php" method="POST" class="centrar_form"">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <!-- #####Consulta de numero de categoría#### -->
                <?php 
                    include('../BD/conexion.php');
                    $sql="SELECT Max(id+1) AS num FROM rcategorias";
                    $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                <label for="inputEmail4">Número</label>
                <input name="num" type="text" class="form-control" id="numero" readonly value="<?php echo $mostrar['num'] ?>">
                </div>
                <?php } ?>
                <div class="form-group col-md-4">
                <label for="inputPassword4">Categoría</label>
                <input name="_categoria" type="text" class="form-control" id="categoria">
                </div>
                
            </div>
           
            <button id="_agregar"  type="submit" class="btn btn-rounded btn-amber"><i class="fas fa-plus-square"></i>Agregar</button>
            <button id="ver" type="button" class="btn btn-rounded btn-brown"><i class="fas fa-eye"></i>Mostrar</button>
            <button type="reset" class="btn btn-rounded btn-blue-grey"><i class="far fa-save pr-2" aria-hidden="true"></i>Limpiar</button>
            </form>
            <br>

            <!-- ################################################################################################### -->
          
              
            <!-- tabla -->
            <div class="tabla" id="tab">
            <div class=" centrar_form" >
                        <div id="table" class="table-editable">

                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                        <tr>
                            <th class="text-center">Número</th>
                            <th class="text-center">Categoría</th>
                            <th class="text-center">Acción</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                            include('../BD/conexion.php');
                            $sql="select id, categoria from rcategorias";
                            $result=mysqli_query($conn,$sql);
                          
                            while( $mostrar=mysqli_fetch_array($result)){ $i=0;  
                            ?>
                           
                            <tr>
                                <td><?php echo $mostrar[0];?></td>
                                <td><?php echo $mostrar[1];?></td>
                                <?php  $i++; ?>
                                <td>
                              
                                
                                <button type="button"  class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalUpdate<?php echo $mostrar['id'];?>"><i class="far fa-edit"></i></button>
                                <button type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalDelete<?php echo $mostrar['id'];?>"><i class="fas fa-trash-alt"></i></button>    
                              
                            </td> 
                            </tr>   
                           
                    
                           
                        <!-- ################Actualizar Categoria########## -->
                            <div class="modal fade" id="myModalUpdate<?php echo $mostrar['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <form action="../CRUD/updateCategoria.php" method="POST">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Categoria</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Número</label>
                                                    <input name="_numero1" type="text" class="form-control" id="numero1" readonly value="<?php echo $mostrar['id'];?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputPassword4">Categoría</label>
                                                    <input name="_categoria1" type="text" class="form-control" id="categoria1"  value="<?php echo $mostrar['categoria'];?>">
                                                </div>
                                         
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button id="_agregarA" type="submit" class="btn btn-deep-orange">Actualizar</button>
                                        </div>
                                       
                                        </div>
                                    </div> 
                                   
                                </form>
                                </div>
                        <!-- ################Eliminar Categoria########## -->

                                
                            <div class="modal fade" id="myModalDelete<?php echo $mostrar['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <form action="../CRUD/DeleteCategoria.php" method="POST">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Categoria</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Número</label>
                                                    <input name="_numero2" type="text" class="form-control" id="numero2" readonly value="<?php echo $mostrar['id'];?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputPassword4">Categoría</label>
                                                    <input name="_categoria2" type="text" class="form-control" id="categoria2"  value="<?php echo $mostrar['categoria'];?>">
                                                </div>
                                         
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button id="_agregarA" type="submit" class="btn btn-deep-orange">Eliminar Registro</button>
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
      
        
 </div>
 


<footer>
    <?php
    include("../mint/footer.php");
    ?>

</footer>   
    
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../../Scripts/Funciones.js"></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="../../Scripts/categorias.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>