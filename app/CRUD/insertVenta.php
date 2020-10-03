<?php
   include('../BD/conexion.php');

  try {
   session_start();
   
     $sqlRecibo="SELECT (id_factura+1) as id_factur From rfactura";
     $resultRecibo=mysqli_query($conn,$sqlRecibo);
     $DatosRecibo=mysqli_fetch_assoc($resultRecibo);

     $id_recibo=$DatosRecibo['id_factur'];
         $cantidad = $_POST['cantidad'];
         $isv = $_POST['isv'];
         $descuento = $_POST['descuento'];
         $precio = $_POST['precio'];
         $subtotal = $_POST['subtotal'];
         $descripcion = $_POST['codigo'];
         $sql= "INSERT INTO rventas (id_venta,cantidad,isv,descuento,precio_unitario,subtotal,_idfactura,_idproducto) 
         VALUES (null, '$cantidad','$isv', '$descuento', '$precio', '$subtotal','$id_recibo','$descripcion')";
         mysqli_query($conn,$sql) or die(mysqli_error($conn));
      
  } catch (\Throwable $th) {
    //throw $th;
  }
?>