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
echo $Email."<br><br>";
			$to = "'".$Email."'";
			$subject = "¡Descarge ahora su demo!";
			$message = "Hola, muchas gracias por haber contratado nuestro servicio, espero que le sea de mucha ayuda, no dude en contactarse con contacto al cliente si es necesario. El equipo de FacturaUp. <br><br> www.google.com";
			$headers = "From: facturaup@gmail.com" . "\r\n" . "CC:'".$Email."'";
 
			mail($to, $subject, $message, $headers);

		}
	}
	
?>