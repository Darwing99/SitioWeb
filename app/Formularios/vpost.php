
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Publicados</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css">
    <link rel="stylesheet" href="../../Styles/form.css">
    <link rel="stylesheet" href="../Styles/fuente.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
   
</head>
<body>
<header>
<?php
  include('../mint/header.php');
  
?>
<?php

$id=$_REQUEST['var'];


$consulta="SELECT*,  date_format(created_at,'%d/%m/%y %r') as created_at FROM rpost 
            INNER JOIN rusuario on rpost.user_id=rusuario.id where rpost.id='$id'";
$consulta_resultado=mysqli_query($conn,$consulta);
while($lista=mysqli_fetch_array($consulta_resultado)){
?>

</header>
<br>
<div class="container">
  <!--Section: Content-->
  <section class="pt-5 dark-grey-text">

    <!-- Section heading -->
    <h2 class="text-center font-weight-bold mb-4 pb-2"><?php echo $lista['titulo'];?></h2>
    <!-- Section description -->
    
    <p class="text-center">Escrito por: <a><strong><?php echo $lista['nombre'];?></strong></a>, <?php echo $lista['created_at'];?></p>
          
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
<p class="lead grey-text mx-auto mb-5"><?php echo ( $lista['contenido']);?></p>
</div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->
  </div>

<footer class="fixed-button">
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
<?php }?>