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
        <div class=" col-sm-0">
          
        </div>
     

        <div  class="col-sm-12 card mb-4">
        <br>
        <div class="modal-header text-center  yellow darken-2">
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Registro de Productos</h4>
            </div>
            <br>
            
            <form class="centrar_form" id="producto" action="../CRUD/insertarProducto.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
              
                <div class="form-group col-md-4">
                <label for="inputPassword4">Descripción</label>
                <input type="text" class="form-control"  name="descripcion" id="_descripcion">
                </div>
                <div class="form-group col-md-4">
                <label for="inputPassword4">Precio</label>
                <input type="text" class="form-control" id="_precio" name="precio" value="">
                </div>
                <div class="form-group col-md-4">
                <label for="inputEmail4">Cantidad</label>
                <input type="text" class="form-control" id="_cantidad" name="cantidad" value="">
                </div>
            </div>
            <div class="form-row">
                
                <div class="form-group col-md-4 ">
                <label for="inputEmail4">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-4">
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
            <hr>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputEmail4">Ingredientes</label>
                <select class="form-control" id="_codigo" name="codigo">
                                  <option value="0" disabled selected>Producto</option>
                                  <?php
                                  include('../BD/conexion.php');
                                  $sql="select*from rinsumos";
                                  $result=mysqli_query($conn,$sql);
                                  while($mostrar=mysqli_fetch_array($result)){?>
                                  <option value="<?php echo  $mostrar['codigo']?>"> <?php echo  $mostrar['descripcion'] ?></option>
                                  <?php } ?>
                      </select>
                </div> 
                
                <div class="form-group col-md-3 ">
                <label for="inputEmail4">Cantidad</label>
                <input type="text" class="form-control" id="_cantidadinsumo" value="1">
                </div>
                
                
            </div>
            <hr>
            <div class="form-group col-md-3 ">
                <button type="submit" class="btn btn-rounded btn-amber"><i class="fas fa-plus-square"></i>Agregar</button>
            </div>
           

            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <head>
                    <tr>
                    <th class="th-sm">N°
                    </th>
                    <th class="th-sm">Insumo
                    </th>
                    <th class="th-sm">Cantidad
                    </th>
                    <th class="th-sm">Acciones
                    </th>
                    </tr>
                </head>
                <body>
                    <tr>
                    <td>1</td>
                    <td>Naranjas</td>
                    <td>4</td>
                    <td>
                    
                    <button type="button" class="btn btn-primary px-3"><i class="far fa-edit"></i></button>
                    <button type="button" class="btn btn-primary px-3"><i class="fas fa-trash-alt"></i></button>
                    </td>
                    </tr>
                </body>
          
            </table>

            <button type="button" class="btn btn-rounded btn-amber"><i class="fas fa-plus-square"></i>Guardar</button>
            <button id="ver"type="button" class="btn btn-rounded btn-brown"><i class="fas fa-eye"></i>Mostrar</button>
            <button type="reset" class="btn btn-rounded btn-blue-grey"><i class="far fa-save pr-2" aria-hidden="true"></i>Limpiar</button>
            </form>
            <br>


            <!-- ################################################################################################### -->
            <!-- tabla -->
            <div class="tabla" id="tab">

            <form  class="tabla_hide centrar_form">
                        <div id="table" class="table-editable">
                        
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                <tr>
                                    <th class="text-center">Codigo</th>
                                    <th class="text-center">Descripción</th>
                                    <th class="text-center">Precio</th>
                                    <th class="text-center">Existencias</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
                                    <td class="pt-3-half" contenteditable="true">30</td>
                                    <td class="pt-3-half" contenteditable="true">Deepends</td>
                                    <td class="pt-3-half" contenteditable="true">Spain</td>
                                    <td></td>
                                    <td>
                                    <button type="button" class="btn btn-primary px-3"><i class="far fa-edit"></i></button>
                                    <button type="button" class="btn btn-primary px-3"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                
                                </tbody>
                            </table>
                </div>
            </form>
            </div>
        </div>
      
        
 </div>
     
    <!--/.Content-->
  



<footer>
   <?php
    include("../mint/footer.php");
    ?>
</footer>   
    <script src="../../Scripts/Funciones.js"></script>
    <script src="../../Scripts/productos.js"></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script type="text/javascript" src="styles/js/popper.min.js"></script>
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="styles/js/mdb.min.js"></script>
    <script>new WOW().init();
    $(document).ready(function () {
      $('.mdb-select').material_select();
    }); </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../../Scripts/Funciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>