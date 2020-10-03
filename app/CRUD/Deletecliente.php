<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";


if (isset($_POST['idCliente'])) {
 
        $id=$_POST['idCliente'];
        
            
        $Delete="DELETE FROM rclientes WHERE id='$id'";
        mysqli_query($conn, $Delete);
        print "<script>
                    alert('Cliente Eliminado');
                    window.location='../Formularios/cliente.php?sms=2';
                    </script>";
    } 

?>