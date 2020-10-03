
<?php
include('../BD/conexion.php');
session_start();
  
  $SQLempresa="SELECT id FROM rempresa";
  $resultadoEmpresa=mysqli_query($conn,$SQLempresa);
  $DATOS=mysqli_fetch_assoc($resultadoEmpresa);
  // Datos para RRECIBO
  $id_empresa=$DATOS['id'];
  $fecha = date('Y-m-d');
  $id_empleado=$_SESSION['id'];
  $id_cliente=$_POST['_cliente'];
  $totalT=$_POST['total2'];

   $sqlfactura = "INSERT INTO rfactura (id_factura,fecha,total,_idcliente,_idempleado,_id) 
    VALUES (null, 
    '$fecha',
    '$totalT',
    '$id_cliente',
    '$id_empleado',
    '$id_empresa')";
     if(mysqli_query($conn,$sqlfactura)){
         print"<script>
         alert('Registro de venta agregado');
         </script>";
     }else{ 

         (mysqli_error($conn));
     }
   ?>