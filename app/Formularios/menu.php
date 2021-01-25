<?php
// if($_SESSION['rol']!='1'){
//   header("location: ventas.php");
// }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css" >
    <link rel="stylesheet" href="../../Styles/form.css"> 
   
    
    <title>Menu</title>
</head>
<body>
    <header>
      <?php
      include('../mint/header.php');
      ?>
    </header>
    <main class="pt-5">

    
      <form id="hero-container" class="position-relative text-light"> 
        <div id="hero-background"></div>
          <div id="hero-content" class="container h-100">
            <div class="row no-gutters h-100 d-flex">
              <div id="hero-text" class="col-md-12 align-self-center">
              <div class="row row-cols-1 row-cols-md-4">

                 
              <div class="container-fluid">
                    <br>
                    <section>

                      <!-- Grid row -->
                      <div class="row">
                      <div class="col-lg-4 col-md-12 mb-4">

                        <!-- Admin card -->
                        <div class="card mt-3">

                          <div class="">
                            <i class="far fa-money-bill-alt fa-lg primary-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                            <div class="float-right text-right p-3">
                              <p class="text-uppercase text-muted mb-1"><small>sales</small></p>
                              <h4 class="font-weight-bold mb-0">23 000$</h4>
                            </div>
                          </div>

                          <div class="card-body pt-0">
                            <div class="progress md-progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                            <p class="card-text">Better than last week (75%)</p>
                          </div>

                        </div>
                        <!-- Admin card -->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">

                        <!-- Admin card -->
                        <div class="card mt-3">

                          <div class="">
                            <i class="fas fa-chart-line fa-lg teal z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                            <div class="float-right text-right p-3">
                              <p class="text-uppercase text-muted mb-1"><small>subscriptions</small></p>
                              <h4 class="font-weight-bold mb-0">3534</h4>
                            </div>
                          </div>

                          <div class="card-body pt-0">
                            <div class="progress md-progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                            <p class="card-text">Worse than last week (46%)</p>
                          </div>

                        </div>
                        <!-- Admin card -->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4">

                        <!-- Admin card -->
                        <div class="card mt-3">

                          <div class="">
                            <i class="fas fa-chart-pie fa-lg purple z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                            <div class="float-right text-right p-3">
                              <p class="text-uppercase text-muted mb-1"><small>traffic</small></p>
                              <h4 class="font-weight-bold mb-0">656 234</h4>
                            </div>
                          </div>

                          <div class="card-body pt-0">
                            <div class="progress md-progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                            <p class="card-text">Better than last week (31%)</p>
                          </div>

                        </div>
                        <!-- Admin card -->

                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">

                          <!-- Card -->
                          <div class="card dark-card-admin text-black">

                            <!-- Card Data -->
                            <div class="row mt-3">

                              <div class="col-md-5 col-5 text-left pl-4">
                                <a type="button" class="btn-floating btn-lg light-blue lighten-1 ml-4 waves-effect waves-light"><i class="fab fa-product-hunt"></i></a>
                              </div>

                              <div class="col-md-7 col-7 text-right pr-5">
                               
                                <h5 class="ml-4 mt-4 mb-2 font-black-bold"></h5>
                                <p class="font-small black-text text-black"><h6 style="color:black;" >Insumos</h6> </p>
                              </div>

                            </div>
                           
                            <hr>
                              <div class="card-body">
                                 <a href="insumos" class="btn btn-so"> <i class="fas fa-eye"></i> Mostrar</a>
                              </div>
                            <!-- Card content -->

                          </div>
                          <!-- Card -->

                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">

                          <!-- Card -->
                          <div class="card dark-card-admin text-black">

                            <!-- Card Data -->
                            <div class="row mt-3">

                              <div class="col-md-5 col-5 text-left pl-4">
                                <a type="button" class="btn-floating btn-lg red accent-2 ml-4 waves-effect waves-light"><i class="fab fa-product-hunt"></i></a>
                              </div>
                              <?php 
                         
                                $sqlProductos="SELECT count(*) as suma FROM rproductos";
                                $Productos=mysqli_query($conn,$sqlProductos);
                                $datosP=mysqli_fetch_array($Productos);
                                
                                ?>

                              <div class="col-md-7 col-7 text-right pr-5">
                                <h5 class="ml-4 mt-4 mb-2 font-weight-bold"><?php echo $datosP['suma']; ?></h5>
                                <p class="font-small grey-text text-white"><h6 style="color:black;" >Productos</h6> </p>
                              </div>
                            </div>
                            <hr>
                            <div class="card-body">
                            <a href="Productos"  class="btn btn-so"><i class="fas fa-eye"></i> Mostrar</a>
                            </div>
                            <!-- Card content -->

                          </div>
                          <!-- Card -->

                        </div>
                        <!-- Grid column -->

                       <div class="col-xl-3 col-md-6 mb-4">

                          <!-- Card -->
                          <div class="card dark-card-admin text-black">

                            <!-- Card Data -->
                            <div class="row mt-3">

                              <div class="col-md-5 col-5 text-left pl-4">
                                <a type="button" class="btn-floating btn-lg red accent-2 ml-4 waves-effect waves-light"><i class="fas fa-user-edit"></i></a>
                              </div>
                              <?php 
                     
                                $sqlProveedores="SELECT count(*) as suma FROM rproveedores";
                                $Proveedores=mysqli_query($conn,$sqlProductos);
                                $datosPr=mysqli_fetch_array($Proveedores);
                                
                                ?>
                              <div class="col-md-7 col-7 text-right pr-5">
                                <h5 class="ml-4 mt-4 mb-2 font-weight-bold"><?php echo $datosPr['suma'] ?></h5>
                                <p class="font-small grey-text text-white"><h6 style="color:black;" >Proveedores</h6> </p>
                              </div>

                            </div>
                            <hr>
                            <div class="card-body">
                            <a href="proveedores"  class="btn btn-so"><i class="fas fa-eye"></i> Mostrar</a>
                            </div>
                            <!-- Card content -->

                          </div>
                          <!-- Card -->

                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">

                          <!-- Card -->
                          <div class="card dark-card-admin text-black">

                            <!-- Card Data -->
                            <div class="row mt-3">

                              <div class="col-md-5 col-5 text-left pl-4">
                                <a type="button" class="btn-floating btn-lg red accent-2 ml-4 waves-effect waves-light"><i class="fas fa-user-edit"></i></a>
                              </div>
                              <?php 
                          
                                $sqlclientes="SELECT count(*) as suma FROM rclientes";
                                $clientes=mysqli_query($conn,$sqlclientes);
                                $datosC=mysqli_fetch_array($clientes);
                                
                                ?>
                              <div class="col-md-7 col-7 text-right pr-5">
                                <h5 class="ml-4 mt-4 mb-2 font-weight-bold"> <?php echo $datosC['suma'];?></h5>
                                <p class="font-small grey-text text-white"><h6 style="color:black;" >Clientes</h6> </p>
                              </div>

                            </div>
                            <hr>
                            <div class="card-body">
                            <a href="cliente"  class="btn btn-so"> <i class="fas fa-eye"></i> Mostrar</a>
                            </div>
                            <!-- Card content -->

                          </div>
                          <!-- Card -->

                        </div>
                        <!-- Grafico de compras -->
                        <div class="col-xl-6 col-md-6 mb-6">
                        <div class="modal-header text-center modal-success darken-2">
                            <h4 class="modal-title black-text w-100 font-weight-bold py-2">Grafica Lineal en Compras</h4>
                        </div>

                          <div id="graficaLineal" class="card dark-card-admin text-black">

        
                          </div>
                         
                          </div>

                          <div class="col-xl-6 col-md-6 mb-6">
                        <div class="modal-header text-center modal-success  darken-2">
                            <h4 class="modal-title black-text w-100 font-weight-bold py-2">Grafica de Barras en Compras</h4>
                        </div>

                          <div id="graficaBarra" class="card dark-card-admin text-black">

        
                          </div>
                         
                          </div>
                          
                          <!-- grafico de ventas -->
                        <div class="col-xl-6 col-md-6 mb-6">
                        <br>
                        <div class="modal-header text-center  modal-success  darken-2">
                            <h4 class="modal-title black-text w-100 font-weight-bold py-2">Grafica Lineal en Ventas</h4>
                        </div>

                          <div id="graficaLinealVentas" class="card dark-card-admin text-black">

        
                          </div>
                         
                          </div>
                          <div class="col-xl-6 col-md-6 mb-6">
                        <br>
                        <div class="modal-header text-center  modal-success  darken-2">
                            <h4 class="modal-title black-text w-100 font-weight-bold py-2">Grafica Barra en Ventas</h4>
                        </div>

                          <div id="graficaBarraVentas" class="card dark-card-admin text-black">

        
                          </div>
                         
                          </div>
                      
                      </div>
                      <!-- Grid row -->

                    </section>

                  </div>
                </div>
              </div>
                  
              </div>
            
            </div>
          </div>
          
</form>
    
    </main>   
    

    <footer>
    <?php
    include("../mint/footer.php");
    ?>

    </footer>
    <script type="text/javascript" src="../../Styles/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../Styles/js/popper.min.js"></script>
    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>   
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = "utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="../../Scripts/FuncionesApp.js"></script>
    
   
   

    <script  type="text/javascript">
      $(document).ready(function(){
        $('#graficaLineal').load('../graficos/graficoLineal.php');
        $('#graficaBarra').load('../graficos/graficadebarrasCompras.php');
        $('#graficaLinealVentas').load('../graficos/graficoLinealVentas.php');
        $('#graficaBarraVentas').load('../graficos/graficodebarraVentas.php');
      
      });

    </script>
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>