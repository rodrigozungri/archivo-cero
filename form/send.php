<?php

// Conexion form > server (name)
$name = $_POST['act_name'];
$email = $_POST['act_email'];
$phone = $_POST['act_tel'];
$message = $_POST['act_message'];

// Texto plano
$header .= "Content-Type: text/plain";

// Enviar datos ingresados en el form al mail
$message = "Este mensaje fue enviado por " . $name . ",\r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Mensaje: " . $_POST['act_message'] . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());

$for = 'contacto@rodrigozungri.com'; // Email de destino
$subject = 'Mensaje desde el sitio web'; // Asunto del mail

// Enviar mail
mail($for, $subject, utf8_decode($message), $header);

// Redireccionar una vez enviado
header('Location:index.html');

?>