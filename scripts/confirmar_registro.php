<?php

	include '../class/clientes.php';
	include '../class/conmysql.php';


 $sql="SELECT * from clientes where cl_codigo='".$_GET["codigo"]."' and  cl_email='".$_GET["email"]."'";


$NewConnect= New Clientes();
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
		



	 	if($resultado->num_rows!=0){


 

$sql="UPDATE clientes set cl_confirmar=1,cl_codigo='' where cl_email='".$_GET['email']."'";
$NewConnect = new Clientes();
$NewConnect->EditarClientes($sql);

header("Location:localhost/factura-master/");
}else{
	echo"No se pudo corfirmar el email";
}

	



	
 

?>