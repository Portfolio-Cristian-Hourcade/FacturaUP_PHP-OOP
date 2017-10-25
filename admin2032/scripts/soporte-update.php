<?php
	include '../../class/soporte.php';
	include '../../class/conmysql.php';
/*--------- Variables --------*/

date_default_timezone_set("America/Argentina/Buenos_Aires");
$time=time();
$fecha=date("Y-m-d",$time);
$hora= date("H:i",$time);
$id=$_POST["id"];
$mensaje=$_POST["mensaje"];
/*--------------------------------.*/

 echo $sql="UPDATE soporte SET so_respuesta='".$mensaje."' WHERE so_id='".$id."'";
	
$NewConnect = new Soporte();
$NewConnect->ResponderMensaje($sql);

?>