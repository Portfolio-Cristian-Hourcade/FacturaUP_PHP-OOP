<?php

session_start();

if(@$_SESSION["adm_user"]==""){
    header('Location: ../pages/login.php');	// Con esta linea evitamos entradas indeseadas. //
}

	include '../../class/links.php';
	include '../../class/conmysql.php';
	

$sql="SELECT * FROM link";
	
$NewConnect = new Links();
$NewConnect->ListarLinks($sql);

?>