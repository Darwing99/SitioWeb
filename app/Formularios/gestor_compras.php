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
<div class="pt-5 container ">

    
     

        <div  class="col-sm-12 card mb-4">
        <br>
    
        <div class="modal-header text-rigth  white darken-2">
                <h4 class="modal-title black-text w-100 font-weight-bold py-0">Registro de Compras</h4>
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
                   
                    <table id="tabla_compras" class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                        <tr>
                            <th class="text-center">Codigo</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Proveedor</th>
                            <th class="text-center">isv</th>
                            <th class="text-center">descuento</th>
                            <th class="text-center">Subtotal</th>
                            <th class="text-center">total</th>
                            <th class="text-center">fecha</th>
                            <th class="text-center">Accion</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                          
                       
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