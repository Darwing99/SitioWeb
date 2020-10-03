<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";

        if(isset($_POST['_identidad'],$_POST['_rtn'],$_POST['_nombre'],$_POST['_razon'],$_POST['_direccion'],$_POST['_telefono'],$_POST['_celular'],$_POST['_email'])){
            if ($_POST['_identidad']!=="" || $_POST['_rtn']!==""|| $_POST['_nombre']!=="" || $_POST['_razon']!==""|| $_POST['_direccion']!=="" || $_POST['_telefono']!==""|| $_POST['_celular']!==""||$_POST['_email']!=="") {
                $identidad=$_POST['_identidad'];
                $rtn=$_POST['_rtn'];
                $nombre=$_POST['_nombre'];
                $razon=$_POST['_razon'];
                $direccion=$_POST['_direccion'];
                $telefono=$_POST['_telefono'];
                $celular=$_POST['_celular'];
                $email=$_POST['_email'];
                $sql="INSERT INTO rproveedores(id,identidad,rtn,proveedor,razon_social,direccion,telefono,email,celular) VALUES(null,'$identidad',$rtn,'$nombre','$razon','$direccion','$telefono','$email','$celular')";
                session_start();
                mysqli_query($conn, $sql) or die(''.mysqli_error($conn).'');
               
                print "<script>
                    alert('Registro creado satisfactoriamente');
                    window.location='../Formularios/proveedores.php';
                    </script>";
            }else{
                
                print "<script>
                alert('Campos vacios');
                window.location='../Formularios/proveedores.php?sms=1';
                </script>";
            }
            
          
        }else{
          
            print "<script>
                    alert('Datos no validados');
                    window.location='../Formularios/proveedores.php?sms=1';
                    </script>";
        }

   
?>