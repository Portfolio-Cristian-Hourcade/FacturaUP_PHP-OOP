<?php



	include '../class/clientes.php';
	include '../class/conmysql.php';

/*--------- Variables --------*/

$nombre= $_POST["nombre"];


$email=$_POST["email"];
/*--------------------------------.*/
 $sql="SELECT * from clientes where cl_email='".$email."'";


$NewConnect= New Clientes();
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
		


	 	if($resultado->num_rows==0){

echo 0;


	 	}else{
	$fila=mysqli_fetch_assoc($resultado);
	
$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= 'From:FacturaUP<consultas@facturaup.com>'."\r\n";

$cuerpo ="

<div style='background-color:#f1f1f1;width:100%;height:682px;margin:0 auto;padding-top:10px;'>
<div style='width:95%;height:50px;margin:0 auto;
background-color:#000;color:#fff;text-align:center;font-size:13px;line-height:50px;'>

<h1 style='color:#fff;text-align:center;font-size:15px;line-height:50px;'>Factura UP</h1>


</div>
<div style='width:95%;height:400px;margin:0 auto;
background-color:#fff;border:#999 solid 1px;'>

<div style='width:85%;height:400px;margin:10px auto;
background-color:#fff;'>

Estimado/a ".$fila["cl_nombre"]."<br><br>

Haga click en el siguiente link o peguelo en la barra de direcciones de su navegador
<a href='http://www.facturaup.com/factura-master/modificarc.php?correo=".$email."&nombre=".$fila["cl_nombre"]."'>http://www.facturaup.com/factura-master/modificarc.php?correo=".$email."&nombre=".$fila["cl_nombre"]."</a><br><br>Saluda Atte.
Factura UP</div></div>
</div>";
 
mail($email,"Modificacion de password", $cuerpo ,$headers);		
	echo 1;

	 	}
	
 

?>