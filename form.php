<?php

$nombre = $_POST['fname'] 
$mail = $_POST['email']
$number = $_POST['number']

$mensaje = "Datos de" . $nombre . ",\r\n"
$mensaje = "Mail" . $mail . ",\r\n"
$mensaje = "Numero" . $number . ",\r\n"
$mensaje = "Enviado el" . date('d/m/y', time()); 

$destinatario = 'hakunarevival@gmail.com' ; 
$asunto = 'Mail enviado desde HAKUNA WEB'; 

mail($destino, $asunto, utf8_decode($mensaje), $header);

header( 'Location:index.html');
