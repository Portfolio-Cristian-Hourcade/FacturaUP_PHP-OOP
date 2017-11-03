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
		public function Notificaciones($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$resultado= $con->AltaSql($sql);
			$numero_filas = $resultado->num_rows;
			echo $numero_filas;

		}
		
		public function envioRespConsulta($email,$message,$header){

			echo mail($email,"Esta es su respuesta!", $cuerpo ,$headers);
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
						<?php

				if($fila["con_horarespuesta"]!=0){
						?>
						<td><?php echo $fila["con_horarespuesta"]?></td>
						<?php }else{ ?><td></td><?php } ?>
						<td><?php echo $fila["con_respuesta"]?></td>
						<td><?php echo $fila["con_horaenvio"]?></td>
						<?php
						if($fila["con_fecharespuesta"]!=0){
						?>
						<td><?php echo $fila["con_fecharespuesta"]?></td>
						<?php }else{ ?><td></td><?php } ?>
						<td><button type="button" class='res-consulta' value='<?php echo $fila["con_id"];?>'>Responder Mensaje</button></td>
					</tr>
				<?php }else{
?>
<tr>
						
						<td><?php echo $fila["con_contacto"]?></td>
						<td><?php echo $fila["con_email"]?></td>
						<td><?php echo $fila["con_mensaje"]?></td>									
						<td><?php echo $fila["con_fechaenvio"]?></td>
						<td><?php echo $fila["con_fecharespuesta"]?></td>
						<td><?php echo $fila["con_respuesta"]?></td>
						
						<td><?php echo $fila["con_horaenvio"]?></td>	
						<td><?php echo $fila["con_horarespuesta"]?></td>
						<td>respondido</td>
					</tr>

			
				<?php
				}
		}
		
	}
	
}