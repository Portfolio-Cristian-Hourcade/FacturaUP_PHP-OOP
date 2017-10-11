<?php
class Links{
		public function EditarLinks($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$con->SeleccionarAdmin($sql);
			$con->CloseConnection();
		}
		public function ListarLinks($sql){
			$con = new ConnectionMySQL();
			$con->CreateConnection();
			$res = $con->SeleccionarAdmin($sql);
			while($fila=mysqli_fetch_assoc($res)){
				
			$data = $fila["l_id"];
			$boton=($fila["l_status"]!=1)?"<button href='#' class='activar' value='".$data."'>Activar</button>":"<button href='#' class='desactivar' value='".$data."'>Desactivar</button>";
				
			
			?>
					<tr>
						<td><?php echo $fila["l_link"]?></td>
						<td><?php echo $fila["l_ip"]?></td>
						<td><?php echo $fila["l_descargas"]?></td>
						<td><?php echo $fila["l_fecha"]?></td>
						<td><?php echo $boton?></td>
					</tr>
				<?php
				}
		}
		
	}
	
?>