
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <script src="../datatables/DataTables/jQuery/jquery-3.3.1.min.js"></script>
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
<div class ="d-flex justify-content-center  mb-4">
<div  class="col-md-12 "> 
      
        <br>
        <div class="pt-5 modal-header text-rigth  white darken-2 ">
         <h4 class="modal-title black-text w-70 font-weight-bold py-0">Registrar Compra</h4>
 
          <div class="col-md-3 col-10">
              
              <div class="md-form">
                
                  <input type="date" name="fechai" id="fechai" class="form-control">
                  
              </div>
          </div>
        </div>
         
        </div>
     

</div>
<section class="p-5 seccion_descripcion my-0">
    <form id="form_encuesta" name="form_encuesta">
     
        <div class="row">

        <div class="col-lg-12">
            

            <!-- Grid row -->
            <div class="row mb-3">
           
            <div class="col-md-5 col-10">
                
                <h5 class="font-weight-bold mb-3">Proveedor de productos</h5>
                <div class="md-form">
                    <input type="text" name="nombre" id="nombre" required class="form-control">
                    <label for="nombre">name</label>
                </div>
            </div>
          
            <div class="col-md-5 col-10">
                <h5 class="font-weight-bold mb-3">Descripción de producto</h5>
                <div class="md-form  pink-textarea active-pink-textarea">
                    <textarea id="descripcion" name="descripcion" required class="md-textarea form-control" rows="0"></textarea>
                    <label for="descripcion">Description</label>
                </div>
            </div>
            </div>
        
            <div class="row mb-2">
            <div class="col-md-3 col-10">
                
                <h5 class="font-weight-bold mb-3">Subtotal</h5>
                <div class="md-form">
                    <input type="number" name="subtotal" id="subtotal" class="form-control">
                    <label for="nombre">Subtotal</label>
                </div>
            </div>
            <div class="col-md-3 col-10">
                
                <h5 class="font-weight-bold mb-3">Descuento</h5>
                <div class="md-form">
                    <input type="number" name="descuento" id="descuento" class="form-control">
                    <label for="nombre">Descuento</label>
                </div>
            </div>
            <div class="col-md-3 col-10">
                
                <h5 class="font-weight-bold mb-3">Impuesto</h5>
                <div class="md-form">
                    <input type="number" name="impuesto" id="impuesto" class="form-control">
                    <label for="nombre">Impuesto</label>
                </div>
            </div>
            <div class="col-md-3 col-10">
                
                <h5 class="font-weight-bold mb-3">Total</h5>
                <div class="md-form">
                    <input type="number" name="total" id="total" class="form-control" required>
                    <label for="nombre">Total</label>
                </div>
            </div>
            </div>
          
           
        </div>
      
        </div>
        <button type="button" onclick="return insertar_encuestas();" class="btn btn-success">Guardar</button>
        <a type="button" href="gestor_compras"  class="btn btn-success">Compras totales</a>
        <!-- Grid row -->
        <hr class="pt-5">
    </form>
</section>
</body>   



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
    
    <script src="../../Scripts/compras.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>