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
						<td><?php echo $fila["so_respuesta"]?></td>
						<td>
							<?php
							if(empty($fila["so_respuesta"])){
							?>
							<button type="button" class='res-mensaje' value='<?php echo $fila["so_id"];?>'>Enviar Mensaje</button>
							<?php
							}else{
							?>	
							<p>Mensaje contestado</p>
							<?php
							}
							?>
						</td>
					</tr>
				<?php
				}
		}
		public function Notificaciones($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
			$numero_filas = $resultado->num_rows;
			echo $numero_filas;

		}
		public function ResponderMensaje($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->AltaSql($sql);
			$con->CloseConnection();
		}
		
	}
	
?>