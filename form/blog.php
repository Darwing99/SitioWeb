
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

    <title>Blog</title>
</head>
<body >
 
    <header>
    <?php include('header.php'); ?>       
    </header>
   
    <div  class="pt-2 margenes card-deck">
    <!-- Section: Blog v.3 -->
   <section class="col-md-12 my-5">

 
    <h2 class="text-gray h1-responsive font-weight-bold text-center my-5">Artículos Recientes</h2>
 
    <p class="text-center dark-grey-text w-responsive mx-auto mb-5"></p>

    <?php
    include("../app/BD/conexion.php");

    $consulta="SELECT*,rpost.id as id_post,  date_format(created_at,'%d/%m/%y %r') as created_at FROM rpost INNER JOIN rusuario on rpost.user_id=rusuario.id where rpost.estado='1'";
    $consulta_resultado=mysqli_query($conn,$consulta);
    while($lista=mysqli_fetch_array($consulta_resultado)){

    ?>
    <br>
    <div class="col-md-12 row">

    <!-- Grid column -->
    <div class="col-md-5 col-xl-4">

    <!-- Featured image -->
    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
    <img class="img-fluid" src="data:image/jpg; base64,<?php echo base64_encode($lista['imagen']); ?>" alt="Sample image">

        <a>
        <div class="mask rgba-white-slight"></div>
        </a>
    </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

    <!-- Post title -->
    <h3 class="font-weight-bold mb-3"><strong> <?php echo $lista['titulo']; ?></strong></h3>
    <!-- Excerpt -->
    <p class="dark-grey-text"><?php echo $lista['subtitulo']; ?></p>
    <!-- Post data -->
    <p class="">by <a class="font-weight-bold"><?php echo $lista['nombre']; ?></a>,  <?php echo $lista['created_at']; ?></p>
    <!-- Read more button -->
    <a href="post?var=<?php echo $lista['id_post']; ?>" class="btn btn-success btn-md">Ver más</a>

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->
    <?php
    }
    ?>

    <hr class="my-5">
    </section>
    <!-- Grid row -->
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
