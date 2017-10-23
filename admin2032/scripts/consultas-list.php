<?php

session_start();

if(is_null(@$_SESSION["adm_user"])){
    header('Location: ../pages/login.php');	// Con esta linea evitamos entradas indeseadas. //
}

	include '../../class/consultas.php';
	include '../../class/conmysql.php';
	

$sql="SELECT * FROM consultas WHERE status=1";
	
$NewConnect = new Consultas();
$NewConnect->ListarConsultas($sql);

?>