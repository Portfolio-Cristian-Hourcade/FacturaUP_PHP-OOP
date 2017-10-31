<?php 

	include '../../class/soporte.php';
	include '../../class/conmysql.php';
	
	$Objeto = New Soporte();
	$Objeto->EmailSoporte($_POST["mensaje"]);


 ?>