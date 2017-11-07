<?php

session_start();

if(empty($_SESSION["adm_user"])){
    header('Location: ../pages/login.php');	// Con esta linea evitamos entradas indeseadas. //
}

	include '../../class/soporte.php';
	include '../../class/conmysql.php';
	

$sql="SELECT * FROM soporte WHERE so_status=1";
	
$NewConnect = new Soporte();
$NewConnect->ListarSoporte($sql);

?>