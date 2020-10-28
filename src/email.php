<?php
$name = utf8_decode( $_POST['nombre']);
$email = $_POST['email'];
$message = utf8_decode( $_POST['mensaje']);
$telefono = $_POST['telefono'];
header('Content-Type: application/json');
if ($name === ''){
    print json_encode(array('message' => 'Nombre está vacio', 'code' => 0));
    exit();
}
if ($email === ''){
    print json_encode(array('message' => 'Email está vació', 'code' => 0));
    exit();
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    print json_encode(array('message' => 'Formato de email inválido', 'code' => 0));
    exit();
}
}
if ($telefono === ''){
    print json_encode(array('message' => 'No ha ingresado numero telefónico', 'code' => 0));
    exit();
}
if ($message === ''){
    print json_encode(array('message' => 'Escribe el mensaje, por favor', 'code' => 0));
    exit();
}
$content="From: $name \nEmail: $email \nTeléfono: $telefono \nMensaje:  $message";
$recipient = "infoazhn@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $telefono, $content, $mailheader) or die("Error!");
print "<script>
        alert('Mensaje enviado satisfactóriamente');
        window.location='contactos.php';
        </script>";

exit();
?>