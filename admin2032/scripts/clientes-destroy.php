<?php

session_start();

	include '../../class/clientes.php';
	include '../../class/conmysql.php';

/*--------- Variables --------*/

$sel = $_POST["sel"];

/*----------------------------{{{{{s*/

$NewConnect = new Clientes();
$NewConnect->Borrar($sel);

?>