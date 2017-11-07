<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="background-color: grey;">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h2 class="modal-title" style="color:white;">Contestar Mensaje</h2>
		</div>
		<div class="modal-body">
			<?php
		
			include '../../class/soporte.php';
			include '../../class/conmysql.php';

			$id = $_POST["id"];

			$con = new ConnectionMySQL();
			
				$sql="SELECT * FROM soporte WHERE so_id='".$_POST["id"]."'";
				
			$con->CreateConnection();
			$result=$con->SeleccionarAdmin($sql);
			$fila=mysqli_fetch_assoc($result);

			?>
			<input type="hidden" value="<?php echo $fila["so_email"]?>" id="email-soporte">
			<input type="hidden" value="<?php echo $fila["so_id"]?>" id="id">
			<div class="col-md-4"><label>Mensaje</label></div>
			<div class="col-md-8">
				<p><?php echo $fila["so_mensaje"]?></p>
			</div>
			<br><br>
			<div class="col-md-4"><label>Respuesta</label></div>
			<div class="col-md-8"><textarea style="width:100%;height: 100px;" id="mensaje"></textarea></div>
			<br><br><br>
			<br><br><br>
			<br><br><br>
		</div>
			<div class="modal-footer">
				<center>
				<button class="btn btn-lg btn-info btn-contestar btn-up-soporte">Contestar!</button>
				</center>
			</div>
		</div>
		
	</div>
	



