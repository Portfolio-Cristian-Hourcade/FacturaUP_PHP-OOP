<?php

session_start();

if(is_null(@$_SESSION["adm_user"])){
    header('Location: ../pages/login.php');	// Con esta linea evitamos entradas indeseadas. //
}

	include '../../class/admin.php';
	include '../../class/conmysql.php';
	

$sql="SELECT * FROM admin WHERE adm_status=1";
	
$NewConnect = new Admin();
$NewConnect->ListarAdmin($sql);

?>