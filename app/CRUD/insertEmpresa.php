<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";

        if(isset($_POST)){
            if($_POST['rtn']!=="" || $_POST['empresa']!=="" || $_POST['direccion']!==""||$_POST['telefono']!==""||$_POST['correo']!==""){
                $rtn=$_POST['rtn'];
                $id=$_POST['id'];
                $empresa=$_POST['empresa'];
                $direccion=$_POST['direccion'];
                $telefono=$_POST['telefono'];
                $correo=$_POST['correo'];
                $imagen= addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $sql="INSERT INTO rempresa(id,rtn,nombre_empresa,direccion,telefono,correo,logo) VALUES(null,'$rtn','$empresa','$direccion','$telefono','$correo','$imagen')";
                
                mysqli_query($conn,$sql) ;
                
                print "<script>
                alert('Registro creado satisfactoriamente');
                window.location='../Formularios/empresa.php';
                </script>";
                
            
            }else{
                
                print "<script>
                alert('Datos no están validados');
                window.location='../Formularios/empresa.php?sms=1';
                </script>";
            }
            
          
        }else{
          
            print "<script>
                    alert('Datos no están validados');
                    window.location='../Formularios/empresa.php?sms=1';
                    </script>";
        }

   
?>