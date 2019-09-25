<?php
//Obtener los datos en variables del form
$nombre_usuario = $_POST['nombre'];
$email_usuario = $_POST['email'];
$mensaje_usuario = $_POST['mensaje'];

$destino="sebastiano-10@hotmail.com";

$asunto="Consulta enviada desde sebastianObando.com";

$mensaje="Nombre:".$nombre_usuario."\r\n";
$mensaje="Email:".$email_usuario."\r\n";
$mensaje="Consulta:".$mensaje_usuario."\r\n";

$remitente="From: ejemplocorreo@hotmail.com";

mail($destino,$asunto,$mensaje,$remitente);

header("Location:index.php?i=ok");

?>