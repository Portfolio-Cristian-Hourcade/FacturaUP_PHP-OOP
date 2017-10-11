<!DOCTYPE html>
<html>
	<head>
		<title>Añadir cliente</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
		<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/funciones.js"></script>
	</head>
	<body>
		<div class="container-fluid"> <!-- boby wrapper -->
		<div class="row">
			<nav class="navbar navbar-toggleable-md navbar-light fixed-top main-navbar">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="envolto-logo ml-5">
					<a class="navbar-brand" href="index.html">
						<img src="images/logo2.png" class="mx-auto d-block img-fluid">
					</a>
				</div>
				<div class="collapse navbar-collapse my-auto align-self-start mr-2 justify-content-end" id="navbar-links">
					<ul class="navbar-nav">
						<li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="#services" data-ancla="services">Características</a></li>
						<li class="nav-item"><a class="nav-link" href="#">¿Cómo Funciona?</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Planes</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="col-md-6 mx-auto">
			<form class="form-horizontal">
				<legend>Ingresa tu direccion de correo para comenzar a usar factura Up</legend>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control bg-danger" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<button class="btn btn-primary" type="submit">Enviar</button>
			</form>
		</div>
	</div>
</body>
</html>