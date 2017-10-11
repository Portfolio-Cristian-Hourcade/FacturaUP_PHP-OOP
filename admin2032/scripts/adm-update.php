<?php

session_start();

	include '../../class/admin.php';
	include '../../class/conmysql.php';

/*--------- Variables --------*/

$id = $_POST["id"];
$user = $_POST["user"];
$pass = $_POST["pass"];

/*----------------------------*/

/*------- SQL ---------------*/

$sql = "	UPDATE  admin SET adm_user='".$user."', adm_pass='".$pass."' WHERE adm_id='".$id."'";

/*...........................*/

$NewConnect = new Admin();
$NewConnect->EditarAdmin($sql);

?>