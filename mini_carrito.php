<?php
session_start();

if(empty($_SESSION["cl_email"])){
	header("location:index.php");
}
	include 'mp/pagamento2.php';
?>

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
		<script type="text/javascript" src="jslogin/functions.js"></script>
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
						<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="#services" data-ancla="services">Características</a></li>
						<li class="nav-item"><a class="nav-link" href="#">¿Cómo Funciona?</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Planes</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
						<button class="btn btn-primary btn-nuevo-clientes ml-3" type="button">Registrarse</button>
                  <button class="btn btn-primary btn-log-clientes ml-3" type="button">Ingresar</button>
                  <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-user fa-fw"></i><?php echo @$_SESSION["cl_email"]?></a></li>
                  <li class="nav-item"><a class="nav-link btn-salir" href="#">Salir</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="row secc-cart">

			<h2 class="col-md-12 text-center padding-unhiding pb-4">Descargue su versión de <em><b>Factura Up </b></em> </h2>
				<article class="col-md-6">
					<img src="images/demo_img.png" class="img-fuid d-block mx-auto">
					<a href="#"  class="btn btn-md btn-info d-block mx-auto my-4 descarga-demo demo-btn">Descargar</a>
					<h3>Versión demo</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article>
			
				<article class="col-md-6 ">
					<img src="images/full_img.png" class="img-fuid d-block mx-auto">
				<a href="<?php echo $preference['response']['sandbox_init_point']?>" name="MP-Checkout" class="btn btn-primary d-block mx-auto my-4" mp-mode="modal" onreturn="execute_my_onreturn">Comprar Ahora!</a>					<h3>Versión completa</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article>
		</div>
	</div>
</body>
</html>