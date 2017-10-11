<?php

session_start();

	include '../../class/clientes.php';
	include '../../class/conmysql.php';

/*--------- Variables --------*/

$nombre= $_POST["nombre"];
$apellido = $_POST["apellido"];
$contrasena=$_POST["contrasena"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
/*--------------------------------.*/

echo  $sql="INSERT INTO clientes (cl_nombre,cl_apellido,cl_email,cl_pass,cl_tel,cl_status) VALUES ('".$nombre."','".$apellido."','".$email."','".$contrasena."','".$telefono."',1)";
	
$NewConnect = new Clientes();
$NewConnect->Alta($sql);

?>