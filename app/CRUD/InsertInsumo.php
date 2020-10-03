<?php 
include('../BD/conexion.php');

    $codigo=$_POST['codigo'];
    $descripcion=$_POST['descripcion'];
    $cantidad=$_POST['cantidad'];
    $estado=($_POST['estado']);
    $categoria=$_POST['categoria'];
    $consulta="SELECT*FROM rinsumos Where codigo='$codigo'";
    $result=mysqli_query($conn,$consulta);
    if(mysqli_fetch_row($result)>0){

        print"<script>
        alert(' Datos ya existen');
        </script>";
    }else{

        
      $sql="INSERT into rinsumos (codigo,descripcion,cantidad,estado,_idcategoria)
                    values ('$codigo','$descripcion','$cantidad','$estado','$categoria')";
            echo mysqli_query($conn,$sql) or die(mysqli_error($conn));
            
            print"<script>
            alert(' Datos agregados');
            
            </script>";  
    }


   
    

	
 ?>