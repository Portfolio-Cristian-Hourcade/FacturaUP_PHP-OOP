<?php

session_start();

	include '../../class/demo.php';
	include '../../class/conmysql.php';

/*--------- Variables --------*/

echo$fecha = $_POST["fecha"];

/*----------------------------*/

$sql="INSERT INTO demos (d_fecha) VALUES ('".$fecha."')";
	
$NewConnect = new Demos();
$NewConnect->Alta($sql);

?>