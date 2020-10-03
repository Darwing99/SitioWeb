<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";


    if ($_POST['cargo']!="") {
        $id=$_POST['idU'];
        $cargo=$_POST['cargo'];
        $update="UPDATE rtipouser SET tipo='$cargo' WHERE idtipo='$id'";
        mysqli_query($conn,$update) or die(''.mysqli_error($conn).'');
        print "<script>
                    alert('Datos actualizados');
                    window.location='../Formularios/tipos_Usuarios.php?sms=2';
                    </script>";
    } else {
        print "<script>
                alert('Campo  está vacío');
                window.location='../Formularios/tipos_Usuarios.php?sms=2';
                </script>";
    }


?>