<?php
class Clientes{
	public function Login($sql,$email,$contrasena){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado=$con->AltaSql($sql);
			$fila=mysqli_fetch_assoc($resultado);
			if($fila["cl_email"]==""){
				return "Error";
			}else{
				$_SESSION["cl_email"]=$fila["cl_email"];
				$_SESSION["cl_pass"]=$fila["cl_pass"];
			}
		}
		
		
		public function Alta($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->AltaSql($sql);
			$con->CloseConnection();
		}
		public function Borrar($sel){
			$con = new ConnectionMySQL();
			$seleccion = explode("|",$sel);
			for($x=0;$x<count($seleccion);$x++){
				$sql="UPDATE clientes SET cl_status=0 WHERE cl_id=$seleccion[$x]";
				$con->CreateConnection();
				
				$con->AltaSql($sql);
			}
			$con->CloseConnection();
		}
		public function ListarClientes($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$res = $con->SeleccionarAdmin($sql);
			while($fila=mysqli_fetch_assoc($res)){
?>
<tr>
	<td><input type="checkbox" class="tilde" value="<?php echo $fila["cl_id"] ?>">
	<td><?php echo $fila["cl_nombre"]?></td>
	<td><?php echo $fila["cl_apellido"]?></td>
	<td><?php echo $fila["cl_email"]?></td>
	<td><?php echo $fila["cl_tel"]?></td>
	<?php

	if($fila["cl_codigo"]!=0){

	?>

	<td><?php echo $fila["cl_codigo"]?></td>

	<?php 
	
	}else{
	
	?>

	<td></td>

	<?php
	} 
	?>

	<?php
		if($fila["cl_confirmar"]==1){
	?>
	
	<td>
		<button type="button" class="btn btn-md btn-success">Email Confirmado</button>
	</td>
	<?php

	}else{

	?>
	<td>
		<button type="button" class="btn btn-md btn-danger">Email No Confirmado</button>
	</td>
	<?php

	}
	
	?>

</tr>
	<?php
	}

}
public function EditarClientes($sql){
$con = new ConnectionMySQL();
$con->CreateConnection();
$con->SeleccionarAdmin($sql);
$con->CloseConnection();
}
public function SeleccionarUsuario($sql){
$con = new ConnectionMySQL();
$con->CreateConnection();
$res = $con->AltaSql($sql);
$fila=mysqli_fetch_assoc($res);
return $fila["cl_nombre"];
}
public function EmailDemo($Email){
$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= 'From:FacturaUp<facturaup@gmail.com>'."\r\n";
$cuerpo ="
<div style='background-color:#f1f1f1;width:100%;height:682px;margin:0 auto;padding-top:10px;'>
	<div style='width:95%;height:50px;margin:0 auto;
		background-color:#000;color:#fff;text-align:center;font-size:13px;line-height:50px;'>
		<h1 style='color:#fff;text-align:center;font-size:15px;line-height:50px;'>FacturaUp</h1>
	</div>
	<div style='width:95%;height:400px;margin:0 auto;
		background-color:#fff;border:#999 solid 1px;'>
		<div style='width:85%;height:400px;margin:10px auto;
			background-color:#fff;'>
			Estimado/a cliente<br><br>
			Haga click en el siguiente link o peguelo en la barra de direcciones de su navegador para concretar la descarga de su demo
			<a href='localhost/factura/descarga-demo.php?id=$Email'>Descargar ahora!</a><br><br>Saluda Atte.
		Equipo de FacturaUp</div></div>
	</div>";
	
	mail($Email,"Descargue su demo ahora!", $cuerpo ,$headers);
	}
	
	public function VerificoEmail($sql){
		$con = new ConnectionMySQL();
		$con->CreateConnection();
		$res = $con->SeleccionarAdmin($sql);
		$con->buscar($sql);
	}
	public function CantRegistros($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
			$numero_filas = $resultado->num_rows;
			return $numero_filas;

		}
	
	}
	
?>