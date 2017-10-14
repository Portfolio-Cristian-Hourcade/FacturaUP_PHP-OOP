<?php

session_start();

if(empty(@$_SESSION["adm_user"])){
    header('Location: ../pages/login.php');	// Con esta linea evitamos entradas indeseadas. //
}

	include '../../class/ventas.php';
	include '../../class/conmysql.php';
	

$sql="SELECT * FROM ventas";
	
$NewConnect = new Ventas();
$NewConnect->ListarVentas($sql);

?>