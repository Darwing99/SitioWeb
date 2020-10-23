<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";

        if(isset($_POST['_name'],$_POST['_empleado'],$_POST['_estado'],$_POST['_tipoUser'],$_POST['_pass'])){
            if($_POST['_name']!=""||$_POST['_empleado']!="" || $_POST['_estado']!="" || $_POST['_tipoUser']!=""||$_POST['_pass']!=""){
               
                $name=$_POST['_name'];
                $empleado=$_POST['_empleado'];
                $estado=$_POST['_estado'];
                $tipouser=$_POST['_tipoUser'];
                $passa=$_POST['_pass'];
               
                $sql="INSERT INTO rusuario(id,nombre,usuario,pass,estado,_idtipo) VALUES(null,'$name','$empleado',sha1('$passa'),'$estado','$tipouser')";
     
                mysqli_query($conn,$sql) or  die(''.mysqli_error($conn).'');
                
                print "<script>
                alert('Registro creado satisfactoriamente');
                window.location='../Formularios/empleado.php';
                </script>";
                
            
            }else{
                
                print "<script>
                alert('Datos no están validados');
                window.location='../Formularios/empleado.php?sms=1';
                </script>";
            }
            
          
        }else{
          
            print "<script>
                    alert('Datos no están validados');
                    window.location='../Formularios/empleado.php?sms=1';
                    </script>";
        }

   
?>