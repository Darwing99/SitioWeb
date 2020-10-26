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
    <script src="../../Scripts/jquery-3.1.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    
    <title>Menu</title>
</head>
<body>
    <header>
      <?php
      include('../mint/header.php');
      ?>
    </header>
    <main>
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

                        <!-- Grid column -->
                        <div class="col-xl-6 col-md-6 mb-4">

                          <!-- Card -->
                          <div class="card dark-card-admin text-white">

                            <!-- Card Data -->
                            <div class="row mt-3">

                              <div class="col-md-5 col-5 text-left pl-4">

                                <a type="button" class="btn-floating btn-lg primary-color ml-4 waves-effect waves-light"><i class="fas fa-hand-holding-usd"></i></a>

                              </div>

                              <div class="col-md-7 col-7 text-right pr-5">

                           

                                <p class="font-small grey-text text-white"><h5 style="color:black;" >Ventas</h5> </p>
                              </div>

                            </div>
                            <!-- Card Data -->

                            <!-- Card content -->
                            <div class="row my-3">

                              <div class="col-md-7 col-7 text-left pl-4">

                                <p class="font-small dark-grey-text font-up ml-4 font-weight-bold text-white">Ventas</p>

                              </div>

                              <div class="col-md-5 col-5 text-right pr-5">
                               <?php include('../BD/conexion.php'); 
                               $consul="SELECT count(*) as suma FROM rventas";
                               $result=mysqli_query($conn,$consul);
                               $suma=mysqli_fetch_row($result);
                               // fin Consulta para suma de filas ventas
                                $consulta="SELECT sum(total) as ventas FROM rfactura";
                                $resultado=mysqli_query($conn,$consulta);
                                $datos=mysqli_fetch_row($resultado);

                                ?>
                                <p class="font-small text-dark text-white"><?php echo $suma[0] ?></p>
                              </div>
                              <hr>
                              <div class="col-md-7 col-7 text-left pl-4">
                                <p class="font-small dark-grey-text font-up ml-4 font-weight-bold text-white">L.</p>
                              </div>
                              <div class="col-md-5 col-5 text-right pr-5">
                              
                                <p class="font-small text-dark text-white"><?php echo $datos[0] ?></p>
                              </div>

                            </div>
                            <hr>
                            <div class="card-body">
                            <a href="ventas.php"  class="btn btn-so"><i class="fas fa-cart-plus"></i> Vender</a>
                            </div>
                            <!-- Card content -->

                          </div>
                          <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-6 col-md-6 mb-4">

                          <!-- Card -->
                          <div class="card dark-card-admin text-white">

                            <!-- Card Data -->
                            <div class="row mt-3">
                            <?php include('../BD/conexion.php'); 
                               $consulC="SELECT count(*) as suma FROM rcompras";
                               $resultC=mysqli_query($conn,$consulC);
                               $sumaC=mysqli_fetch_row($resultC);
                               // fin Consulta para suma de filas ventas
                                $consultaC="SELECT sum(total) as compra FROM rrecibo";
                                $resultadoC=mysqli_query($conn,$consultaC);
                                $datosC=mysqli_fetch_row($resultadoC);

                                
                                ?>
                              <div class="col-md-5 col-5 text-left pl-4">

                                <a type="button" class="btn-floating btn-lg warning-color ml-4 waves-effect waves-light"><i class="fas fa-dollar-sign text-white" aria-hidden="true"></i></a>
                              </div>

                              <div class="col-md-7 col-7 text-right pr-5">

                              
                                <p class="font-small text-dark text-black"><h5 style="color:black;" >Compras</h5> </p>

                              </div>

                            </div>
                            <!-- Card Data -->

                            <!-- Card content -->
                            <div class="row my-3">

                              <div class="col-md-7 col-7 text-left pl-4">
                                <p class="font-small dark-grey-text font-up ml-4 font-weight-bold text-white">Compras</p>
                              </div>

                              <div class="col-md-5 col-5 text-right pr-5">
                                <p class="font-small text-dark text-black"><?php echo $sumaC[0]; ?></p>
                              </div>
                              <hr>
                              <div class="col-md-7 col-7 text-left pl-4">
                                <p class="font-small dark-grey-text font-up ml-4 font-weight-bold text-white"><h3L>L.</h3></p>
                              </div>
                              <div class="col-md-5 col-5 text-right pr-5">
                                <p class="font-small text-dark text-black"><?php echo $datosC[0]; ?></p>
                              </div>
                            </div>
                             <hr>
                              <div class="card-body">
                                 <a href="compras.php"  class="btn btn-so"><i class="fas fa-cart-arrow-down"></i> Comprar</a>
                              </div>
                            <!-- Card content -->

                          </div>
                          <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-3 col-md-6 mb-4">

                          <!-- Card -->
                          <div class="card dark-card-admin text-black">

                            <!-- Card Data -->
                            <div class="row mt-3">

                              <div class="col-md-5 col-5 text-left pl-4">
                                <a type="button" class="btn-floating btn-lg light-blue lighten-1 ml-4 waves-effect waves-light"><i class="fab fa-product-hunt"></i></a>
                              </div>

                              <div class="col-md-7 col-7 text-right pr-5">
                                <?php 
                                include('../BD/conexion.php');
                                $sqlInsumos="SELECT count(*) as suma FROM rinsumos";
                                $sqlResultado=mysqli_query($conn,$sqlInsumos);
                                $datos=mysqli_fetch_array($sqlResultado);


                                
                                ?>
                                <h5 class="ml-4 mt-4 mb-2 font-black-bold"><?php echo $datos['suma'] ?></h5>
                                <p class="font-small black-text text-black"><h6 style="color:black;" >Insumos</h6> </p>
                              </div>

                            </div>
                           
                            <hr>
                              <div class="card-body">
                                 <a href="insumos.php" class="btn btn-so"> <i class="fas fa-eye"></i> Mostrar</a>
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
                                include('../BD/conexion.php');
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
                            <a href="Productos.php"  class="btn btn-so"><i class="fas fa-eye"></i> Mostrar</a>
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
                                include('../BD/conexion.php');
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
                            <a href="proveedores.php"  class="btn btn-so"><i class="fas fa-eye"></i> Mostrar</a>
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
                                include('../BD/conexion.php');
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
                            <a href="cliente.php"  class="btn btn-so"> <i class="fas fa-eye"></i> Mostrar</a>
                            </div>
                            <!-- Card content -->

                          </div>
                          <!-- Card -->

                        </div>
                        <!-- Grafico de compras -->
                        <div class="col-xl-6 col-md-6 mb-6">
                        <div class="modal-header text-center  yellow darken-2">
                            <h4 class="modal-title black-text w-100 font-weight-bold py-2">Grafica Lineal en Compras</h4>
                        </div>

                          <div id="graficaLineal" class="card dark-card-admin text-black">

        
                          </div>
                         
                          </div>

                          <div class="col-xl-6 col-md-6 mb-6">
                        <div class="modal-header text-center  yellow darken-2">
                            <h4 class="modal-title black-text w-100 font-weight-bold py-2">Grafica de Barras en Compras</h4>
                        </div>

                          <div id="graficaBarra" class="card dark-card-admin text-black">

        
                          </div>
                         
                          </div>
                          
                          <!-- grafico de ventas -->
                        <div class="col-xl-6 col-md-6 mb-6">
                        <br>
                        <div class="modal-header text-center  yellow darken-2">
                            <h4 class="modal-title black-text w-100 font-weight-bold py-2">Grafica Lineal en Ventas</h4>
                        </div>

                          <div id="graficaLinealVentas" class="card dark-card-admin text-black">

        
                          </div>
                         
                          </div>
                          <div class="col-xl-6 col-md-6 mb-6">
                        <br>
                        <div class="modal-header text-center  yellow darken-2">
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

   
    <script src="../../Scripts/Funciones.js"></script>

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