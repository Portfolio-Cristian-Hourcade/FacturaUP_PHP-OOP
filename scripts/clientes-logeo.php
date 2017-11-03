<?php

session_start();

	include '../class/clientes.php';
	include '../class/conmysql.php';

	/*	Variables  */

$email = $_POST["email"];
$contrasena = md5($_POST["contrasena"]);

/* ------------------------- */

$sql="SELECT * FROM clientes WHERE cl_email='".$email."' AND cl_pass='".$contrasena."' AND cl_status=1";
	
$NewConnect = new Clientes();
echo $NewConnect->Login($sql,$email,$contrasena);

?>
