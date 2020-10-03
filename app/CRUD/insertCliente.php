<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";

        if(isset($_POST['_identidad'],$_POST['_nombre'],$_POST['_direccion'],$_POST['_telefono'],$_POST['_email'])){
            if ($_POST['_identidad']!=="" || $_POST['_nombre']!=="" || $_POST['_direccion']!=="" || $_POST['_telefono']!==""||$_POST['_email']!=="") {
                $identidad=$_POST['_identidad'];
                $nombre=$_POST['_nombre'];
                $direccion=$_POST['_direccion'];
                $telefono=$_POST['_telefono'];
                $email=$_POST['_email'];
                $sql="INSERT INTO rclientes(id,identidad,cliente,direccion,telefono,email) VALUES(null,'$identidad','$nombre','$direccion','$telefono','$email')";
                session_start();
                mysqli_query($conn, $sql) or die(''.mysqli_error($conn).'');
               
                print "<script>
                    alert('Registro creado satisfactoriamente');
                    window.location='../Formularios/cliente.php';
                    </script>";
            }else{
                
                print "<script>
                alert('Campos vacios');
                window.location='../Formularios/cliente.php?sms=1';
                </script>";
            }
            
          
        }else{
          
            print "<script>
                    alert('Datos no validados');
                    window.location='../Formularios/cliente.php?sms=1';
                    </script>";
        }

   
?>