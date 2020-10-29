<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../Styles/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../Styles/css/mdb.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/fuente.css">
    <link rel="icon" href="../Media/img/Logo.png">
    <link rel="stylesheet" href = " https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
    <script src="../Scripts/jquery.min.js"></script>
    
    <title>Galería</title>
</head>
<body>
    <header>
    <?php include('header.php');?> 
    </header>
    <main>
        <div class="view view-cascade overlay">
            <img class="card-img-top" src="../Media/img/galeria.png"
            alt="banner de galería la ruta del café">
            <a href="../Media/img/galeria.png">
            <div class="mask rgba-white-slight"></div>
            </a>
        </div>
        <h2 class="h1-responsive font-weight-bold text-center my-5">Imágenes de nuestro café diseñadas y 
            tomadas por la familia de la Ruta del café</h2>


        <div class="container col-sm-12 pt-5">

        <div class="row">
            <div class="col-md-12">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox">

                <figure class="col-md-4">
                    <a href="../Media/img/cafe_la_ruta.jpg" data-size="1600x1067">
                    <img alt="picture" src="../Media/img/cafe_la_ruta.jpg" class="img-fluid">
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="../Media/img/contacto.jpg" data-size="1600x1067">
                    <img alt="picture" src="../Media/img/contacto.jpg" class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="../Media/img/Recetas.jpeg" data-size="1600x1067">
                    <img alt="picture" src="../Media/img/Recetas.jpeg" class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="../Media/img/Recetas4.jpeg" data-size="1600x1067">
                    <img alt="picture" src="../Media/img/Recetas4.jpeg" class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="../Media/img/Recetas3.jpeg" data-size="1600x1067">
                    <img alt="picture" src="../Media/img/Recetas3.jpeg" class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="../Media/img/contacto3.jpg" data-size="1600x1067">
                    <img alt="picture" src="../Media/img/contacto3.jpg" class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="../Media/img/instagram.jpg" data-size="1600x1067">
                    <img alt="picture" src="../Media/img/instagram.jpg" class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                    <a href="../Media/img/Recetas3.jpeg" data-size="1600x1067">
                    <img alt="picture" src="../Media/img/Recetas3.jpeg" class="img-fluid" />
                    </a>
                </figure>

                <figure class="col-md-4">
                     <a href="../Media/img/footer.jpg" data-size="1600x1067">
                     <img alt="picture" src="../Media/img/footer.jpg" class="img-fluid" />
                    </a>
                </figure>

                </div>

            </div>
            </div>



        </div>
        
   </main>   
    <footer class="page-footer font-small special-color-dark pt-4">
        <?php include('footer.php');?>
    </footer>
   
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="../Styles/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../Scripts/Funciones.js"></script>
    </body>
</html>