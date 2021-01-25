<?php
include('../BD/conexion.php');
spl_autoload_register(function(){

});

$mensajeOK=false;
$mensajeError="";


if(isset($_POST['_email'],$_POST['_password'])){
    if($_POST['_email']!=""){
        if($_POST['_password']!=""){
            try {
                    $user=$_POST['_email'];
                    // Seguridad para evitar caracteres especiales
                    $usera=mysqli_real_escape_string($conn,$user);
                    $passa=$_POST['_password'];

                    $consulta="SELECT * FROM rusuario WHERE usuario='$usera' AND pass=sha1('$passa') AND estado='1'";
                    $QueryDB=mysqli_query($conn,$consulta);

                    session_start();
                    if(mysqli_num_rows($QueryDB)>0){
                        $mensajeOK=true; 
                    
                        $datos=mysqli_fetch_array($QueryDB);
                        $_SESSION['id']=$datos[0];
                        $_SESSION['usuario']=$datos[1];
                        $_SESSION['nombre']=$datos[2];
                        $_SESSION['estado']=$datos[4];
                        $_SESSION['rol']=$datos[5]; 
                       
                        //Función para mostrar sesiones
                            if(!isset($_SESSION['id'])){
                            header("location:../Formularios/login");
                            }else if($_SESSION['rol']==1){
                               
                                header("location:../Formularios/menu");

                            }else{   
                                header("location:../Formularios/ventas");
                            }
                            
                    }else{
                        $mensajeError="El usuario o contraseña no existen";
                        print "<script>
                                alert('El usuario/contraseña no existen');
                                window.location='../Formularios/login?message=WarningMessage&type=WarningMessage';
                                </script>";
                                return false;
                }
            } catch (\Throwable $th) {
              
            }
         
        }else{
          
            print "<script>
                    alert('Iniciar Sesión');
                    window.location='../Formularios/login';
                    </script>";
        }

    }else{
        
        print "<script>
                alert('Acceso Denegado');
                window.location='../Formularios/login?message=WarningMessage&type=WarningMessage';
                </script>";

    }
}else{
   
    print "<script>
            alert('Todos los campos son requeridos');
            window.location='../Formularios/login?message=SuccessMessage&type=SuccessMessage';
            </script>";
}
?>