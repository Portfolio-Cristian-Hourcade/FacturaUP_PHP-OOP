<?php
class Soporte{
		public function EditarSoporte($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->SeleccionarAdmin($sql);
			$con->CloseConnection();
		}
		public function ListarSoporte($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$res = $con->SeleccionarAdmin($sql);
			while($fila=mysqli_fetch_assoc($res)){
			?>
					<tr>
						<td><?php echo $fila["so_contacto"]?></td>
						<td><?php echo $fila["so_email"]?></td>
						<td><?php echo $fila["so_mensaje"]?></td>
						<td>
							<button type="button" class='res-mensaje' value='"<?php echo $fila["so_id"];?>"'>Enviar Mensaje</button>
						</td>
					</tr>
				<?php
				}
		}
		
	}
	
?>