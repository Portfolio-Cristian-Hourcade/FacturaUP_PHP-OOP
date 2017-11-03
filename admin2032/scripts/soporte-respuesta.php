<?php 

session_start();

	include '../../class/soporte.php';
	include '../../class/conmysql.php';
	
	$Objeto = New Soporte();
	$Objeto->EmailSoporte($_SESSION["cl_email"],$_POST["mensaje"]);


 ?>