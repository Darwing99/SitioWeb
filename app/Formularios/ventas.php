
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta nueva</title>
    <?php
     include('../mint/datatables.php');
    ?>
   
    <link rel="stylesheet" href="../../Styles/form.css">
   
</head>
<body>
<header>
<?php
  include('../mint/header.php');
?>
</header>
<br>
<!-- Detalle de factura -->
<?php 
    $sql=mysqli_query($conn, "SELECT LAST_INSERT_ID(correlativo) as last from rdetallefactura order by correlativo  desc limit 0,1 ");
  $rw=mysqli_fetch_array($sql);
  $numero=$rw['last']+1;
  ?>
    <!-- Detalle de empresa -->
 <!-- detalles de empresa -->
 <?php 
  $sql="select*from rempresa";
  $result=mysqli_query($conn,$sql);

  $mostrar=mysqli_fetch_array($result);
  ?>

<div class="p-5">
<form id="ventas" method="POST" >
    <div class="pt-5 card-deck">

          <div  class="col-sm-12  mb-4">
            <br>
            <div class="modal-header text-rigth  white darken-2">
                    <h4 class="modal-title black-text w-50 font-weight-bold py-0">Nueva Venta</h4>
                    <button id="mostrar_ocultar"  type="button" class="btn btn-outline-black btn-rounded btn-sm px-3 waves-effect">Ver Menu <i class="fas fa-eye fa-1x"></i></button>

                </div>
            
          </div>
           
      </div>  
<!-- mODAL DE PRODUTOS -->
      <div class="modal fade" id="modal_productos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fluid modal-notify modal-success" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <p class="heading lead">Productos</p>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>

            <!--Body-->
            <div class="modal-body">
              <div class="">
                
                <section id="" type="button" class="p-5  pt-4 text-center">

                      <!--Grid row-->
                      <div class="row">

                      <!--Grid column-->

                      <?php
                      $sql="SELECT*FROM rproductos";
                      $resultado = mysqli_query($conn,$sql);

                      while($datos=mysqli_fetch_array($resultado)){
                          $i=0;

                      ?>
                      <div class="col-lg-2 col-md-12 mb-4">

                          <!-- Card -->
                          <div class="card">

                          <!-- Card image -->
                          <div class="view overlay">
                              <img class="card-img-top"  src="data:image/jpg; base64,<?php echo base64_encode($datos['foto']);?>"
                              alt=" <?php echo $datos['descripcion'] ?>">
                              <a href="#!">
                              <div class="mask rgba-white-slight"></div>
                              </a>
                          </div>

                          <!-- Card content -->
                          <div class="card-body">

                              <p class="mb-1"><a href="" class="font-weight-bold black-text"> <?php echo $datos['descripcion'] ?></a></p>

                              <p class="mb-1"><small class="mr-1"><s>$299</s></small><strong> <?php echo $datos['precio'] ?></strong></p>

                              <button type="button" class="btn btn-outline-black btn-rounded btn-sm px-3 waves-effect"><i class="fas fa-clipboard-check"></i></button>

                          </div>

                          </div>
                          <!-- Card -->


                      </div>
                      <!--Grid column-->

                      <?php $i++; } ?>

                      </div>
                      <!--Grid row-->


                      </section>
              </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
              
              <a type="button" class="btn btn-elegant waves-effect" data-dismiss="modal">Cerrar</a>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>


<!-- MODAL DE CLIENTES -->
       <div class="modal fade" id="modal_clientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-notify modal-success" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                  <p class="heading lead">Cliente</p>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                  </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                  <div class="">
                    
                    <section id="" type="button" class="">

                    <div class=" table-responsive">
                        
                        <table id="clientes_ventas" class="table table-condensed   product-table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Identidad</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Email</th>
                                <th scope="col">Acción</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>

                        </section>
                      </div>
                    </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  
                  <a type="button" class="btn btn-elegant waves-effect" data-dismiss="modal">Cerrar</a>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>

      <div class=" outer-section" >
        
        <form class="form-horizontal" role="form" id="datos_presupuesto" method="post">
         <div id="print-area">
            
                <div class="row pad-top font-big">
                 <div class="col-lg-4 col-md-4 col-sm-4">
                   <a target="_blank">  <img style="width: 100px;" src="data:image/jpg; base64,<?php echo base64_encode($mostrar['logo']);?>" alt="Inveruta" /></a>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-4">
                     <strong>E-mail : </strong> <?php echo $mostrar['correo'];?>
                     <br />
                     <strong>Teléfono :</strong> (+504) <?php echo $mostrar['telefono'];?> <br />
                     <!-- <strong>Sitio web :</strong> <?php echo $rw['web'];?>  -->
                    
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-4">
                     <strong><?php echo $mostrar['nombre_empresa'];?>  </strong>
                     <br />
                     Dirección : <?php echo $mostrar['direccion'];?> 
                 </div>
 
             </div>
            
             
             <!-- Detalles de cliente -->
 
             <div class="row ">
             <hr />
                 <div class="col-lg-6 col-md-6 col-sm-6">
                          
               
                    
                 <div class="col-md-8 col-10">
                    <div class="md-form">
                    <input type="hidden" name="idCliente" id="idCliente">
                    <input  name="cliente" id="cliente"class="form-control" placeholder="Detalles del cliente" required value="">
                    
                    </div>
                  </div>
         
                <div class="col-md-8 col-10">
                    
                   
                    <div class="md-form ">
                      
                    <input class="form-control"  id="email" placeholder="Email" readonly>
                    
                    </div>
                </div>
          
                <div class="col-md-6 col-10">
                    
                   
                    <div class="md-form form-sm">
                      
                    <input class="form-control form-control-sm" id="telefono" placeholder="Telefono" readonly>
                    <!-- <label for="telefono">Telefono</label> -->
                    </div>
                </div>
            
                 </div>

  
           
                 <div class="col-lg-6 col-md-6 col-sm-6">
                    
                     <div class="row">
                         <div class="col-lg-6">
                           <h4><strong>Numero de venta #: </strong><?php echo $numero;?></h4>
                         </div>
                         <div class="col-lg-6">
                              <h4><strong>Fecha: </strong> <?php echo date("d/m/Y");?></h4>
                         </div>
                     
                     </div>
                     <div class="row">
                         <div class="col-lg-12">
                         <label>Términos y condiciones:</label>
                         <input type="text" name="condiciones" id="condiciones" class="form-control" placeholder="Términos y condiciones de la orden">
                         </div>
                         
                         
                         
                     </div>
                   
                   
                   
                 </div>
             </div>
             
            
     <!-- Seccion de registro de producto -->
     <div class="">
          
          <section id="productos_catalago" type="button" class="productos_catalago p-5  pt-4 text-center">
          <form class="form-horizontal" name="guardar_item" id="guardar_item">
                <!--Grid row-->
                <div class="row">
                <div class="col-md-6">
                    <label>Descripción del producto</label>
                    <textarea class="form-control" id="descripcion" name="descripcion"  required></textarea>
                    <input type="hidden" class="form-control" id="action" name="action"  value="ajax">
                </div>
                <div class="col-md-6">
                        <label>Color</label>
                        <input type="text" class="form-control" id="color" name="color" required>
                </div>
                              
                <div class="col-md-6">
                        <label>Cantidad</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad" required>
                    </div>
                                            
                    <div class="col-md-6">
                        <label>Precio</label>
                      <input type="text" class="form-control" id="precio" name="precio" required>
                    </div>
                </div>
                <!--Grid row-->
          </form>
    
                </section>
        </div>
             
             <div class="row">
             <hr />
                 <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="table-responsive">
                         <table class="table table-condensed table-hover table-striped product-table">
                             <thead>
                                 <tr>
                                    
                                     <th class='text-center'>Código</th> 
                                     <th>Descripción</th>
                                     <th class='text-center'>Precio</th>
                                     <th class='text-center'>Cantidad</th>
                                     <th class='text-right'>Precio unitario</th>
                                     <th class='text-right'>Total</th>
                                     <th class='text-right'></th>
                                 </tr>
                             </thead>
                             <tbody class='items'>
                                 
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
             
            
            
             
         
         </div>
        <div class="row"> <hr /></div>
         <div class="row pad-bottom  pull-right">
         
             <div class="col-lg-12 col-md-12 col-sm-12">
                 <button type="submit" class="btn btn-success ">Guardar orden de pedido</button>
              
             </div>
         </div>
         </form>
     </div>


</form> 
<!-- Fin de formulario principal -->
  <!-- #######Modal de productos################# -->

  </div>
<footer>
    <?php
    include("../mint/footer.php");
    ?>
</footer>   

    <script type="text/javascript" src="../../Styles/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="../../Styles/js/popper.min.js"></script> 
    <script type="text/javascript" src="../../Styles/js/mdb.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-1.52.3.min.js" charset = " utf-8 "></script>
    <script src="../../Scripts/validaciones.js"></script>
    <script src="../../Scripts/FuncionesApp.js"></script>

   
</body>
</html>