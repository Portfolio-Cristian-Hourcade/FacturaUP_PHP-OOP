<?php 

session_start();
 
	include '../../class/links.php';
	include '../../class/conmysql.php';

	$fecha=$_POST["fecha"];
	$ip=$_SERVER["REMOTE_ADDR"];
	$email=$_SESSION["cl_email"];

	$NewConnect = new Links();

if(empty($NewConnect->ContarLink($email))){

 $sql = "INSERT INTO link (l_user,l_link,l_ip,l_descargas,l_fecha,l_status) VALUES ('".$_SESSION["cl_email"]."','localhost/factura/descarga-demo.php?id=$email','".$ip."',0,'".$fecha."',1)";
 $NewConnect->Alta($sql);
 echo 1;
}else{
	echo 0;
}







?>