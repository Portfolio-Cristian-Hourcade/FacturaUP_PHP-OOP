<?php

session_start();

	include '../../class/admin.php';
	include '../../class/conmysql.php';

/*--------- Variables --------*/

$user = $_POST["user"];
$pass = $_POST["pass"];

/*----------------------------*/

$sql="INSERT INTO admin (adm_user,adm_pass,adm_status) VALUES ('".$user."','".$pass."',1)";
	
$NewConnect = new Admin();
$NewConnect->Alta($sql,$user,$pass);

?>