<?php
class Ventas{

		public function ListarVentas($sql){
			
			$con = new ConnectionMySQL();
			$con-> CreateConnection();
			$res = $con-> SeleccionarAdmin($sql);
			
			while($fila=mysqli_fetch_assoc($res)){
				?>
					<tr>
						<td><?php echo $fila["v_id"]?></td>
						<td><?php echo $fila["v_cliente"]?></td>
						<td><?php echo $fila["v_fecha"]?></td>
						<td><?php echo $fila["v_precio"]?></td>
						<td><?php echo $fila["v_plan"]?></td>
					</tr>
				<?php
				}
		}
		
	}
	
?>