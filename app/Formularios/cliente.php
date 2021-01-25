<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <?php
     include('../mint/datatables.php');
    ?>
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
<div class="pt-5">

       
        <div  class="col-sm-12  mb-4">
        <br>
        <div class="modal-header text-rigth  white darken-2">
                <h4 class="modal-title black-text w-90 font-weight-bold py-0">Registro de Clientes</h4>
                <a id="ver"type="button" href="gestor_clientes" class="btn btn-elegant"><i class="fas fa-list-ol"></i> Lista</a>
            </div>
            <br>
         
            <form class="pt-5 centrar_form" method="POST" action="../CRUD/insertCliente.php">
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
           
           
            <button type="submit" id="_agregar" class="btn btn-elegant"><i class="fas fa-plus-square"></i> Agregar</button>
           
            <button type="reset" class="btn btn-elegant"><i class="far fa-save pr-2" aria-hidden="true"></i> Limpiar</button>
            </form>
            <br>

            </div>
           
    
 </div>

<footer>
    <?php
    include("../mint/footer.php");
    ?>
</footer>   
    <script type="text/javascript" src="../../Styles/js/popper.min.js"></script>
    <!-- <script type="text/javascript" src="../../Styles/js/jquery.min.js"></script> -->
    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>   
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="../../Scripts/FuncionesApp.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../../Scripts/datatables.js"></script>
</body>
</html>