<div class="modal-dialog">
	
	<div class="loginmodal-container">
		<h1>Regístrese</h1><br>
		<input class="col-md-11" type="text" id="email" placeholder="E-mail *" onblur="verificoemail()">
		<span id="tilde-verde"></span>
		<input class="col-md-11" type="text" id="nombre" placeholder="Nombre *" required>
		<input class="col-md-11" type="text" id="apellido" placeholder="Apellido *">
		<input class="col-md-11" type="text" id="telefono" placeholder="Teléfono">
		<input class="col-md-11" type="password" id="cont" placeholder="Contraseña *">
		<input class="col-md-11" type="password" id="cont2" placeholder="Repita la contraseña">
				<div class="login-help mb-2">
			Los campos con * son obligatorios
		</div>
		<input type="submit" name="login" class="login loginmodal-submit clientes-nuevo" value="Regristrarse" >
		<button type="button" class="btn btn-sm btn-outline-info d-block ml-auto mt-3" data-dismiss="modal">Cancelar</button>
	</div>
</div>