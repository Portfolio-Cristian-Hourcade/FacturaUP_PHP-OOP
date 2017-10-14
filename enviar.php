<?php 
	$destino="ezequiel.r.@gmail.com";
	$nombre=$_POST["nombre"];
	$mensaje=$_POST["mensaje"];

	$contenido="Nombre: " . $nombre "\nCorreo: " .$correo. "\nMensaje: " .$mensaje;

	mail($destino,"Contacto",$contenido);
	header("Location:gracias.html");


 ?>