<?php
$name = utf8_decode( $_POST['nombre']);
$email = $_POST['email'];
$message = utf8_decode( $_POST['mensaje']);
$telefono = $_POST['telefono'];
header('Content-Type: application/json');

$content="From: $name \nEmail: $email \nTeléfono: $telefono \nMensaje:  $message";
$recipient = "infoazhn@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $telefono, $content, $mailheader) or die("Error!");
header('location: contactos.php');

exit();
?>