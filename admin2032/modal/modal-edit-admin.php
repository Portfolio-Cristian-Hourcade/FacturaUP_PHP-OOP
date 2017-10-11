<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="background-color: grey;">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h2 class="modal-title" style="color:white;">Editar usuario</h2>
		</div>
		<div class="modal-body">
			<?php
		
			include '../../class/admin.php';
			include '../../class/conmysql.php';

			$id = $_POST["id"];

			$con = new ConnectionMySQL();
			
				$sql="SELECT * FROM admin WHERE adm_id='".$_POST["id"]."'";
				
			$con->CreateConnection();
			$result=$con->SeleccionarAdmin($sql);
			$fila=mysqli_fetch_assoc($result);

			?>
			
			<input type="hidden" value="<?php echo $fila["adm_id"]?>" id="id">
			<div class="col-md-6"><label>Usuario</label></div>
			<div class="col-md-6"><input type="text" value="<?php echo $fila["adm_user"]?>" id="usuario"></div>
			<br><br>
			<div class="col-md-6"><label>Contraseña</label></div>
			<div class="col-md-6"><input type="password" value="<?php echo $fila["adm_pass"]?>" id="contra"></div>
			<br><br>
			<div class="modal-footer">
				<center>
				<button class="btn btn-lg btn-info btn-up-adm">Editar</button>
				</center>
			</div>
		</div>
		
	</div>
	
</div>


