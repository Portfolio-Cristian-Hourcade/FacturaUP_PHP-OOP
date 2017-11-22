<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Factura Up - Facturacion electronica</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
		
		<link rel="stylesheet" type="text/css" href="css/customdos.css">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
		<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/funciones.js"></script>
		<script type="text/javascript" src="jslogin/functions.js"></script>

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
		
		<div class="row">
			<div class="col-12 instruc">
				<center>
					<h1 class="display-4">Instructivo para Factura Up</h1>
					<hr style="border:1px solid #ececec">
				</center>
			</div>
		</div>
		<div class="row pt-4">
			<div class="col-4 offset-1">
				<img src="images/pyme.png" style="width: 100%">
			</div>	
			<div class="col-6 my-auto">
				<p class="h4">Gracias por haber descargado nuestra version XXXX de Factura Up.</p>
				<p class="h4">Ahora le daremos una breve y facil explicación de que pasos debe seguir para comenzar a usar FacturaUp.</p>
				<br>
				<center>
					<h2><strong>¡Empezá a emitir facturas electronicas!</strong></h2>
				</center>
			</div>
		</div>
		<div class="mt-5 row bg-faded ">
			<div class="offset-1 col-10 mt-3">
				<center>
					<h2 class="mb-5"><b>¡Sigue estos pasos para empezar a usar Factura UP!</b></h2>
				</center>
				<p class="h4"><b>Paso 1:</b> Nullam nec lectus vel velit accumsan consectetur. In hac habitasse platea dictumst. Vestibulum dignissim quis sem a pretium. Sed porttitor faucibus molestie.</p>
				<br>
				<p class="h4"><b>Paso 2:</b>  Integer malesuada facilisis nisl, ac dignissim est vulputate ut. Integer ac diam ut sem sollicitudin interdum.</p>
				<br>
				<p class="h4"><b>Paso 3:</b> Aliquam ut gravida velit. Nulla condimentum pretium ligula, a eleifend mi consequat ac. Pellentesque convallis quam at nisi luctus sollicitudin</p>
				<br>
				<p class="h4"><b>Paso 4:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus diam quam, tincidunt quis nibh at, finibus blandit felis. </p>
				<center>
					<h3 class="my-5"><b>¡Disfrutá de Factura Up!</b></h3>
				</center>
			</div>
		</div>
		<footer class="col-md-12 container">
                     <div class="col-md-11 mx-auto">
                        <div class="row pt-4">
                           <div class="col-md-4 text-white mb-2">
                              <h3 class="text-center">Contáctenos</h3>
                              <ul class="text-center">
                                 <li>lorem ipsum</li>
                                 <li>lorem ipsum</li>
                                 <li>lorem ipsum</li>
                                 <li>lorem ipsum</li>
                                 <li>lorem ipsum</li>
                              </ul>
                           </div>
                           <div class="col-md-4 text-white secc-iconMedia mb-2">
                              <h3 class="text-center mb-4">Síganos</h3>
                              <div class="row">
                                 <div class="d-flex mx-auto">
                                 <i class="fa fa-facebook mx-auto align-self-center" aria-hidden="true"></i></div>
                                 <div class="d-flex mx-auto">
                                 <i class="fa fa-twitter mx-auto align-self-center" aria-hidden="true"></i></div>
                                 <div class="d-flex mx-auto">
                                 <i class="fa fa-instagram mx-auto align-self-center" aria-hidden="true"></i></div>
                                 <div class="d-flex mx-auto">
                                 <i class="fa fa-linkedin mx-auto align-self-center" aria-hidden="true"></i></div>
                              </div>
                           </div>
                           <div class="col-md-4 text-white mb-2">
                              <h3 class="text-center mb-4">Recuerde</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                 consequat.</p>
                           </ul>
                        </div>
                     </div>
                  </div>
               </footer>





	</div>

<div id="modal-advertencia" class="modal fade" role="dialog"></div>
</body>
</html>