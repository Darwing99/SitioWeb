
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
  $id_proveedor=$_POST['_proveedor'];
  $totalT=$_POST['_total2'];

   $sqlRecibo = "INSERT INTO rrecibo (id_recibo,fecha,total,_idproveedor,_idempleado,_id) 
    VALUES (null, 
    '$fecha',
    '$totalT',
    '$id_proveedor',
    '$id_empleado',
    '$id_empresa')";
     if(mysqli_query($conn,$sqlRecibo)){
         print"<script>
         alert('Registro de compra agregado');
         </script>";
     }else{ 

         (mysqli_error($conn));
     }
   ?>