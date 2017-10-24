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
			
			<input type="hidden" value="<?php echo $fila["cl_id"]?>" id="id">
			<div class="col-md-6"><label>Mensaje</label></div>
			<div class="col-md-6"><textarea value="<?php echo $fila["so_mensaje"]?>"></textarea>
			<div class="col-md-6"><label>Respuesta</label></div>
			<div class="col-md-6"><textarea value=""></textarea>	
			<div class="modal-footer">
				<center>
				<button class="btn btn-lg btn-info btn-up-clientes">Editar</button>
				</center>
			</div>
		</div>
		
	</div>
	
</div>


