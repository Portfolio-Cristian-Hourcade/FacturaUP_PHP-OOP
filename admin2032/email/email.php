<?php

$Email = $_POST["email"];

$to = "'".$Email."'";
$subject = "¡Descarge ahora su demo!";
$message = "Hola, muchas gracias por haber contratado nuestro servicio, espero que le sea de mucha ayuda, no dude en contactarse con contacto al cliente si es necesario. El equipo de FacturaUp. <br><br> www.google.com";
$headers = "From: facturaup@gmail.com" . "\r\n" . "CC:'".$Email."'";
 
mail($to, $subject, $message, $headers);

?>