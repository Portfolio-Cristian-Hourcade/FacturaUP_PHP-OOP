<?php 
	$destino="ezequiel.r.gallo@gmail.com";
	$nombre=$_POST["nombre"];
	$correo=$_POST["email"];
	$mensaje=$_POST["mensaje"];

	$contenido="Nombre: " .$nombre. "\nCorreo: " .$correo. "\nMensaje: " .$mensaje;

	mail($destino,"Contacto",$contenido);
	header("Location:gracias.html");


 ?>

 