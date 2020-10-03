<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";


if (isset($_POST['idUD'],$_POST['cargoD'])) {
 
        $id=$_POST['idUD'];
        $cargo=$_POST['cargoD'];
            
        $Delete="DELETE FROM rtipoUser WHERE idtipo='$id'";
        mysqli_query($conn, $Delete);
        print "<script>
                    alert('Datos Eliminados');
                    window.location='../Formularios/tipos_Usuarios.php?sms=2';
                    </script>";
    } 

?>