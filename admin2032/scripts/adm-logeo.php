<?php

session_start();
	
	include '../../class/conmysql.php';
	include '../../class/admin.php';
	

	/*	Variables  */

if(empty($_POST["usuario"]) || empty($_POST["contra"])){
	header('Location: ../pages/login.php');
}

$user = $_POST["usuario"];
$pass = $_POST["contra"];


// $User = preg_replace('([^A-Za-z0-9])', '', $user);	 Con esta linea evitamos una 
// $Pass = preg_replace('([^A-Za-z0-9])', '', $pass);	/*		 injeccion sql  	   */

/* ------------------------- */

$sql="SELECT * FROM admin WHERE adm_user='".$user."' AND adm_pass='".$pass."' AND adm_status=1";
	
$NewConnect = new Admin();
echo $NewConnect->Login($sql,$User,$Pass);

?>
