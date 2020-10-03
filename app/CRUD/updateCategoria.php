<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";


    if ($_POST['_categoria1']!="" || $_POST['_numero1']!="") {
        $id=$_POST['_numero1'];
        $categoria=$_POST['_categoria1'];
        $update="UPDATE rcategorias SET categoria='$categoria' WHERE id='$id'";
        mysqli_query($conn,$update) or die(''.mysqli_error($conn).'');
        print "<script>
                    alert('Datos actualizados');
                    window.location='../Formularios/Categoria_producto.php?sms=2';
                    </script>";
    } else {
        print "<script>
                alert('Campo  está vacío');
                window.location='../Formularios/Categoria_producto.php?sms=2';
                </script>";
    }


?>