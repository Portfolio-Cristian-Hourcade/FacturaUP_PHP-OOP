<?php

session_start();

	include '../../class/clientes.php';
	include '../../class/conmysql.php';

/*--------- Variables --------*/

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];
$telefono= $_POST["telefono"];

/*----------------------------*/

/*------- SQL ---------------*/

$sql = "	UPDATE  clientes SET cl_nombre='".$nombre."', cl_apellido='".$apellido."',cl_email='".$email."',cl_pass='".$contrasena."',cl_tel='".$telefono."' WHERE cl_id='".$id."'";

/*...........................*/

$NewConnect = new Clientes();
$NewConnect->EditarClientes($sql);

?>