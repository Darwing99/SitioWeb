<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";

if (isset($_POST['idProveedor'])) {
 
        $id=$_POST['idProveedor'];
        
            
        $Delete="DELETE FROM rproveedores WHERE id='$id'";
        mysqli_query($conn, $Delete);
        print "<script>
                    alert('Proveedores Eliminado');
                    window.location='../Formularios/proveedores.php?sms=2';
                    </script>";
    } 

?>