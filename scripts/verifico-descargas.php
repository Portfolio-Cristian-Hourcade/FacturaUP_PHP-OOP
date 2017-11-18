<?php

	include '../class/demo.php';
	include '../class/conmysql.php';

/*--------- Variables --------*/
$email=$_POST["email"];
/*--------------------------------.*/

$sql="SELECT l_descargas FROM link WHERE l_user='".$email."' AND l_status=1";

	
$NewConnect = new Demos();

if($NewConnect->VerificarDescargas($sql)<3){
	echo $NewConnect->VerificarDescargas($sql);
	$descargas = $NewConnect->VerificarDescargas($sql)+1;
	$update = "UPDATE link SET l_descargas='".$descargas."' WHERE l_user='".$email."'";
	$NewConnect->Alta($update);
}else{
	echo "error";
	echo $NewConnect->VerificarDescargas($sql);
}

?>