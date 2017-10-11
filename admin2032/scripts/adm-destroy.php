<?php

session_start();

	include '../../class/admin.php';
	include '../../class/conmysql.php';

/*--------- Variables --------*/

$sel = $_POST["sel"];

/*----------------------------*/

$NewConnect = new Admin();
$NewConnect->Borrar($sel);

?>