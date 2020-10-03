<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";

        if(isset($_POST['_categoria'])){
            if ($_POST['_categoria']!=="") {
                $categoria=$_POST['_categoria'];
                $sql="INSERT INTO rcategorias(id,categoria) VALUES(null,'$categoria')";
           
                mysqli_query($conn, $sql);
               
                print "<script>
                    alert('Registro creado satisfactoriamente');
                    window.location='../Formularios/Categoria_producto.php';
                    </script>";
            }else{
                
                print "<script>
                alert('Campos vacios');
                window.location='../Formularios/Categoria_producto.php?sms=1';
                </script>";
            }
            
          
        }else{
          
            print "<script>
                    alert('Datos no validados');
                    window.location='../Formularios/Categoria_producto.php?sms=1';
                    </script>";
        }

   
?>