<?php

session_start();

	include 'class/conmysql.php';
	include 'class/consultas.php';

/*--------- Variables --------*/

if(empty($_SESSION["cl_email"])){

date_default_timezone_set("America/Argentina/Buenos_Aires");
$time=time();
$fecha=date("Y-m-d",$time);
$hora= date("H:i",$time);
$nombre= $_POST["nom"];
$email=$_POST["em"];
$mensaje=$_POST["men"];
/*--------------------------------.*/

  $sql="INSERT INTO consultas (con_contacto,con_mensaje,con_fechaenvio,con_horaenvio,con_email,status) VALUES ('".$nombre."','".$mensaje."','".$fecha."','".$hora."','".$email."',1)";
	
$NewConnect = new Consultas();
$NewConnect->Alta($sql);

}else{

	date_default_timezone_set("America/Argentina/Buenos_Aires");
	$time=time();
	$fecha=date("Y-m-d",$time);
	$hora= date("H:i",$time);
	$nombre= $_POST["nombre"];
	$email=$_POST["email"];
	$mensaje=$_POST["mensaje"];
/*--------------------------------.*/

  $sql="INSERT INTO soporte (so_contacto,so_mensaje,so_hora_envio,so_fecha_envio,so_email,so_status) VALUES ('".$nombre."','".$mensaje."','".$hora."','".$fecha."','".$email."',1)";
	
	$NewConnect = new Consultas();
	$NewConnect->Alta($sql);	
}

?>