<?php
session_start();
if(empty($_GET["id"])){
   header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
   <head>
      <input type="hidden" id="email" value="<?php echo $_GET["id"]?>">
      <title>Factura Up</title>
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
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
      <script type="text/javascript" src="jslogin/functions.js"></script>
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
                  <button class="btn btn-primary btn-nuevo-clientes ml-3" type="button">Registrarse</button>
                  <button class="btn btn-primary btn-log-clientes ml-3" type="button">Ingresar</button>
                  <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-user fa-fw"></i><?php echo @$_SESSION["cl_email"]?></a></li>
                  <li class="nav-item"><a class="nav-link btn-salir" href="#">Salir</a></li>
               </ul>
            </div>
         </nav>
      </div>
     <div class="container mt-5 descarga">
            <div class="row">
               <article class="mb-3">
                  <h2 class="text-center display-4 my-5">Descarga tu demo ahora!</h2>
                  <p class="lead">Haz click en el siguiente boton para poder descargar tu version demo de FacturaUp. Recuerde que con cualquier inconveniente a la hora de la descarga puede contactar con el equipo de FacturaUp.
                  </p>
                  <br>
                  <center>
                     <button class="btn btn-lg btn-primary btn-descargar-demo">Descargar demo</button>
                  </center>
               </article>
            </div>
         </div>
      </div>
   </body>
   </html>