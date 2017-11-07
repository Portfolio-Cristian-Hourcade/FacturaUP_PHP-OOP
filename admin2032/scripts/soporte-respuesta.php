<?php 

session_start();

	include '../../class/soporte.php';
	include '../../class/conmysql.php';
	
	$Objeto = New Soporte();
	echo $Objeto->EmailSoporte($_POST["email"],$_POST["mensaje"]);


 ?>