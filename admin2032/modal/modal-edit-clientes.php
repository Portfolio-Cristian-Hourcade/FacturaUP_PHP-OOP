<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header" style="background-color: grey;">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h2 class="modal-title" style="color:white;">Editar Cliente</h2>
		</div>
		<div class="modal-body">
			<?php
		
			include '../../class/clientes.php';
			include '../../class/conmysql.php';

			$id = $_POST["id"];

			$con = new ConnectionMySQL();
			
				$sql="SELECT * FROM clientes WHERE cl_id='".$_POST["id"]."'";
				
			$con->CreateConnection();
			$result=$con->SeleccionarAdmin($sql);
			$fila=mysqli_fetch_assoc($result);

			?>
			
			<input type="hidden" value="<?php echo $fila["cl_id"]?>" id="id">
			<div class="col-md-6"><label>Nombre</label></div>
			<div class="col-md-6"><input type="text" value="<?php echo $fila["cl_nombre"]?>" id="nombre"></div>
			<br><br>
			<div class="col-md-6"><label>Apellido</label></div>
			<div class="col-md-6"><input type="text" value="<?php echo $fila["cl_apellido"]?>" id="apellido"></div>
			<br><br>
			<div class="col-md-6"><label>Email</label></div>
			<div class="col-md-6"><input type="text" value="<?php echo $fila["cl_email"]?>" id="email"></div>
			<br><br>
			<div class="col-md-6"><label>Telefono</label></div>
			<div class="col-md-6"><input type="text" value="<?php echo $fila["cl_tel"]?>" id="telefono"></div>
			<br><br>
			<div class="col-md-6"><label>Contraseña</label></div>
			<div class="col-md-6"><input type="password" value="" id="contrasena"></div>
			<br><br>
			<div class="modal-footer">
				<center>
				<button class="btn btn-lg btn-info btn-up-clientes">Editar</button>
				</center>
			</div>
		</div>
		
	</div>
	
</div>


