<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

$destinatario = "elvio.valdez@biomill.com.ar";


$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje: $mensaje \n";

// enviando mensaje

mail($destinatario, $asunto, $carta);
header('Location:envioExi.html');


?>
