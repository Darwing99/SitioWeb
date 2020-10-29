<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="La cafetería presenta uno de los mayores servicios a nivel departamental en Santa Bárbara, a la mano de emprendedores que han dado de lo mejor en ella.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Darwing Hernandez Castellanos">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="Media/img/Logo.png">
    <link rel="stylesheet" href="Styles/css/bootstrap.min.css" >
    <link rel="stylesheet" href="Styles/css/mdb.min.css" >
    <link rel="stylesheet" href="Styles/fuente.css">
    <title>La ruta del café</title>
</head>
<body>
 
    <header>
      <nav class="navbar navbar-dark red" id="top-section">
        <a class="navbar-brand" href="#">
          <img src="Media/img/Logo.png" height="84" alt="La ruta">
        </a>
      </nav>
      <nav class="nav navbar fixed-top pt-9" >
      <div class="logo"> <a class="a" href="#"><img class="logotipo" src="Media/img/Logo.png" height="100" class="d-inline-block align-top" alt="logo de la inveruta" style="border-radius: 50%;"></a>
     
      </div>
      <label  for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input class="input" type="checkbox" id="btn">
      <ul class="ul">
        <li class="li">   
          <label for="btn-1" class="fuente_nav label">Sobre Nosotros <i class="fas fa-chevron-circle-down"></i></label>
          <a class="fuente_nav a" href="src/sobre_nosotros.php">Sobre Nosotros</a>
          <input class="input" type="checkbox" id="btn-1">
          <ul  class="ul">
            <li class="li"><a class="fuente_nav a"  href="#">Nuestra Historia</a></li>
            <li class="li"><a class="fuente_nav a"  href="#">Misión</a></li>
            <li class="li"><a class="fuente_nav a"  href="#">Visión</a></li>
          </ul>
      </li>
        <li class="li">
          <label for="btn-2" class=" fuente_nav label">Servicios <i class="fas fa-chevron-circle-down"></i></label>
          <a class="a fuente_nav" href="src/servicios.php">Servicios</a>
          <input class="input" type="checkbox" id="btn-2">
          <ul  class="ul">
            <li class="li"><a class="fuente_nav a" href="#">Finca Tour</a></li>
            <li class="li"><a class="fuente_nav a" href="#">Ubicación</a></li>
            <li class="li"><a class="fuente_nav a"  href="#">Recepción de Información</a></li>
          </ul>
        </li>
        <li class="li">
          <label  for="btn-3" class="fuente_nav label">Coffee Shop <i class="fas fa-chevron-circle-down"></i></label>
          <a class="fuente_nav a "href="src/carta.php">Coffee Shop</a>
          <input class="input" type="checkbox" id="btn-3">
          <ul  class="ul">
            <li class="li"><a class="fuente_nav a" href="#">Bebidas Calientes</a></li>
            <li class="li"><a class="fuente_nav a" href="#">Bebidas Frias</a></li>
            <li class="li"><a class="fuente_nav a" href="#">Desayunos y almuerzos</a></li>
          </ul>
        </li>
        <li class="li">
          <label for="btn-5" class=" fuente_nav label">Finca <i class="fas fa-chevron-circle-down"></i></label>
          <a class="a fuente_nav" href="src/finca.php">Finca</a>
          <input class="input" type="checkbox" id="btn-5">
          <ul  class="ul">
            <li class="li"><a class="fuente_nav a" href="#">Finca Tour</a></li>
            <li class="li"><a class="fuente_nav a" href="#">Ubicación</a></li>
            <li class="li"><a class="fuente_nav a"  href="#">Recepción de Información</a></li>
          </ul>
        </li>
        <li class="li">
        <label for="btn-4" class="fuente_nav label">Aprende Con Nosotros<i class="fas fa-chevron-circle-down"></i></label>
          <a class="fuente_nav a"href="#">Aprende Con Nosotros</a>
          <input class="input" type="checkbox" id="btn-4">
          <ul  class="ul">
            <li class="li" ><a class="fuente_nav a" href="src/recetas.php">Recetas</a></li>
            <li class="li"><a class="fuente_nav a" href="src/videotutoriales.php">VideoTutoriales</a></li>
          </ul>
        </li>
        <li class="li"><a class="fuente_nav a" href="src/contactos.php">Contactos</a></li>
        <li class="li"><a class="fuente_nav a" href="src/galeria.php">Galería</a></li>
        <li class="li"><a class="fuente_nav a" href="src/blog.php">Blog</a></li>
        <li class="li"><a class="fuente_nav a" href="app/Formularios/login.php">CoffeApp</a></li>
      </ul>
      
    </nav>
    
    

    </header>
  
  <div class="Slider">
      <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
              <img src="Media/img/banner7.png" class="d-block w-100" alt="La ruta del café">
              </div>
              <div class="carousel-item">
              <img src="Media/img/banner6.png" class="d-block w-100" alt="La ruta del café">
              </div>
              <div class="carousel-item">
              <img src="Media/img/banner.png" class="d-block w-100" alt="La ruta del café">
              </div> 
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>
  <hr>
  <section>

    <div class="row mx-1">

        <!--Grid column-->
        <div class="col-md-12 mb-4">
            <div class="card card-image" style="background-image: url(Media/img/fondo_index.jpg);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h6 class="red-text"><i class="fas fa-coffee"></i><strong> Coffee</strong></h6>
                        <h3 class="card-title py-3 font-weight-bold"><strong>Disfruta de un delicioso Café en la Ruta</strong></h3>
                        <p class="pb-3" alt="presentación de la ruta del café">Entre los muchos lujos de la mesa, el café puede ser considerado como uno de los más valiosos. El atisba la alegría sin intoxicación, y el placentero flujo de espíritus que ocasiona nunca es seguido de tristeza, languidez o debilidad</p>
                        <a href="https://www.facebook.com/628851103865100/" class="btn btn-primary btn-rounded"><i class="fab fa-facebook-f left"></i> Contacto Facebook</a>
                        <a href="https://api.whatsapp.com/send?phone=+50433087022&text=Hola!%20Quiero%20hacer%20una%20compra!" class="btn success-color-dark btn-rounded"><i class="fab fa-whatsapp left"></i> Contacto Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
  </section>  

  <div style="padding: 20px;">
    <section class="my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Nuestras bebidas y platillos favoritos que enamoran a nuestros clientes</h2>
    <!-- Section description -->
   
    <!-- Grid row -->
    <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid" src="Media/img/comida.jpg" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

        <!-- Category -->
        <a href="#!" class="green-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-utensils pr-2"></i>breakfasts and lunches</h6>
        </a>
        <!-- Post title -->
        <h3 class="subtitulo font-weight-bold mb-3"><strong>Desayunos y almuerzos</strong></h3>
        <!-- Excerpt -->
        <p class="fuente">La ruta del café ofrece platillos exquisitos en desayunos y almuerzos, una combinación especial que la puedes hacer con un aromático café.</p>
        <!-- Post data -->
        <!-- Read more button -->
        <a class="btn btn-success btn-md">Ver Mas</a>

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">

    <!-- Grid row -->
    <div class="row">

    <!-- Grid column -->
    <div class="col-lg-7">

        <!-- Category -->
        <a href="#!" class="pink-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-image pr-2"></i>Cold drinks</h6>
        </a>
        <!-- Post title -->
        <h3 class="subtitulo font-weight-bold mb-3"><strong>Bebidas Frias</strong></h3>
        <!-- Excerpt -->
        <p class="fuente">En tiempos donde la temperatura está ardiente los invitamos a desgustar las bebidas frias, a base de café y otros ingredientes que tenemos gracias a nuestros proveedores.</p>
        <!-- Post data -->
       
        <!-- Read more button -->
        <a class="btn btn-pink btn-md mb-lg-0 mb-4">Ver Mas</a>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-5">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-2">
        <img class="img-fluid" src="Media/img/Bebidas Frias.jpg" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">

    <!-- Grid row -->
    <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
        <img class="img-fluid"  src="Media/img/fondo.jpg" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

        <!-- Category -->
        <a href="#!" class="indigo-text">
        <h6 class="font-weight-bold mb-3"><i class="fas fa-suitcase pr-2"></i>Hot Drinks</h6>
        </a>
        <!-- Post title -->
        <h3 class="subtitulo font-weight-bold mb-3"><strong>Bebidas Calientes</strong></h3>
        <!-- Excerpt -->
        <p class="fuente">Para los amantes de bebidas calientes, tenemos una carta especial que ayudarán a deleitar y saborear en compañía de seres queridos.</p>
        <!-- Post data -->
        
        <!-- Read more button -->
        <a class="btn btn-indigo btn-md">Ver más</a>

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
<!-- Section: Blog v.1 -->

    
</div>
   <!--============Historia de algunas cafeterias famosas en el mundo==================-->
<hr>   
<!-- Footer -->
<!-- Footer -->
<!-- Load Facebook SDK for JavaScript -->


<footer class="page-footer font-small special-color-dark pt-4">

  <div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;">
    <a href="#top-section" class="btn-floating btn-large warning-color-dark">
    <i class="fas fa-angle-up"></i>
    </a>
  </div>


  <!-- Footer Elements -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">
          
       
      
        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center  ">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1 fb-ic" href="https://www.facebook.com/628851103865100/">
              <i class="fab fa-facebook-f"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
              <i class="fab fa-instagram"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1" href="mailto:infoazhn@gmail.com">
              <i class="fab fa-google-plus-g"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
              <i class="fab fa-linkedin-in"> </i>
            </a>
          </li>
        </ul>
      </div>

  </div>
  </div>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="mailto:darwing01000100@gmail.com">Darwing Hernandez</a>
  </div>
  <!-- Copyright -->
</footer>
 
    
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="Styles/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- <script>$(function () {$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");});</script> -->
    <script src="Scripts/Funciones.js"></script>
</body>
</html>