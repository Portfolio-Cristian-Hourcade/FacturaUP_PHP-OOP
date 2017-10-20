<?php

$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

//Definir el correo de destino:
$dest='ezequiel.r.gallo@gmail.com';

//Estas son cabeceras que se usan para evitar que el correo llege a SPAM:
$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
$headers .= 'From:RUEDAS INDUSTRIALES<ventas@ruedas-industriales.com>'."\r\n";
$headers .= 'Reply-to:'.$email. "\r\n";

//Aqui definimos el asunto y armamos el cuerpo del mensaje	
$asunto="Consulta desde RUEDAS INDUSTRIALES ";

$cuerpo ="

<div style='background-color:#f1f1f1;width:100%;height:682px;margin:0 auto;padding-top:10px;'>
<div style='width:95%;height:100px;margin:0 auto;
background-color:#62bfe6;
	box-shadow: 2px 2px 2px #ccc;color:#fff;text-align:center;font-size:13px;line-height:100px;'>


<h1 style='color:#fff;text-align:center;font-size:28px;line-height:100px;'>RUEDAS INDUSTRIALES</h1> 

</div>
<div style='width:95%;height:auto;margin:0 auto;
background-color:#fff;border:#999 solid 1px;'>

<div style='width:85%;height:380px;margin:10px auto;
background-color:#fff;'>

Consulta <br><br>
Nombre ó empresa: ".$name."</br><br>
Email: ".$email."</br><br>
Mensaje:  ".$message."<br><br>

</div></div>

</div>";

mail($dest,$asunto,$cuerpo,$headers);//enviar
echo "Mensaje enviado...";
?>