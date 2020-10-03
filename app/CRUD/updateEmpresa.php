<?php
include('../BD/conexion.php');

session_start();

$mensajeOK=false;
$mensajeError="";


if (isset($_POST['_codigo'],$_POST['_rtn'],$_POST['_empresa'],$_POST['_direccion'],$_POST['_telefono'],
$_POST['_email'])) {
    
        if ($_POST['_codigo']!="" || $_POST['_rtn']!="" ||$_POST['_empresa']!=""||
        $_POST['_direccion']!=""||$_POST['_telefono']!=""||$_POST['_email']) {
            $codigo=$_POST['_codigo'];
            $rtn= $_POST['_rtn'];
            $empresa=$_POST['_empresa'];
            $direccion=$_POST['_direccion'];
            $telefono=$_POST['_telefono'];
            $email=$_POST['_email'];
            $imagen=addslashes(file_get_contents($_FILES['_imagen']['tmp_name']));
           
            $update="UPDATE rempresa SET rtn='$rtn',nombre_empresa='$empresa',direccion='$direccion',telefono='$telefono',correo='$email',logo='$imagen' where id='$codigo'";

            mysqli_query($conn,$update) or die(mysqli_error($conn));
            print "<script>
            alert('Datos de usuario actualizados');
            window.location='../Formularios/empresa.php?sms=1';
            </script>";

           
        } else {
            print "<script>
                    alert('Datos no validados');
                    window.location='../Formularios/empresa.php?sms=1';
                    </script>";
        }
    
}

?>