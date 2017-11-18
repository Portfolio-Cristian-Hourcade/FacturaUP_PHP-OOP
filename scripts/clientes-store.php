<?php



	include '../class/clientes.php';
	include '../class/conmysql.php';

/*--------- Variables --------*/

$nombre= $_POST["nombre"];
$apellido = $_POST["apellido"];
$contrasena=md5($_POST["contrasena"]);
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$codigo=rand(0,999999999);

/*--------------------------------.*/

$sql="SELECT * from clientes where cl_email='".$email."'";


$NewConnect= New Clientes();
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
		
	 	if($resultado->num_rows==0){

echo 0;
 $sql="INSERT INTO clientes(cl_nombre,cl_apellido,cl_email,cl_pass,cl_tel,cl_codigo,cl_confirmar,cl_status) VALUES ('".$nombre."','".$apellido."','".$email."','".$contrasena."','".$telefono."','".$codigo."','0',1)";
	
$NewConnect->Alta($sql);

$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From:Factura UP<consultas@facturaup.com>'."\r\n";

$cuerpo ="
<meta charset='utf-8'>
<style type='text/css'>
	@import url('https://fonts.googleapis.com/css?family=Open+Sans');
	p,h1,b{
		font-family: 'Open Sans', sans-serif;
	}
</style>
<div style='background-color:#f1f1f1;width:100%;height:682px;margin:0 auto;padding-top:10px;'>
<div style='width:95%;height:50px;margin:0 auto;
background-color:#3289e7;
	box-shadow: 2px 2px 2px #ccc;color:#fff;text-align:center;font-size:13px;line-height:50px;'>

<h1 style='color:#fff;text-align:center;line-height:50px; text-shadow: 2px 2px 2px black;'>Factura UP</h1>


</div>
<div style='width:95%;height:400px;margin:0 auto;
background-color:#fff;border:#999 solid 1px;'>

<div style='width:85%;height:390px;margin:10px auto;
background-color:#fff;'>

<p style='font-size:23px'>Hola ".$nombre."</p>
<p style='font-size: 19px;'>Para poder terminar con su registro, debe confirmar sus credenciales, para eso, debe hacer click en el siguiente enlace
<a href='http://edgardovillafane.com/edgardovillafane/facturaup/scripts/confirmar_registro.php?email=".$email."&codigo=".$codigo."'>Click aqui</a>
</p>
<p style='font-size: 19px;'>
Te recordamos que una vez que tu cuenta este confirmada, tendras acceso a todo el 
sistema de Factura Up. Podras descargar la version DEMO hasta 3 veces, y vas a poder
comprar las versiones PREMIUM.</p>
<b style='font-size: 20px'>Empeza con tu facturacion electronica ahora!</b>
<p style='font-size: 19px'>Saluda Atte. El equipo de FacturaUp</p>

</div></div>
</div>";

mail($email,"Confirmar registro", $cuerpo ,$headers);


	 	}else{

echo 1;

	 	}
	
 

?>