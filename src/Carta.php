<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="La cafetería presenta uno de los mayores servicios a nivel departamental en Santa Bárbara, a la mano de emprendedores que han dado de lo mejor en ella.">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="../Media/img/Logo.png">
    <link rel="stylesheet" href="../Styles/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../Styles/css/mdb.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/fuente.css">
    <title>Coffee Shop</title>
</head>
<body>
   
    <header>
    <?php include('header.php');?> 
    </header>
  
      <div>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Hola estimados clientes!</strong> Esta es una sección dedicada a ustedes para que tenga una idea de los productos que ofrecemos.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
<!--###################################################divisor para alertas de bienvenida###################-->
<div class="col-sm-12">
<!-- Section: Blog v.2 -->
<section class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Menú</h2>
  <!-- Section description -->
  <p class="dark-grey-text w-responsive mx-auto mb-5">La Ruta Del Café es una de los lugares que permite al cliente conocer los diferentes tipos de bebida
    y comida que nuestras manos preparan con amor y responsabilidad.
  </p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        <img class="img-fluid" src="../Media/img/expreso.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Category -->
      <a href="#!" class="pink-text">
        <h6 class="font-weight-bold mb-3">Bebidas Calientes</h6>
      </a>
      
      <p>Por: <a class="font-weight-bold">Rodolfo Rivera</a></p>
      <!-- Excerpt -->
      <p class="dark-grey-text">Los mejores métodos de infusión, como una representación de exquisitas bebidas calientes.</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        <img class="img-fluid" src="../Media/img/Bebidas Frias.jpg" alt="Bebidas frias">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Category -->
      <a href="#!" class="deep-orange-text">
        <h6 class="font-weight-bold mb-3">Bebidas Frias</h6>
      </a>
      
      <p>Por: <a class="font-weight-bold">Rodolfo Rivera</a></p>
      <!-- Excerpt -->
      <p class="dark-grey-text">Disfruta de las mejores bebidas frias.</p>
      

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-0">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        <img class="img-fluid" src="../Media/img/comida.jpg" alt="Comidas en la ruta">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Category -->
      <a href="#!" class="blue-text">
        <h6 class="font-weight-bold mb-3">Deliciosos Desayunos y almuerzos</h6>
      </a>
     
      <p>Por: <a class="font-weight-bold">Rodolfo Rivera</a></p>
      <!-- Excerpt -->
      <p style="font-family:josefin sans,sans-serif" class="dark-grey-text">Disfruta de los mejores desayunos y almuerzos preparados aquí en la ruta del café</p>
      <!-- Read more button -->
      

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>

<!--Accordion wrapper-->
<div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
  <div class="card">
    <div class="card-header black lighten-3 z-depth-1" role="tab" id="heading96">
      <h5 class="text-uppercase mb-0 py-1">
        <a class="white-text font-weight-bold" data-toggle="collapse" href="#collapse96" aria-expanded="false"
          aria-controls="collapse96">
          Bebidas Calientes
        </a>
      </h5>
    </div>
    <div id="collapse96" class="collapse show" role="tabpanel" aria-labelledby="heading96"
      data-parent="#accordionEx23">
      <div class="card-body">
        <div class="row my-4">
          <div class="col-md-8">
           
            <h2 class="font-weight-bold mb-3 black-text">Hola! Bienvenidos.</h2>
            <p class="">Nuestra cafetería es uno de los sitios donde podemos disfrutar de las mejores bebidas calientes.</p>
            <p class="mb-0">Los métodos de infusión es uno de los mas apetecidos por nuestros clientes</p>
          
          </div>
          <div class="col-md-4 mt-3 pt-2">
            <div class="view z-depth-1">
              <img src="../Media/img/expreso.jpg" alt="" class="img-fluid">
            </div>
          </div>
<!-- Section: Products v.5 -->
          <section class="text-center my-5">

            <!-- Carousel Wrapper -->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
              <!-- Controls -->
              <div class="controls-top">
                <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="prev">
                  <i class="fas fa-chevron-left"></i>
                </a>
                <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example" data-slide="next">
                  <i class="fas fa-chevron-right"></i>
                </a>
              </div>
              <!-- Controls -->
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li class="primary-color active" data-target="#multi-item-example" data-slide-to="0"></li>
                <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
              </ol>
              <!-- Indicators -->
              <!-- Slides -->
              <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="carousel-item active">
                  <div class="col-md-4 mb-2">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top"
                          alt="sample photo">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card image -->
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="text-muted">
                          <h5>Shoes</h5>
                        </a>
                        <h4 class="card-title my-4">
                          <strong>
                            <a href="">Leather boots</a>
                          </strong>
                        </h4>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                          consectetur, adipisci.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                          <span class="float-left">69$</span>
                          <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                              <i class="fas fa-eye ml-3"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                              <i class="fas fa-heart ml-3"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                      <!-- Card content -->
                    </div>
                    <!-- Card -->
                  </div>
                  <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="card-img-top"
                          alt="sample photo">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card image -->
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="text-muted">
                          <h5>Jeans</h5>
                        </a>
                        <h4 class="card-title my-4">
                          <strong>
                            <a href="">Slim jeans</a>
                          </strong>
                        </h4>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                          consectetur, adipisci.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                          <span class="float-left">99$</span>
                          <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                              <i class="fas fa-eye ml-3"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                              <i class="fas fa-heart ml-3"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                      <!-- Card content -->
                    </div>
                    <!-- Card -->
                  </div>
                  <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg" class="card-img-top" alt="sample photo">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card image -->
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="text-muted">
                          <h5>Shorts</h5>
                        </a>
                        <h4 class="card-title my-4">
                          <strong>
                            <a href="">Denim shorts</a>
                          </strong>
                        </h4>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                          consectetur, adipisci.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                          <span class="float-left">49$</span>
                          <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                              <i class="fas fa-eye ml-3"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                              <i class="fas fa-heart ml-3"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                      <!-- Card content -->
                    </div>
                    <!-- Card -->
                  </div>
                </div>
                <!-- First slide -->
                <!-- Second slide -->
                <div class="carousel-item">
                  <div class="col-md-4 mb-2">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="card-img-top"
                          alt="sample photo">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card image -->
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="text-muted">
                          <h5>Accessories</h5>
                        </a>
                        <h4 class="card-title my-4">
                          <strong>
                            <a href="">Summer hat</a>
                          </strong>
                        </h4>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                          consectetur, adipisci.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                          <span class="float-left">39$</span>
                          <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                              <i class="fas fa-eye ml-3"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                              <i class="fas fa-heart ml-3"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                      <!-- Card content -->
                    </div>
                    <!-- Card -->
                  </div>
                  <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="card-img-top"
                          alt="sample photo">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card image -->
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="text-muted">
                          <h5>Shoes</h5>
                        </a>
                        <h4 class="card-title my-4">
                          <strong>
                            <a href="">Black heels</a>
                          </strong>
                        </h4>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                          consectetur, adipisci.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                          <span class="float-left">79$</span>
                          <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                              <i class="fas fa-eye ml-3"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                              <i class="fas fa-heart ml-3"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                      <!-- Card content -->
                    </div>
                    <!-- Card -->
                  </div>
                  <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="card-img-top"
                          alt="sample photo">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card image -->
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="text-muted">
                          <h5>Outerwear</h5>
                        </a>
                        <h4 class="card-title my-4">
                          <strong>
                            <a href="">Black jacket</a>
                          </strong>
                        </h4>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                          consectetur, adipisci.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                          <span class="float-left">149$</span>
                          <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                              <i class="fas fa-eye ml-3"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                              <i class="fas fa-heart ml-3"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                      <!-- Card content -->
                    </div>
                    <!-- Card -->
                  </div>
                </div>
                <!-- Second slide -->
                <!--Third slide -->
                <div class="carousel-item">
                  <div class="col-md-4 mb-2">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="card-img-top"
                          alt="sample photo">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card image -->
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="text-muted">
                          <h5>Accessories</h5>
                        </a>
                        <h4 class="card-title my-4">
                          <strong>
                            <a href="">Leather bag</a>
                          </strong>
                        </h4>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                          consectetur, adipisci.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                          <span class="float-left">29$</span>
                          <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                              <i class="fas fa-eye ml-3"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                              <i class="fas fa-heart ml-3"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                      <!-- Card content -->
                    </div>
                    <!-- Card -->
                  </div>
                  <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="card-img-top"
                          alt="sample photo">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card image -->
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="text-muted">
                          <h5>Accessories</h5>
                        </a>
                        <h4 class="card-title my-4">
                          <strong>
                            <a href="">Leather belt</a>
                          </strong>
                        </h4>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                          consectetur, adipisci.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                          <span class="float-left">89$</span>
                          <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                              <i class="fas fa-eye ml-3"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                              <i class="fas fa-heart ml-3"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                      <!-- Card content -->
                    </div>
                    <!-- Card -->
                  </div>
                  <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                    <!-- Card -->
                    <div class="card card-cascade narrower card-ecommerce">
                      <!-- Card image -->
                      <div class="view view-cascade overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="card-img-top"
                          alt="sample photo">
                        <a>
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card image -->
                      <!-- Card content -->
                      <div class="card-body card-body-cascade text-center">
                        <!-- Category & Title -->
                        <a href="" class="text-muted">
                          <h5>Shoes</h5>
                        </a>
                        <h4 class="card-title my-4">
                          <strong>
                            <a href="">Sneakers</a>
                          </strong>
                        </h4>
                        <!-- Description -->
                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                          consectetur, adipisci.
                        </p>
                        <!-- Card footer -->
                        <div class="card-footer px-1">
                          <span class="float-left">129$</span>
                          <span class="float-right">
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                              <i class="fas fa-eye ml-3"></i>
                            </a>
                            <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                              <i class="fas fa-heart ml-3"></i>
                            </a>
                          </span>
                        </div>
                      </div>
                      <!-- Card content -->
                    </div>
                    <!-- Card -->
                  </div>
                </div>
                <!--Third slide -->
              </div>
              <!-- Slides -->
            </div>
            <!-- Carousel Wrapper -->

          </section>
          <!-- Section: Products v.5 -->
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header info-color-dark lighten-3 z-depth-1" role="tab" id="heading97">
      <h5 class="text-uppercase mb-0 py-1">
        <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse97"
          aria-expanded="false" aria-controls="collapse97">
          Bebidas Frias
        </a>
      </h5>
    </div>
    <div id="collapse97" class="collapse" role="tabpanel" aria-labelledby="heading97"
      data-parent="#accordionEx23">
      <div class="card-body">
        <div class="row my-4">
          <div class="col-md-8">
          <h2 class="font-weight-bold mb-3 black-text">Hola! Bienvenidos.</h2>
            <p class="">Nuestra cafetería es uno de los sitios donde podemos disfrutar de las mejores bebidas frias.</p>
            <p class="mb-0">Aquí podrá degustar de bebidas como granitas y otras bebidas favoritas de los cliente</p>
          
            
        </div>
          <div class="col-md-4 mt-3 pt-2">
            <div class="view z-depth-1">
              <img class="img-fluid" src="../Media/img/Bebidas Frias.jpg" alt="bebidas frias">
            </div>
          </div>
                    <!-- Section: Products v.5 -->
          <section class="text-center my-5">

          <!-- Carousel Wrapper -->
          <div id="multi-item-example1" class="carousel slide carousel-multi-item" data-ride="carousel">
            <!-- Controls -->
            <div class="controls-top">
              <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example1" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
              </a>
              <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example1" data-slide="next">
                <i class="fas fa-chevron-right"></i>
              </a>
            </div>
            <!-- Controls -->
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li class="primary-color active" data-target="#multi-item-example1" data-slide-to="0"></li>
              <li class="primary-color" data-target="#multi-item-example1" data-slide-to="1"></li>
              <li class="primary-color" data-target="#multi-item-example1" data-slide-to="2"></li>
            </ol>
            <!-- Indicators -->
            <!-- Slides -->
            <div class="carousel-inner" role="listbox">
              <!-- First slide -->
              <div class="carousel-item active">
                <div class="col-md-4 mb-2">
                  <!-- Card -->
                  <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top"
                        alt="sample photo">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <!-- Category & Title -->
                      <a href="" class="text-muted">
                        <h5>Shoes</h5>
                      </a>
                      <h4 class="card-title my-4">
                        <strong>
                          <a href="">Leather boots</a>
                        </strong>
                      </h4>
                      <!-- Description -->
                      <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci.
                      </p>
                      <!-- Card footer -->
                      <div class="card-footer px-1">
                        <span class="float-left">69$</span>
                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                            <i class="fas fa-eye ml-3"></i>
                          </a>
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                            <i class="fas fa-heart ml-3"></i>
                          </a>
                        </span>
                      </div>
                    </div>
                    <!-- Card content -->
                  </div>
                  <!-- Card -->
                </div>
                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                  <!-- Card -->
                  <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="card-img-top"
                        alt="sample photo">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <!-- Category & Title -->
                      <a href="" class="text-muted">
                        <h5>Jeans</h5>
                      </a>
                      <h4 class="card-title my-4">
                        <strong>
                          <a href="">Slim jeans</a>
                        </strong>
                      </h4>
                      <!-- Description -->
                      <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci.
                      </p>
                      <!-- Card footer -->
                      <div class="card-footer px-1">
                        <span class="float-left">99$</span>
                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                            <i class="fas fa-eye ml-3"></i>
                          </a>
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                            <i class="fas fa-heart ml-3"></i>
                          </a>
                        </span>
                      </div>
                    </div>
                    <!-- Card content -->
                  </div>
                  <!-- Card -->
                </div>
                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                  <!-- Card -->
                  <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg" class="card-img-top" alt="sample photo">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <!-- Category & Title -->
                      <a href="" class="text-muted">
                        <h5>Shorts</h5>
                      </a>
                      <h4 class="card-title my-4">
                        <strong>
                          <a href="">Denim shorts</a>
                        </strong>
                      </h4>
                      <!-- Description -->
                      <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci.
                      </p>
                      <!-- Card footer -->
                      <div class="card-footer px-1">
                        <span class="float-left">49$</span>
                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                            <i class="fas fa-eye ml-3"></i>
                          </a>
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                            <i class="fas fa-heart ml-3"></i>
                          </a>
                        </span>
                      </div>
                    </div>
                    <!-- Card content -->
                  </div>
                  <!-- Card -->
                </div>
              </div>
              <!-- First slide -->
              <!-- Second slide -->
              <div class="carousel-item">
                <div class="col-md-4 mb-2">
                  <!-- Card -->
                  <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="card-img-top"
                        alt="sample photo">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <!-- Category & Title -->
                      <a href="" class="text-muted">
                        <h5>Accessories</h5>
                      </a>
                      <h4 class="card-title my-4">
                        <strong>
                          <a href="">Summer hat</a>
                        </strong>
                      </h4>
                      <!-- Description -->
                      <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci.
                      </p>
                      <!-- Card footer -->
                      <div class="card-footer px-1">
                        <span class="float-left">39$</span>
                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                            <i class="fas fa-eye ml-3"></i>
                          </a>
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                            <i class="fas fa-heart ml-3"></i>
                          </a>
                        </span>
                      </div>
                    </div>
                    <!-- Card content -->
                  </div>
                  <!-- Card -->
                </div>
                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                  <!-- Card -->
                  <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="card-img-top"
                        alt="sample photo">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <!-- Category & Title -->
                      <a href="" class="text-muted">
                        <h5>Shoes</h5>
                      </a>
                      <h4 class="card-title my-4">
                        <strong>
                          <a href="">Black heels</a>
                        </strong>
                      </h4>
                      <!-- Description -->
                      <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci.
                      </p>
                      <!-- Card footer -->
                      <div class="card-footer px-1">
                        <span class="float-left">79$</span>
                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                            <i class="fas fa-eye ml-3"></i>
                          </a>
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                            <i class="fas fa-heart ml-3"></i>
                          </a>
                        </span>
                      </div>
                    </div>
                    <!-- Card content -->
                  </div>
                  <!-- Card -->
                </div>
                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                  <!-- Card -->
                  <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="card-img-top"
                        alt="sample photo">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <!-- Category & Title -->
                      <a href="" class="text-muted">
                        <h5>Outerwear</h5>
                      </a>
                      <h4 class="card-title my-4">
                        <strong>
                          <a href="">Black jacket</a>
                        </strong>
                      </h4>
                      <!-- Description -->
                      <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci.
                      </p>
                      <!-- Card footer -->
                      <div class="card-footer px-1">
                        <span class="float-left">149$</span>
                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                            <i class="fas fa-eye ml-3"></i>
                          </a>
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                            <i class="fas fa-heart ml-3"></i>
                          </a>
                        </span>
                      </div>
                    </div>
                    <!-- Card content -->
                  </div>
                  <!-- Card -->
                </div>
              </div>
              <!-- Second slide -->
              <!--Third slide -->
              <div class="carousel-item">
                <div class="col-md-4 mb-2">
                  <!-- Card -->
                  <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="card-img-top"
                        alt="sample photo">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <!-- Category & Title -->
                      <a href="" class="text-muted">
                        <h5>Accessories</h5>
                      </a>
                      <h4 class="card-title my-4">
                        <strong>
                          <a href="">Leather bag</a>
                        </strong>
                      </h4>
                      <!-- Description -->
                      <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci.
                      </p>
                      <!-- Card footer -->
                      <div class="card-footer px-1">
                        <span class="float-left">29$</span>
                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                            <i class="fas fa-eye ml-3"></i>
                          </a>
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                            <i class="fas fa-heart ml-3"></i>
                          </a>
                        </span>
                      </div>
                    </div>
                    <!-- Card content -->
                  </div>
                  <!-- Card -->
                </div>
                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                  <!-- Card -->
                  <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="card-img-top"
                        alt="sample photo">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <!-- Category & Title -->
                      <a href="" class="text-muted">
                        <h5>Accessories</h5>
                      </a>
                      <h4 class="card-title my-4">
                        <strong>
                          <a href="">Leather belt</a>
                        </strong>
                      </h4>
                      <!-- Description -->
                      <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci.
                      </p>
                      <!-- Card footer -->
                      <div class="card-footer px-1">
                        <span class="float-left">89$</span>
                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                            <i class="fas fa-eye ml-3"></i>
                          </a>
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                            <i class="fas fa-heart ml-3"></i>
                          </a>
                        </span>
                      </div>
                    </div>
                    <!-- Card content -->
                  </div>
                  <!-- Card -->
                </div>
                <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                  <!-- Card -->
                  <div class="card card-cascade narrower card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="card-img-top"
                        alt="sample photo">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                      <!-- Category & Title -->
                      <a href="" class="text-muted">
                        <h5>Shoes</h5>
                      </a>
                      <h4 class="card-title my-4">
                        <strong>
                          <a href="">Sneakers</a>
                        </strong>
                      </h4>
                      <!-- Description -->
                      <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        consectetur, adipisci.
                      </p>
                      <!-- Card footer -->
                      <div class="card-footer px-1">
                        <span class="float-left">129$</span>
                        <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                            <i class="fas fa-eye ml-3"></i>
                          </a>
                          <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                            <i class="fas fa-heart ml-3"></i>
                          </a>
                        </span>
                      </div>
                    </div>
                    <!-- Card content -->
                  </div>
                  <!-- Card -->
                </div>
              </div>
              <!--Third slide -->
            </div>
            <!-- Slides -->
          </div>
          <!-- Carousel Wrapper -->

          </section>
<!-- Section: Products v.5 -->
      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header unique-color lighten-3 z-depth-1" role="tab" id="heading98">
      <h5 class="text-uppercase mb-0 py-1">
        <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse98"
          aria-expanded="false" aria-controls="collapse98">
          Desayunos y Almuerzos
        </a>
      </h5>
    </div>
    <div id="collapse98" class="collapse" role="tabpanel" aria-labelledby="heading98"
      data-parent="#accordionEx23">
      <div class="card-body">
        <div class="row my-4">
          <div class="col-md-8">
            <h2 class="font-weight-bold mb-3 black-text">Hola! Bienvenidos.</h2>
            <p class="">En este apartado pueden ver varios de lo platillos que en la Ruta del café ofrecemos.</p>
          </div>
          <div class="col-md-4 mt-3 pt-2">
            <div class="view z-depth-1">
              <img src="../Media/img/comida.jpg" alt="desayunos y almuerzos" class="img-fluid">
            </div>
          </div>
          <!-- Section: Products v.5 -->
          <section class="text-center my-5">

        <!-- Carousel Wrapper -->
        <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">
          <!-- Controls -->
          <div class="controls-top">
            <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example2" data-slide="prev">
              <i class="fas fa-chevron-left"></i>
            </a>
            <a class="btn-floating primary-color waves-effect waves-light" href="#multi-item-example2" data-slide="next">
              <i class="fas fa-chevron-right"></i>
            </a>
          </div>
          <!-- Controls -->
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li class="primary-color active" data-target="#multi-item-example2" data-slide-to="0"></li>
            <li class="primary-color" data-target="#multi-item-example2" data-slide-to="1"></li>
            <li class="primary-color" data-target="#multi-item-example2" data-slide-to="2"></li>
          </ol>
          <!-- Indicators -->
          <!-- Slides -->
          <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="carousel-item active">
              <div class="col-md-4 mb-2">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top"
                      alt="sample photo">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Category & Title -->
                    <a href="" class="text-muted">
                      <h5>Shoes</h5>
                    </a>
                    <h4 class="card-title my-4">
                      <strong>
                        <a href="">Leather boots</a>
                      </strong>
                    </h4>
                    <!-- Description -->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci.
                    </p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                      <span class="float-left">69$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                          <i class="fas fa-eye ml-3"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                          <i class="fas fa-heart ml-3"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="card-img-top"
                      alt="sample photo">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Category & Title -->
                    <a href="" class="text-muted">
                      <h5>Jeans</h5>
                    </a>
                    <h4 class="card-title my-4">
                      <strong>
                        <a href="">Slim jeans</a>
                      </strong>
                    </h4>
                    <!-- Description -->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci.
                    </p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                      <span class="float-left">99$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                          <i class="fas fa-eye ml-3"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                          <i class="fas fa-heart ml-3"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg" class="card-img-top" alt="sample photo">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Category & Title -->
                    <a href="" class="text-muted">
                      <h5>Shorts</h5>
                    </a>
                    <h4 class="card-title my-4">
                      <strong>
                        <a href="">Denim shorts</a>
                      </strong>
                    </h4>
                    <!-- Description -->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci.
                    </p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                      <span class="float-left">49$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                          <i class="fas fa-eye ml-3"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                          <i class="fas fa-heart ml-3"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
            </div>
            <!-- First slide -->
            <!-- Second slide -->
            <div class="carousel-item">
              <div class="col-md-4 mb-2">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="card-img-top"
                      alt="sample photo">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Category & Title -->
                    <a href="" class="text-muted">
                      <h5>Accessories</h5>
                    </a>
                    <h4 class="card-title my-4">
                      <strong>
                        <a href="">Summer hat</a>
                      </strong>
                    </h4>
                    <!-- Description -->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci.
                    </p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                      <span class="float-left">39$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                          <i class="fas fa-eye ml-3"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                          <i class="fas fa-heart ml-3"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="card-img-top"
                      alt="sample photo">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Category & Title -->
                    <a href="" class="text-muted">
                      <h5>Shoes</h5>
                    </a>
                    <h4 class="card-title my-4">
                      <strong>
                        <a href="">Black heels</a>
                      </strong>
                    </h4>
                    <!-- Description -->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci.
                    </p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                      <span class="float-left">79$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                          <i class="fas fa-eye ml-3"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                          <i class="fas fa-heart ml-3"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="card-img-top"
                      alt="sample photo">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Category & Title -->
                    <a href="" class="text-muted">
                      <h5>Outerwear</h5>
                    </a>
                    <h4 class="card-title my-4">
                      <strong>
                        <a href="">Black jacket</a>
                      </strong>
                    </h4>
                    <!-- Description -->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci.
                    </p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                      <span class="float-left">149$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                          <i class="fas fa-eye ml-3"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                          <i class="fas fa-heart ml-3"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
            </div>
            <!-- Second slide -->
            <!--Third slide -->
            <div class="carousel-item">
              <div class="col-md-4 mb-2">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="card-img-top"
                      alt="sample photo">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Category & Title -->
                    <a href="" class="text-muted">
                      <h5>Accessories</h5>
                    </a>
                    <h4 class="card-title my-4">
                      <strong>
                        <a href="">Leather bag</a>
                      </strong>
                    </h4>
                    <!-- Description -->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci.
                    </p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                      <span class="float-left">29$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                          <i class="fas fa-eye ml-3"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                          <i class="fas fa-heart ml-3"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="card-img-top"
                      alt="sample photo">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Category & Title -->
                    <a href="" class="text-muted">
                      <h5>Accessories</h5>
                    </a>
                    <h4 class="card-title my-4">
                      <strong>
                        <a href="">Leather belt</a>
                      </strong>
                    </h4>
                    <!-- Description -->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci.
                    </p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                      <span class="float-left">89$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                          <i class="fas fa-eye ml-3"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                          <i class="fas fa-heart ml-3"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
              <div class="col-md-4 mb-2 clearfix d-none d-md-block">
                <!-- Card -->
                <div class="card card-cascade narrower card-ecommerce">
                  <!-- Card image -->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="card-img-top"
                      alt="sample photo">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!-- Card image -->
                  <!-- Card content -->
                  <div class="card-body card-body-cascade text-center">
                    <!-- Category & Title -->
                    <a href="" class="text-muted">
                      <h5>Shoes</h5>
                    </a>
                    <h4 class="card-title my-4">
                      <strong>
                        <a href="">Sneakers</a>
                      </strong>
                    </h4>
                    <!-- Description -->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                      consectetur, adipisci.
                    </p>
                    <!-- Card footer -->
                    <div class="card-footer px-1">
                      <span class="float-left">129$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look">
                          <i class="fas fa-eye ml-3"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                          <i class="fas fa-heart ml-3"></i>
                        </a>
                      </span>
                    </div>
                  </div>
                  <!-- Card content -->
                </div>
                <!-- Card -->
              </div>
            </div>
            <!--Third slide -->
          </div>
          <!-- Slides -->
        </div>
        <!-- Carousel Wrapper -->

        </section>
<!-- Section: Products v.5 -->
      </div>
    </div>
  </div>
</div>

<br>
<!--Accordion wrapper-->
<footer class="page-footer font-small special-color-dark pt-4">
      <?php include('footer.php');?>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../Styles/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>$(function () {$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");});</script>
    <script src="../Scripts/Funciones.js"></script>
  </body>
</html>