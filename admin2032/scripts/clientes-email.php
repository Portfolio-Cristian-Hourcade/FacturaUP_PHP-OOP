<?php

session_start();

	include '../../class/clientes.php';
	include '../../class/conmysql.php';

	/*	Variables  */
	$NewObjeto = new Clientes();
	
	echo $NewObjeto->EmailDemo($_SESSION["cl_email"]);

?>
