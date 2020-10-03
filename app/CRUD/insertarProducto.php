<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";

        if(isset($_POST['descripcion'],$_POST['precio'],$_POST['cantidad'],$_POST['categoria'])){
            if($_POST['descripcion']!=""||$_POST['precio']!=""||$_POST['cantidad']!=""||$_POST['categoria']!=""){
               
           
                $descripcion=$_POST['descripcion'];
                $precio=$_POST['precio'];
                $cantidad=$_POST['cantidad'];
                $idCategoria=$_POST['categoria'];
                $imagen= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
               
                $sql="INSERT INTO rproductos (codigo,descripcion,precio,cantidad,estado,foto,_idcategoria) VALUES(null,'$descripcion','$precio','$cantidad','1','$imagen','$idCategoria')";
                
                mysqli_query($conn,$sql) ;
                
                print "<script>
                alert('Registro creado satisfactoriamente');
                window.location='../Formularios/Productos.php';
                </script>";
                
            }else{
                
                print "<script>
                alert('Datos no están validados');
                window.location='../Formularios/Productos.php?sms=1';
                </script>";
            }
            
          
        }else{
          
            print "<script>
                    alert('Datos no están validados');
                    window.location='../Formularios/Productos.php?sms=1';
                    </script>";
        }

   
?>