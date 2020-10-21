<?php
include('../BD/conexion.php');
$mensajeOK=false;
$mensajeError="";

        if(isset($_POST['_tipoUser'])){
            if ($_POST['_tipoUser']!=="") {
                $tipo=$_POST['_tipoUser'];
                $sql="INSERT INTO rtipouser(idtipo,tipo) VALUES(null,'$tipo')";
                 
                print "<script>
                    alert('Registro creado satisfactoriamente');
                    window.location='../Formularios/tipos_Usuarios.php';
                    </script>";
            }else{
                
                print "<script>
                alert('Campos vacios');
                window.location='../Formularios/tipos_Usuarios.php?sms=1';
                </script>";
            }
            
          
        }else{
          
            print "<script>
                    alert('Datos no validados');
                    window.location='../Formularios/tipos_Usuarios.php?sms=1';
                    </script>";
        }
   
?>