<?php

session_start();


	include '../../class/clientes.php';
	include '../../class/conmysql.php';

	/*	Variables  */
	$NewObjeto = new Clientes();
	
	$NewObjeto->EmailDemo($_SESSION["cl_email"]);

?>
