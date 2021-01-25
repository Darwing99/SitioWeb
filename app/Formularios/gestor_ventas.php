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
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Registro de Ventas</h4>
            </div>
            <br>
          
            <div class="form-inline">
                
            <a  href="../Reportes/Reporteventa.php" class="btn btn-primary px-3"><i class="far fa-file-pdf fa-3x"></i></a>  
            </div>
            
        
            <!-- ################################################################################################### -->
            <!-- tabla -->
            <div class="tabla_hide">

            <form  class="tabla_hide centrar_form">
                        <div id="table" class="table-editable">
                   
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                        <tr>
                            <th class="text-center">Codigo venta</th>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">cantidad</th>
                            <th class="text-center">precio</th>
                            <th class="text-center">ISV</th>
                            <th class="text-center">Descuento</th>
                            <th class="text-center">Subtotal</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Factura</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Accion</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                            <?php
             
                            $sqlCompras="SELECT*from rventas AS A INNER JOIN rfactura AS B INNER JOIN 
                                            rproductos AS C ON A._idfactura=B.id_factura and C.codigo=A._idproducto";
                            $resultado=mysqli_query($conn,$sqlCompras);
                            while($datos=mysqli_fetch_array($resultado)){ $i=0; ?>

                        <tr>
                            <td class="pt-3-half" ><?php echo $datos['id_venta']; ?></td>
                            <td class="pt-3-half" ><?php echo $datos['descripcion']; ?></td>
                            <td class="pt-3-half" ><?php echo $datos['cantidad']; ?></td>
                            <td class="pt-3-half" ><?php echo $datos['precio_unitario']; ?></td>
                            <td class="pt-3-half" ><?php echo $datos['isv']; ?></td>
                            <td class="pt-3-half" ><?php echo $datos['descuento']; ?></td>
                            <td class="pt-3-half" ><?php echo $datos['subtotal']; ?></td>
                            <td class="pt-3-half" ><?php echo $datos['total']; ?></td>
                            <td class="pt-3-half" ><?php echo $datos['id_factura']; ?></td>
                            <td class="pt-3-half" ><?php echo $datos['fecha']; ?></td>
                        
                            <td class="pt-3-half">
                            <?php $i++; ?>
                            <button type="button" class="btn btn-primary px-3"><i class="far fa-edit"></i></button>
                            <button type="button" class="btn btn-primary px-3"><i class="fas fa-trash-alt"></i></button>
                                    
                            </td>
                            
                        </tr>
                            <?php }  ?>
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
   
 
    <script type="text/javascript" src="../../Styles/js/popper.min.js"></script>
    <script type="text/javascript" src="../../Styles/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>   
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="../../Scripts/FuncionesApp.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>