<div class="modal-dialog">
	
	<div class="loginmodal-container">
		<h1>Regístrese</h1><br>
		<input type="text" id="email" placeholder="E-mail *" onblur="verificoemail()">
		<div id="tilde-verde"></div>
		<input type="text" id="nombre" placeholder="Nombre *" required>
		<input type="text" id="apellido" placeholder="Apellido *">
		<input type="text" id="telefono" placeholder="Teléfono">
		<input type="password" id="contrasena" placeholder="Contraseña *">
		<input type="password" id="contrasena2" placeholder="Repita la contraseña">
				<div class="login-help mb-2">
			Los campos con * son obligatorios
		</div>
		<input type="button" name="login" class="login loginmodal-submit clientes-nuevo" value="Regristrarse" >
		<button type="button" class="btn btn-sm btn-outline-info d-block ml-auto mt-3" data-dismiss="modal">Cancelar</button>
	</div>
</div>