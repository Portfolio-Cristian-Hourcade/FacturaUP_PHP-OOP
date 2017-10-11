<?php

session_start();

if(is_null(@$_SESSION["adm_user"])){
    header('Location: ../pages/login.php');	// Con esta linea evitamos entradas indeseadas. //
}

	include '../../class/clientes.php';
	include '../../class/conmysql.php';
	

$sql="SELECT * FROM clientes WHERE cl_status=1";
	
$NewConnect = new Clientes();
$NewConnect->ListarClientes($sql);

?>