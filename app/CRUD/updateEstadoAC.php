<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";


    if ($_POST['estadoA']!="") {
        $id=$_POST['idUsuarioA'];
        $estado=$_POST['estadoA'];
        $update="UPDATE rusuario SET estado='$estado' WHERE id='$id'";
        mysqli_query($conn,$update) or die(''.mysqli_error($conn).'');
        print "<script>
                    alert('Datos actualizados');
                    window.location='../Formularios/Apertura_cierre.php?sms=2';
                    </script>";
    } else {
        print "<script>
                alert('Campo  está vacío');
                window.location='../Formularios/Apertura_cierre.php?sms=2';
                </script>";
    }


?>