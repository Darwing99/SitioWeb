<?php


class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'dbproyecto');
        define('usuario', 'root');
        define('password', '');
        				        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);	
            $conexion->setAttribute(PDO::ATTR_TIMEOUT,ini_get('max_execution_time'));	
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}

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