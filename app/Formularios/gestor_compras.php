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
    <title>Apertura/Cierre</title>
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
<br>
<div " class="margenes card-deck">

        <!-- Card -->
        <div class=" col-sm-1">
          
        </div>
     

        <div  class="col-sm-10 card mb-4">
        <br>
    
        <div class="modal-header text-center  yellow darken-2">
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Registro de Compras</h4>
            </div>
            <br>
          
            <div class="form-inline">
                <a  href="../Reportes/Reportecompra.php" class="btn btn-primary px-3"><i class="far fa-file-pdf fa-3x"></i></a>   
            </div>
            
        
            <!-- ################################################################################################### -->
            <!-- tabla -->
            <div class="tabla_hide">

            <form  class="tabla_hide centrar_form">
                        <div id="table" class="table-editable">
                   
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                        <tr>
                            <th class="text-center">Codigo Compra</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">isv</th>
                            <th class="text-center">descuento</th>
                            <th class="text-center">precio</th>
                            <th class="text-center">Subtotal</th>
                            <th class="text-center">total</th>
                            <th class="text-center">Recibo</th>
                            <th class="text-center">fecha</th>
                            <th class="text-center">Accion</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('../BD/conexion.php');
                            $consulta="SELECT A.codigo,A.descripcion, b.cantidad,b.isv,b.descuento,b.precio_unitario,
                                b.subtotal,b.total, c.id_recibo,c.fecha FROM rinsumos AS A INNER JOIN rcompras AS B 
                            INNER JOIN rrecibo AS C ON C.id_recibo=B._idrecibo AND A.codigo=B._idinsumo";
                            $resultado=mysqli_query($conn,$consulta);
                            while($datos=mysqli_fetch_array($resultado)){$i=0;  ?>

                            <tr>
                            <td class="pt-3-half" contenteditable="false"><?php echo $datos['codigo'] ?></td>
                            <td class="pt-3-half" contenteditable="false"><?php echo $datos['descripcion'] ?></td>
                            <td class="pt-3-half" contenteditable="false"><?php echo $datos['cantidad'] ?></td>
                            <td class="pt-3-half" contenteditable="false"><?php echo $datos['isv'] ?></td>
                            <td class="pt-3-half" contenteditable="false"><?php echo $datos['descuento'] ?></td>
                            <td class="pt-3-half" contenteditable="false"><?php echo $datos['precio_unitario'] ?></td>
                            <td class="pt-3-half" contenteditable="false"><?php echo $datos['subtotal'] ?></td>
                            <td class="pt-3-half" contenteditable="false"><?php echo $datos['total'] ?></td>
                            <td class="pt-3-half" contenteditable="false"><?php echo $datos['id_recibo'] ?></td>
                            <td class="pt-3-half" contenteditable="false"><?php echo $datos['fecha'] ?></td>
                        

                            <td class="pt-3-half">
                            <?php $i++ ?>
                            <button type="button" class="btn btn-primary px-3"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-primary px-3"><i class="fas fa-trash-alt"></i></button>
                                    
                            </td>
                            
                             </tr>


                            

                        
                        <?php }?>
                       
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>