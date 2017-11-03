<?php

	include '../class/clientes.php';
	include '../class/conmysql.php';

/*--------- Variables --------*/

$email=$_POST["email"];

/*--------------------------------.*/

$sql="SELECT * from clientes where cl_email='".$email."'";
	
$NewConnect = new Clientes();
echo $NewConnect->VerificoEmail($sql);

?>