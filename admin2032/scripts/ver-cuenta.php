<?php

session_start();

	include '../../class/clientes.php';
	include '../../class/conmysql.php';
	

$sql="SELECT * FROM clientes WHERE cl_status=1 AND cl_confirmar=1 AND cl_email='".$_SESSION["cl_email"]."'";
	
$NewConnect = new Clientes();

if($NewConnect->CantRegistros($sql)==1){
	echo 1;
}else{
	echo 0;
}

?>