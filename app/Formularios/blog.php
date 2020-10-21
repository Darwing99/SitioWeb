<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css">
    <link rel="stylesheet" href="../../Styles/form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
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
                <h4 class="modal-title black-text w-100 font-weight-bold py-2">Registro de Clientes</h4>
            </div>
            <br>
         
            <form class="centrar_form" method="POST" action="../CRUD/insertCliente.php">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputEmail4">Título de blog</label>
                <input type="text" class="form-control" name="titulo" id="_titulo">
                </div>
                <div class="form-group col-md-4">
                <label for="inputPassword4">Descripción</label>
                <input type="text" class="form-control" name="nombre" id="_nombre">
                </div> 
               
            </div>
            <div class="form-row">
                
               
                <div class="form-group col-md-4">
                <label for="inputPassword4">Descripción</label>
                <input type="Telephone" class="form-control" name="_telefono" id="_telefono">
                </div>  
                <div class="form-group col-md-4">
                <label for="inputZip">Email</label>
                <input type="email" class="form-control" name="_email" id="_email">
                </div>
            </div>
           
           
          
            </form>
            <br>


        </div>
      
        
 </div>
      
    

<footer>
    <?php
    include("../mint/footer.php");
    ?>
</footer>   
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../../Scripts/Funciones.js"></script>
    <script src="../../Scripts/clientes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>