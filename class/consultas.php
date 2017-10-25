<?php
class Consultas{

	 	public function Alta($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->AltaSql($sql);
			$con->CloseConnection();
		}

		public function EditarConsultas($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->SeleccionarAdmin($sql);
			$con->CloseConnection();
		}
		
public function ListarConsultas($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$res = $con->SeleccionarAdmin($sql);
			while($fila=mysqli_fetch_assoc($res)){
				if($fila["con_respuesta"]==""){
				?>
					<tr>
						
						<td><?php echo $fila["con_contacto"]?></td>
						<td><?php echo $fila["con_email"]?></td>
						<td><?php echo $fila["con_mensaje"]?></td>									
						<td><?php echo $fila["con_fechaenvio"]?></td>	
						<td><?php echo $fila["con_horarespuesta"]?></td>
						<td><?php echo $fila["con_respuesta"]?></td>
						<td><?php echo $fila["con_horaenvio"]?></td>
						<td><?php echo $fila["con_fecharespuesta"]?></td>
						<td><button type="button" class='res-consulta' value='<?php echo $fila["con_id"];?>'>Enviar Mensaje</button></td>
					</tr>
				<?php }else{
?>
<tr>
						
						<td><?php echo $fila["con_contacto"]?></td>
						<td><?php echo $fila["con_email"]?></td>
						<td><?php echo $fila["con_mensaje"]?></td>									
						<td><?php echo $fila["con_fechaenvio"]?></td>	
						<td><?php echo $fila["con_horarespuesta"]?></td>
						<td><?php echo $fila["con_respuesta"]?></td>
						<td><?php echo $fila["con_horaenvio"]?></td>
						<td><?php echo $fila["con_fecharespuesta"]?></td>
						<td>respondido</td>
					</tr>

			
				<?php
				}
		}
		
	}
	
}