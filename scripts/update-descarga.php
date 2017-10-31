<?php

	include '../class/demo.php';
	include '../class/conmysql.php';

/*--------- Variables --------*/
$email=$_POST["email"];
/*--------------------------------.*/

$sql="SELECT l_descargas FROM link WHERE l_user='".$email."' AND l_status=1";

	
$NewConnect = new Demos();
echo $NewConnect->VerificarDescargas($sql);

?>