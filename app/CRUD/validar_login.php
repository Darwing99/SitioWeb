<?php

spl_autoload_register(function($class){
    include "../class/$class/$class.class.php";
});

if(isset($_POST['enviar']))
{

    $email=$_POST['_email']?? '';
    $pass=$_POST['_password']?? '';
    if(empty($email) or empty($pass)){
        header('location: ../Formularios/login?message=Introduzca usuario y contraseña');

    }


    $login=new Login(new Conexion);
    $login->setEmail($email);
    $login->setPassword($pass);
    $login->signIn();
    var_dump($login->signIn());

}

?>