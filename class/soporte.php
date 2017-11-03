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
		public function EmailSoporte($email,$mensaje){

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

			$mensaje
			
			<br><br>
			Saluda Atte.
			Equipo de FacturaUp</div></div>
			</div>";
 
			mail($email,"Respuesta a su consulta.", $cuerpo ,$headers);
		}
		
	}
	
?>