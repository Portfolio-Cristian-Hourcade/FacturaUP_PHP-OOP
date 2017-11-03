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

<div style='background-color:#f1f1f1;width:100%;height:682px;margin:0 auto;padding-top:10px;'>
<div style='width:95%;height:50px;margin:0 auto;
background-color:#3289e7;
	box-shadow: 2px 2px 2px #ccc;color:#fff;text-align:center;font-size:13px;line-height:50px;'>

<h1 style='color:#fff;text-align:center;font-size:20px;line-height:50px;'>Factura UP</h1>


</div>
<div style='width:95%;height:400px;margin:0 auto;
background-color:#fff;border:#999 solid 1px;'>

<div style='width:85%;height:380px;margin:10px auto;
background-color:#fff;'>

Estimado/a ".$nombre."<br><br>
Haga click en el siguiente link o peguelo en la barra de direcciones de su navegador
<a href='http://www.facturaup.com/factura-master/scripts/confirmar_registro.php?email=".$email."&codigo=".$codigo."'>http://www.facturaup.com/factura-master/scripts/confirmar_registro.php?email=".$email."&codigo=".$codigo."</a><br><br>Saluda Atte.
factura Up</div></div>
</div>";

mail($email,"Confirmar registro", $cuerpo ,$headers);


	 	}else{

echo 1;

	 	}
	
 

?>