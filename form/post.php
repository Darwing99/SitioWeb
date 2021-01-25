<?php
include("../app/BD/conexion.php");
$id=$_REQUEST['var'];


$consulta="SELECT*,  date_format(created_at,'%d/%m/%y %r') as created_at FROM rpost 
            INNER JOIN rusuario on rpost.user_id=rusuario.id where rpost.id='$id'";
$consulta_resultado=mysqli_query($conn,$consulta);
while($lista=mysqli_fetch_array($consulta_resultado)){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="La cafetería presenta uno de los mayores servicios a nivel departamental en Santa Bárbara, a la mano de emprendedores que han dado de lo mejor en ella.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Media/img/Logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../Styles/css/mdb.min.css" >
    <link rel="stylesheet" href="../Styles/fuente.css">
    <script src="../Scripts/jquery.min.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>

    <title>Blog</title>
</head>
<body >
 
    <header>
    <?php include('header.php'); ?>       
    </header>
    <div class="container">
  <!--Section: Content-->
  <section class="pt-5 dark-grey-text">

    <!-- Section heading -->
    <h2 class="text-center font-weight-bold mb-4 pb-2"><?php echo $lista['titulo'];?></h2>
    <!-- Section description -->
    
    <p class="text-left">Escrito por: <a><strong><?php echo $lista['nombre'];?></strong></a>, <?php echo $lista['created_at'];?></p>
          
    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-5 text-center text-lg-left">
      <img class="img-fluid" src="data:image/jpg; base64,<?php echo base64_encode($lista['imagen']); ?>" alt="Sample image">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7">

        <!-- Grid row -->
        <div class="row mb-3">

          <!-- Grid column -->
          
          <!-- Grid column -->
          <div class="col-xl-10 col-md-11 col-10">
            
            <p class="grey-text"><?php echo $lista['subtitulo'];?></p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

    

      </div>
      <!--Grid column-->

    </div>
    <div class="pt-5">
    <p class="lead grey-text mx-auto mb-5"><?php echo $lista['contenido'];?></p>
    </div>
        <!-- Grid row -->

  </section>
  <!--Section: Content-->
  </div>
 
   
    <div>
      <?php include('footer.php');?>
    </div>
    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="../Styles/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../Scripts/tinymce/js/tinymce.min.js"></script>

    <script src="../Scripts/Funciones.js"></script>
    </body>
</html>
<?php }?>