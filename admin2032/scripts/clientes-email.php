<?php

session_start();
echo $_SESSION["cl_email"];

	include '../../class/clientes.php';
	include '../../class/conmysql.php';

	/*	Variables  */
	$NewObjeto = new Clientes();
	
	$NewObjeto->EmailDemo($_SESSION["cl_email"]);

?>
