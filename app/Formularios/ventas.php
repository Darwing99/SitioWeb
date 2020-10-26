
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta nueva</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Styles/css/mdb.min.css">
    <link rel="stylesheet" href="../../Styles/form.css">
    <script src="../../Scripts/jquery-3.1.1.js"></script>
    
    
</head>
<body>
<header>
<?php
  include('../mint/header.php');
?>
</header>
<br>
<form id="ventas" method="POST" >
    <div class="card-deck">

          <div  class="col-sm-9 card mb-4">
            <br>
            <div class="modal-header text-center  yellow darken-2">
                    <h4 class="modal-title black-text w-100 font-weight-bold py-2">Nueva Venta</h4>
                </div>
                <br>
                <div class="centrar_form" >
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">Fecha</label>
                    <input type="date" class="form-control" id="_fecha" value="<?php echo date("Y-m-d");?>" >
                    </div>
                    <div class="form-group col-md-4">
                   
                      <label for="inputEmail4">Cliente</label>
                      <select class="form-control" id="_cliente" name="_cliente">
                                  <option value="0" disabled selected>Cliente</option>
                                  <?php
                                  include('../BD/conexion.php');
                                  $sql="select*from rclientes";
                                  $result=mysqli_query($conn,$sql);
                                  while($mostrar=mysqli_fetch_array($result)){?>
                                  <option value="<?php echo  $mostrar['id']?>"> <?php echo  $mostrar['cliente'] ?></option>
                                  <?php } ?>
                      </select>
                   
                
                    </div>
                    <div class="form-group col-md-4 popup">
                    <label for="inputPassword4">Producto</label>
                    <select class="form-control" id="_codigo" name="codigo">
                                  <option value="0" disabled selected>Producto</option>
                                  <?php
                                  include('../BD/conexion.php');
                                  $sql="select*from rproductos";
                                  $result=mysqli_query($conn,$sql);
                                  while($mostrar=mysqli_fetch_array($result)){?>
                                  <option value="<?php echo  $mostrar['codigo']?>"> <?php echo  $mostrar['descripcion'] ?></option>
                                  <?php } ?>
                      </select>
                    </div>
                  
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Precio</label>
                    <input type="text" class="form-control" name="precio" id="_precio">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="_cantidad">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">ISV</label>
                    <input type="text" class="form-control" name="isv" id="_isv" value="15">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">Descuento</label>
                    <input type="text" class="form-control" name="descuento" id="_descuento">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">Subtotal</label>
                    <input type="text" class="form-control" id="_subtotal" name="subtotal"readonly>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Total</label>
                    <input type="text" class="form-control" id="_total" name="total" readonly>
                    </div>
                    </div>
                    <hr>  
                    <div class="col-sm-12">
                    <button id="_agregarC" type="button" class="btn btn-rounded btn-amber "><i class="fas fa-plus-square"></i>Agregar</button>
                
                    <button type="reset" class="btn btn-rounded btn-blue-grey"><i class="far fa-save pr-2" aria-hidden="true"></i>Limpiar</button>
                    <div class="form-ro">
                        <div id="table" class="table-editable">
                                
                                <table id="tabla" class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Codigo</th>
                                        <th class="text-center">Precio</th>
                                        <th class="text-center">Cantidad</th>
                                        <th class="text-center">ISV</th>
                                        <th class="text-center">Descuento</th>
                                        <th class="text-center">Subtotal</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Acción</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                        </div>
                    </div> 
                  </div>
                                   
          </div>

          </div>
                <!-- Card factura-->
          <div class=" col-sm-3 card mb-4">
                <br>
                <div class="modal-header text-center  yellow darken-2">
                    <h4 class="modal-title black-text w-100 font-weight-bold py-2">Factura</h4>
                </div>
                <br>
                <div>
                    <form action="">
                    <div class="form-group col-sm-12">
                    
                    <br>
                    <div class="form-group row"> 
                    <?php 
                        include('../BD/conexion.php');
                        $id=$_SESSION['id'];
                        $sql="SELECT usuario,nombre,id FROM rusuario where id='$id'";
                        $result=mysqli_query($conn,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                        ?>
                    <label for="inputEmail3" class="col-sm-12 col-form-label">Vendedor</label>
                    <input style="color:red; " type="hidden" class="form-control" name="_idUsuario" id="_idUsuario" readonly value="<?php echo $mostrar['id'];?>">
                    <input style="color:red; " type="text" class="form-control" id="colFormLabelS" readonly value="<?php echo $mostrar['nombre'];?>">
                    <?php } ?>
                    </div>
                    <hr>
                    <div class="form-group row"> 
                 
                    <?php 
                        include('../BD/conexion.php');
                        $sql="SELECT MAX(id_factura+1000000) AS num FROM rfactura";
                        $result=mysqli_query($conn,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                        ?>
                    <label for="inputEmail3" class="col-sm-12 col-form-label">N° Factura</label>
                    <input style="color:red; " type="text" class="form-control" id="colFormLabelm" readonly value="<?php echo $mostrar['num'];?>">
                    <?php } ?>
                    </div>
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-12 col-form-label">Subtotal</label>
                      
                        <input type="text" class="form-control" name="subtotal2" id="_subtotal2" readonly>
                        </div>
                       
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-12 col-form-label">ISV</label>
                       
                        <input type="text" class="form-control" id="_ISV2"  readonly>
                        </div>
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-12 col-form-label">Descuento</label>
                       
                        <input type="text" class="form-control" name="descuento2" id="_descuento2"  readonly>
                        </div>
                      
                        <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-12 col-form-label">Total</label>
                      
                        <input type="text" class="form-control" name="total2" id="_total2"  readonly>
                        </div>
                        <div class="col-sm-12">
                          <button id="guardar" type="button" class="btn btn-rounded btn-amber "><i class="fas fa-plus-square"></i>Guardar</button>
                        </div>
                        </div>
                    </form>
                    </div>  
          </div>
          
      </div>  
</form> 
<!-- Fin de formulario principal -->
  <!-- #######Modal de productos################# -->


<footer>
    <?php
    include("../mint/footer.php");
    ?>
</footer>   
  
    
    <script src="../../Scripts/Funciones.js"></script>
    <script src="../../Scripts/ventas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>