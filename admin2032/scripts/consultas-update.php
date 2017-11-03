<?php

session_start();

	include '../../class/consultas.php';
	include '../../class/conmysql.php';

/*--------- Variables --------*/

$id = $_POST["id"];
$mensaje = $_POST["mensajeResp"];
date_default_timezone_set("America/Argentina/Buenos_Aires");
$time=time();
$fecha=date("Y-m-d",$time);
$hora= date("H:i",$time);

/*----------------------------*/

/*------- SQL ---------------*/

 $sql = "UPDATE consultas 
 
 		SET con_respuesta='".$mensaje."',con_fecharespuesta='".$fecha."',con_horarespuesta='".$hora."' 
 
 		WHERE con_id='".$id."'";


/*......Constructores.............*/

$NewConnect = new Consultas();
$NewConnect->EditarConsultas($sql);

?>