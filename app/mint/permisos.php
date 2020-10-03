<?php
include('../BD/conexion.php');
session_start();
if($_SESSION['idTipo']=='1'){
    if($_POST['SitioW20']=='login'){
        $active_home="active";

    }else{
        $active_home="";
    }


}
?>
<?php



?>