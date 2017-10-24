<?php
class Consultas{

	 	public function Alta($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->AltaSql($sql);
			$con->CloseConnection();
		}
		
public function ListarConsultas($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$res = $con->SeleccionarAdmin($sql);
			while($fila=mysqli_fetch_assoc($res)){
				?>
					<tr>
						<td><input type="checkbox" class="tilde" value="<?php echo $fila["con_id"] ?>">
						<td><?php echo $fila["con_contacto"]?></td>
						<td><?php echo $fila["con_email"]?></td>
						<td><?php echo $fila["con_mensaje"]?></td>									
						<td><?php echo $fila["con_fechaenvio"]?></td>	
						<td><?php echo $fila["con_horarespuesta"]?></td>
						<td><?php echo $fila["con_respuesta"]?></td>
						<td><?php echo $fila["con_horaenvio"]?></td>
						<td><?php echo $fila["con_fecharespuesta"]?></td>
					</tr>
				<?php
				}
		}
		
	}
	
?>