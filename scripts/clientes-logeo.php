<?php

session_start();

	include '../class/clientes.php';
	include '../class/conmysql.php';

	/*	Variables  */

// if(empty($_POST["email"]) || empty($_POST["contrasena"])){
// 	header('Location:login.php');
// }

$email = $_POST["email"];
$contrasena = $_POST["contrasena"];


$email= preg_replace('([^A-Za-z0-9])', '', $email);	/* Con esta linea evitamos una */
$contrasena = preg_replace('([^A-Za-z0-9])', '', $contrasena);	/*		 injeccion sql  	   */

/* ------------------------- */

$sql="SELECT * FROM clientes WHERE cl_email='".$email."' AND cl_pass='".$contrasena."' AND cl_status=1";
	
$NewConnect = new Clientes();
echo $NewConnect->Login($sql,$email,$contrasena);

?>
