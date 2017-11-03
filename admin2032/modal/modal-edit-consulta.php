<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="background-color: grey;">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h2 class="modal-title" style="color:white;">Contestar Mensaje</h2>
		</div>
		<div class="modal-body">
			<?php
		
			include '../../class/conmysql.php';
			include '../../class/consultas.php';

			$id = $_POST["id"];

			$con = new ConnectionMySQL();
			
				$sql="SELECT * FROM consultas WHERE con_id='".$_POST["id"]."'";
				
			$con->CreateConnection();
			$result=$con->SeleccionarAdmin($sql);
			$fila=mysqli_fetch_assoc($result);

			?>
			
			<input type="hidden" value="<?php echo $fila["con_id"]?>" id="id">
			<div class="col-md-4"><label>Mensaje</label></div>
			<div class="col-md-8"><textarea style="width:100%;height: 100px;" placeholder=""><?php echo $fila["con_mensaje"]?></textarea></div>
			<br><br>
			<div class="col-md-4"><label>Respuesta</label></div>
			<div class="col-md-8"><textarea name="mensaje" id="mensaje" style="width:100%;height: 100px;"></textarea></div>
			<br><br><br>
			<br><br><br>
			<br><br><br>
		</div>
			<div class="modal-footer">
				<center>
				<button class="btn btn-lg btn-info btn-contestar-consulta">Contestar</button>
				</center>
			</div>
		</div>
		
	</div>
	



