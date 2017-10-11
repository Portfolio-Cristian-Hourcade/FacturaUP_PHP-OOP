<?php

session_start();

	include '../../class/links.php';
	include '../../class/conmysql.php';

/*--------- Variables --------*/

$id = $_POST["id"];
$info = $_POST["info"];

/*----------------------------*/

if($info==1){
	$sql = "UPDATE link SET l_status=0 WHERE l_id='".$id."'";
}elseif($info==0){
	$sql = "UPDATE link SET l_status=1 WHERE l_id='".$id."'";
}

$NewConnect = new Links();
$NewConnect->EditarLinks($sql);

?>