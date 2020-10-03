<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";


if (isset($_POST['_numero2'],$_POST['_categoria2'])) {
 
        $id=$_POST['_numero2'];
        $categoria=$_POST['_categoria2'];
            
        $Delete="DELETE FROM rcategorias WHERE id='$id'";
        mysqli_query($conn, $Delete);
        print "<script>
                    alert('Datos Eliminados');
                    window.location='../Formularios/Categoria_producto.php?sms=2';
                    </script>";
    } 

?>