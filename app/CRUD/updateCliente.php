<?php
include('../BD/conexion.php');

session_start();

$mensajeOK=false;
$mensajeError="";


if (isset($_POST['_idcliente'],$_POST['_identidad'],$_POST['_cliente'],$_POST['_direccion'],$_POST['_telefono'],
$_POST['_email'])) {
    
        if ($_POST['_idcliente']!="" || $_POST['_identidad']!="" ||$_POST['_cliente']!=""||
        $_POST['_direccion']!=""||$_POST['_telefono']!=""||$_POST['_email']) {
            $codigo=$_POST['_idcliente'];
            $identidad= $_POST['_identidad'];
            $cliente=$_POST['_cliente'];
            $direccion=$_POST['_direccion'];
            $telefono=$_POST['_telefono'];
            $email=$_POST['_email'];
           
           
            $update="UPDATE rclientes SET identidad='$identidad',cliente='$cliente',direccion='$direccion',telefono='$telefono',email='$email' where id='$codigo'";

            mysqli_query($conn,$update) or die(mysqli_error($conn));
            print "<script>
            alert('Datos de Cliente actualizados');
            window.location='../Formularios/cliente.php?sms=1';
            </script>";

           
        } else {
            print "<script>
                    alert('Datos no validados');
                    window.location='../Formularios/cliente.php?sms=1';
                    </script>";
        }
    
}

?>