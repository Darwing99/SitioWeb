<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insumos</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css">
    <link rel="stylesheet" href="../../Styles/form.css">
    <script src="../../Scripts/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
</head>
<body>
<header>
<?php
  include('../mint/header.php');
?>
</header>
<br>
<div " class="margenes card-deck">

        <div  class="col-sm-12 card mb-4">
        <br>
        <div class="modal-header text-center  yellow darken-2">
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Insumos</h4>
            </div>
            <br>
         
            <br>
            <!-- ################################################################################################### -->
            <!-- tabla -->
            <div class="" id="">
            <button type="button" id="_tipo" class="btn btn-primary px-3" data-toggle="modal" data-target="#modalInsumo"><i class="far fa-plus-square"></i></button>

            <div  class="tabla_hide centrar_form">
                        <div id="table" class="table-editable">
                   
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                        <tr>
                            <th class="text-center">Codigo</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">estado</th>
                            <th class="text-center">Categoria</th>
                            <th class="text-center">Accion</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                       
                       include('../BD/conexion.php');
                       $sql="SELECT*FROM rinsumos";
                       $result=mysqli_query($conn,$sql);

                       while($mostrar=mysqli_fetch_array($result)){
                           $i=0; ?>

                       <tr>
                         <td><?php echo $mostrar['codigo'] ?></td>
                         <td><?php echo $mostrar['descripcion'] ?></td>
                         <td><?php echo $mostrar['cantidad'] ?></td>
                         <td><?php echo $mostrar['estado']?></td>
                         <td><?php echo $mostrar['_idcategoria'] ?></td>
                      
                         <td>
                             <?php $i++; ?>
                         <button type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalUpdate<?php echo $mostrar[0]; ?>"><i class="far fa-edit"></i></button>
                         <button id="eliminar" type="button" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModalDelete<?php echo $mostrar[0]; ?>"><i class="fas fa-trash-alt"></i></button>    
                         </td>
                       </tr>
                       <?php
                       }?>

                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
  
      
 </div>
<br>

  

<div class="modal fade" id="modalInsumo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel aria-hidden="true">
  <form id="insumos" method="POST">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Agregar Nuevo Insumo</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
            
            <div class="form-group col-md-12">
            <?php 
                    include('../BD/conexion.php');
                    $sql="select Max(codigo+1) as num from rinsumos";
                    $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                <label for="inputEmail4">Código</label>
                <input name="codigo" type="text" class="form-control" id="numero" readonly value="0<?php echo $mostrar['num'] ?>">
                </div>
                <?php } ?>
            <div class="form-group col-md-12">
            
            <label for="inputEmail4">Descripcion</label>
                <input name="descripcion"type="text" class="form-control" id="_descripcion">
            </div>
            <div class="form-group col-md-12">
            
            <label for="inputEmail4">Cantidad</label>
                <input name="cantidad"type="text" class="form-control" id="_cantidad" value="0">
            </div>
            <div class="form-group col-md-12">
            
            <label for="inputEmail4">Estado</label>
                <input name="estado" type="text" class="form-control" id="_estado" value="Inactivo">
            </div>
            <div class="form-group col-md-12">
            <label for="inputEmail4">Categoria</label>
                      <select class="form-control" id="_categoria" name="categoria">
                        <option value="0" disabled selected>Categoria</option>
                        <?php
                        include('../BD/conexion.php');
                        $sql="select*from rcategorias";
                        $result=mysqli_query($conn,$sql);
                        while($mostrar=mysqli_fetch_array($result)){?>
                        <option value="<?php echo  $mostrar['id']?>"> <?php echo  $mostrar['categoria'] ?></option>
                        <?php } ?>
             </select>
            </div>
            </div>  
            <div class="modal-footer d-flex justify-content-center">
            <button type="button" id="_agregarInsumo" class="btn btn-deep-orange">Agregar</button>
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

    
    <script src="../../Scripts/Funciones.js"></script>
    <script type="text/javascript" src="../../Scripts/ajaxProductos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
      