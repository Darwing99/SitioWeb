<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";


    if ($_POST['estado']!="") {
        $id=$_POST['idUsuario'];
        $estado=$_POST['estado'];
        $update="UPDATE rusuario SET estado='$estado' WHERE identidad='$id'";
        mysqli_query($conn,$update) or die(''.mysqli_error($conn).'');
        print "<script>
                    alert('Datos actualizados');
                    window.location='../Formularios/empleado.php?sms=2';
                    </script>";
    } else {
        print "<script>
                alert('Campo  está vacío');
                window.location='../Formularios/empleado.php?sms=2';
                </script>";
    }


?>