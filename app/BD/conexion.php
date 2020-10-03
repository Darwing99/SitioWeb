<?php
$servername="localhost";
$username="root";
$password="";
$database="dbproyecto";
$mjserror="";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    $msjerror="Conexion fallida";
}else{
    // echo"conexion correcta";
}
?>