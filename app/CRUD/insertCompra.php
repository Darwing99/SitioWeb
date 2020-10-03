<?php
   include('../BD/conexion.php');

  try {
   session_start();
   
     $sqlRecibo="SELECT (id_recibo+1) as id_recib From rrecibo";
     $resultRecibo=mysqli_query($conn,$sqlRecibo);
     $DatosRecibo=mysqli_fetch_assoc($resultRecibo);
     $id_recibo=$DatosRecibo['id_recib'];
     
         $cantidad = $_POST['cantidad'];
         $isv = $_POST['isv'];
         $descuento = $_POST['descuento'];
         $precio = $_POST['precio'];
         $subtotal = $_POST['subtotal'];
         $total = $_POST['total'];
         $descripcion = $_POST['insumo'];
         $sql= "INSERT INTO rcompras (id_compra,cantidad,isv,descuento,precio_unitario,subtotal,total,_idrecibo,_idinsumo) 
         VALUES (null, '$cantidad','$isv', '$descuento', '$precio', '$subtotal', '$total','$id_recibo','$descripcion')";
         mysqli_query($conn,$sql)or die(mysqli_error($conn));
      
     
  } catch (\Throwable $th) {
    //throw $th;
  }
?>