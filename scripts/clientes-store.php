<?php



	include '../class/clientes.php';
	include '../class/conmysql.php';

/*--------- Variables --------*/

$nombre= $_POST["nombre"];
$apellido = $_POST["apellido"];
$contrasena=md5($_POST["contrasena"]);
$telefono=$_POST["telefono"];
$email=$_POST["email"];
/*--------------------------------.*/
 $sql="SELECT * from clientes where cl_email='".$email."'";


$NewConnect= New Clientes();
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
		



	 	if($resultado->num_rows==0){

echo 0;
 $sql="INSERT INTO clientes (cl_nombre,cl_apellido,cl_email,cl_pass,cl_tel,cl_status) VALUES ('".$nombre."','".$apellido."','".$email."','".$contrasena."','".$telefono."',1)";
	
$NewConnect->Alta($sql);

	 	}else{

echo 1;

	 	}
	
 

?>