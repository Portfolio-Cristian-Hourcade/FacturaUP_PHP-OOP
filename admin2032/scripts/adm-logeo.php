<?php

session_start();

	include '../../class/admin.php';
	include '../../class/conmysql.php';

	/*	Variables  */

if(empty($_POST["usuario"]) || empty($_POST["contra"])){
	header('Location: ../pages/login.php');
}

$user = $_POST["usuario"];
$pass = $_POST["contra"];


$User = preg_replace('([^A-Za-z0-9])', '', $user);	/* Con esta linea evitamos una */
$Pass = preg_replace('([^A-Za-z0-9])', '', $pass);	/*		 injeccion sql  	   */

/* ------------------------- */

$sql="SELECT * FROM admin WHERE adm_user='".$User."' AND adm_pass='".$Pass."' AND adm_status=1";
	
$NewConnect = new Admin();
$NewConnect->Login($sql,$User,$Pass);

?>
