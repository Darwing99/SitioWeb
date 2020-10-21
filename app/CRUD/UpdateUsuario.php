<?php
include('../BD/conexion.php');

session_start();

$mensajeOK=false;
$mensajeError="";


if (isset($_POST['_identidad'],$_POST['_nombre'],$_POST['_email'],$_POST['_Password'],$_POST['_newPass'])) {
    if ($_POST['_email']!="") {
        if ($_POST['_Password']!="" || $_POST['_newPass']!=="") {
            $identidad=$_POST['_identidad'];
            $usera=$_POST['_email'];
            $passa=($_POST['_Password']);
            $newPass=$_POST['_newPass'];
            $nombre=$_POST['_nombre'];

            $consulta="SELECT * FROM rusuario WHERE id='$identidad' and pass=sha1('$passa')";
            
            $QueryDB=mysqli_query($conn, $consulta);
            if(mysqli_num_rows($QueryDB)>0){
                    $update="UPDATE rusuario SET usuario='$usera',nombre='$nombre',pass=sha1('$newPass') where id='$identidad'";
                    mysqli_query($conn,$update) or die(mysqli_error($conn));
                    print "<script>
                    alert('Datos de usuario actualizados');
                    window.location='../Formularios/menu.php?sms=1';
                    </script>";

            } //Función para mostrar sesiones
        } else {
        }
    } else {

    }
}

?>