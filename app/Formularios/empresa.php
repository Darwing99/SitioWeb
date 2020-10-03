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
    <title>Información de la Empresa</title>
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
        <form  method="POST" action="../CRUD/insertEmpresa.php" enctype="multipart/form-data">
        <br>
        <div class="modal-header text-center  yellow darken-2">
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Registro de Empresa</h4>
            </div>
            <br>
         
            <form class="centrar_form">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputEmail4">RTN</label>
                <input type="text" class="form-control" id="_rtn" name="rtn" value="">
                </div>
                <div class="form-group col-md-4">
                <label for="inputPassword4">Empresa</label>
                <input type="text" class="form-control" id="_empresa" name="empresa">
                </div>
                <div class="form-group col-md-4">
                <label for="inputPassword4">Dirección</label>
                <input type="text" class="form-control" id="_direccion" name="direccion">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputEmail4">Teléfono</label>
                <input type="text" class="form-control" id="_telefono" name="telefono">
                </div>
                <div class="form-group col-md-4">
                <label for="inputPassword4">Correo</label>
                <input type="text" class="form-control" id="_correo" name="correo">
                </div>
                <div  class="form-group col-md-4">

                <label for="inputPassword4">Logo</label>
                <input type="file" name="img" class=" form-control" id="_logo">
                
                </div>
                
            </div>
        
           
            <button type="submit" id="_agregar" class="btn btn-rounded btn-amber"><i class="fas fa-plus-square"></i> Actualizar</button>
            <button id="ver"type="button" class="btn btn-rounded btn-brown"><i class="fas fa-eye"></i>Ver Registro</button>
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
                            <th class="text-center">RTN</th>
                            <th class="text-center">Empresa</th>
                            <th class="text-center">Dirección</th>
                            <th class="text-center">Teléfono</th>
                            <th class="text-center">Correo</th>
                            <th class="text-center">Imagen</th>
                            <th class="text-center">Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                         include('../BD/conexion.php');
                         $sql="select*from rempresa";
                         $result=mysqli_query($conn,$sql);

                         while($mostrar=mysqli_fetch_array($result)){ $i=0;
                         ?>

                         <tr>
                           <td><?php echo $mostrar['id'] ?></td>
                           <td><?php echo $mostrar['rtn'] ?></td>
                           <td><?php echo $mostrar['nombre_empresa']?></td>
                           <td><?php echo $mostrar['direccion'] ?></td>
                           <td><?php echo $mostrar['telefono'] ?></td>
                           <td><?php echo $mostrar['correo'] ?></td>
                           <?php $i++; ?>
                           <td><img src="data:image/jpg; base64,<?php echo base64_encode($mostrar['logo']); ?>" height="100px" width="100px" alt=""> </td>
                           <td>
                           <button type="button" class="btn btn-primary px-3"data-toggle="modal" data-target="#myModalUpdate<?php echo $mostrar[0];?>"><i class="far fa-edit"></i></button>
                           </td>
                         </tr>

                         <!-- ########### ACTUALIZAR INFORMACION DE LA EMPRESAA######### -->
                         <div class="modal fade" id="myModalUpdate<?php echo $mostrar[0];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <form action="../CRUD/updateEmpresa.php" method="POST" enctype="multipart/form-data">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">INFORMACIÓN DE LA EMPRESA</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Id</label>
                                                    <input type="text" class="form-control"name="_codigo" id="numero" readonly value="<?php echo $mostrar[0] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">RTN</label>
                                                    <input  type="text" class="form-control" name="_rtn" id="rtn"  value="<?php echo $mostrar[1] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Empresa</label>
                                                    <input type="text" class="form-control" name="_empresa" id="empresa"  value="<?php echo $mostrar[2] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Dirección</label>
                                                    <input  type="text" class="form-control" name="_direccion" id="direccion" value="<?php echo $mostrar[3] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Teléfono</label>
                                                    <input type="text" class="form-control" name="_telefono" id="telefono" value="<?php echo $mostrar[4] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Email</label>
                                                    <input type="email" class="form-control" name="_email" id="email" value="<?php echo $mostrar[5] ?>">
                                                </div>
                                                <div class="form-group col-md-12">
                                               
                                                    <label for="inputEmail4">Logo</label>
                                                    <input type="file" class="form-control" name="_imagen" id="logo">
                                                  
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
        </form>
        </div>
     
        
 </div>
      
    

<footer>
    <?php
    include("../mint/footer.php");
    ?>

</footer>   
  
    <script type="text/javascript" src="styles/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="styles/js/popper.min.js"></script>
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="styles/js/mdb.min.js"></script>
    <script>new WOW().init();
    $(document).ready(function () {
      $('.mdb-select').material_select();
    }); </script>

 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../../Scripts/Funciones.js"></script>
    <script src="../../Scripts/empresa.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>