<?php
include('../BD/conexion.php');

session_start();

$mensajeOK=false;
$mensajeError="";


if (isset($_POST['_idproveedor'],$_POST['_identidadP'],$_POST['_rtn'],$_POST['_proveedor'],$_POST['_razon'],$_POST['_direccionP'],$_POST['_telefonoP'],
$_POST['_email'],$_POST['_celularP'])) {
    
        if ($_POST['_idproveedor']!="" || $_POST['_identidadP']!="" ||$_POST['_proveedor']!=""||
        $_POST['_direccionP']!=""||$_POST['_telefono']!=""||$_POST['_email']!="" || $_POST['_celularP']!="" || $_POST['_rtn']!="" || $_POST['_razon']!="") {
            $codigo=$_POST['_idproveedor'];
            $identidad= $_POST['_identidadP'];
            $rtn=$_POST['_rtn'];
            $proveedor=$_POST['_proveedor'];
            $razon=$_POST['_razon'];
            $direccion=$_POST['_direccionP'];
            $telefono=$_POST['_telefonoP'];
            $celular=$_POST['_celularP'];
            $email=$_POST['_email'];
           
           
            $update="UPDATE rproveedores SET identidad='$identidad',rtn='$rtn',proveedor='$proveedor',razon_social='$razon',direccion='$direccion',telefono='$telefono',email='$email',celular='$celular' where id='$codigo'";

            mysqli_query($conn,$update) or die(mysqli_error($conn));
            print "<script>
            alert('Datos de proveedor actualizados');
            window.location='../Formularios/proveedores.php?sms=1';
            </script>";

           
        } else {
            print "<script>
                    alert('Datos no validados');
                    window.location='../Formularios/proveedores.php?sms=1';
                    </script>";
        }
    
}else{
    print"
    <script>
    alert('error');
    </script>
    ";
}

?>