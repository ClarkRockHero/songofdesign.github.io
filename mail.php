<?php
$nombre = $_POST['nombre'];
$mail= $_POST['email'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "MENSAJE DE: " . $nombre . ",\r\n";
$mensaje .= "CORREO: " . $mail . " \r\n";
$mensaje .= "MENSAJE: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "FECHA: " . date('d/m/Y', time());

$para = 'designjorgemedina2011@gmail.com';
$asunto = 'PAGINA ODH DESIGN';
mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:plaza.html");
?>