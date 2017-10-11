<?php 

 session_start();

?>
<!DOCTYPE html>

<html>
   <head>
      <input type="hidden" id="usuario" value="<?php echo @$_SESSION["cl_email"]?>">
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
      <div id="miCarrusel" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#miCarrusel" data-slide-to="0" class="active"></li>
            <li data-target="#miCarrusel" data-slide-to="1"></li>
            <li data-target="#miCarrusel" data-slide-to="2"></li>
            <li data-target="#miCarrusel" data-slide-to="3"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100 img-fluid" src="images/restman.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100 img-fluid" src="images/bill.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100 img-fluid" src="images/calculos.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100 img-fluid" src="images/invoice.jpg" alt="Fourth slide">
            </div>
         </div>
         <div id="overlapCuad" class="d-flex">
            <section id="cartel-flotante" class="ml-auto align-self-center mr-5 col-md-4">
               <h2 class="h2-poster mb-3 text-uppercase font-weight-bold">Emití Facturas Electrónicas <br>de manera simple.</h2>
               <h3 class="mb-3 ">Empezá a usarlo de forma gratuita.</h3>
               
               <button class="btn btn-primary d-block mx-auto demo-button" type="button">PROBALO AHORA</button>
            </section>
            </div><!-- velo de color -->
            <a class="carousel-control-prev" href="#miCarrusel" role="button" data-slide="prev" onclick="$('#miCarrusel').carousel('prev')">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#miCarrusel" role="button" data-slide="next" onclick="$('#miCarrusel').carousel('next')">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
         <a id="services"></a>
         <div class="container mt-5 servicios">
            <div class="row">
               <article class="mb-3">
                  <h2 class="text-center display-4 my-3">Facturá tus alquileres</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
               </article>
            </div>
         </div>
         <!-- secciones  -->
         <!-- section wrapper -->
         <section class="container-fluid soluciones">
            <div class="row text-white">
               <h2 class="col-md-12 text-center display-4 my-3">Soluciones</h2>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-tag fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-shower fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-file-o fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-ravelry fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-shower fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-shower fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-shower fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-shower fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-shower fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-shower fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-shower fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
               <article class="col-4 col-sm-3 col-md-2">
                  <div class="d-flex mx-auto art-cuad"><i class="fa fa-shower fa-4x mx-auto align-self-center" aria-hidden="true"></i></div>
                  <h2 class="text-center h2-artIcon">Ventas</h2>
               </article>
            </div>
         </section>
         <!-- seccion como funciona -->
         <div class="container-fluid"> <!-- contenedor de secciones -->
         <div class="row comofunciona">
            <section class="col-md-12 section-blanco pt-4">
               <div class="container">
                  <h2 class="text-grey text-center display-4 my-4">Lorem Ipsum</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               </div>
            </section>
            <section class="col-md-12 section-cold text-white pricing-panel d-flex">
               <div class="container my-auto">
                  <div id="tabla-2">
                     <div class="col-md-9 tabla-wrapper container-fluid mx-auto">
                        <div class="row no-gutters">
                           <h2 class="text-center display-4 col-md-12 my-4">Elija su plan</h2>
                           <div class="col-md-4 my-auto price-col">
                              <div class="stack-top"></div>
                              <div class="stack-end">
                                 <p class="d-block text-center">
                                    <span>$</span>
                                    <span>4.00 <sup>00</sup></span>
                                 </p>
                                 <div class="text-center"><a href="#" class="btn btn-primary demo-button">Comprar</a></div>
                              </div>
                           </div>
                           <div class="col-md-4 destacado bg-light">
                              <span class="d-block lead text-center">RECOMENDADO</span>
                              <div class="stack-top bg-success"></div>
                              <div class="stack-end">
                                 <p class="d-block text-center">
                                    <span>$</span>
                                    <span>4.00 <sup>00</sup></span>
                                 </p>
                                                                  <div class="text-center"><a href="#" class="btn btn-primary demo-button">Comprar</a></div>

                              </div>
                           </div>
                           <div class="col-md-4 my-auto price-col">
                              <div class="stack-top"></div>
                              <div class="stack-end">
                                 <p class="d-block text-center">
                                    <span>$</span>
                                    <span>4.00 <sup>00</sup></span>
                                 </p>
                                                                 <div class="text-center"><a href="#" class="btn btn-primary demo-button">Comprar</a></div>

                           </div>
                        </div>
                        </div> <!-- end row -->
                     </div>
                  </div>
               </section>
            </div>
            <section id="sec-planes" class="col-md-12 section-blanco pt-4">
               <div class="container">
                  <h2 class="text-center display-4 my-4">Lorem Ipsum</h2>
                  <div class="row">
                     <article class="col-md-4 px-2">
                        <div>
                           <img class="img-fluid" src="images/plan-inicial.jpg">
                           <div class="p-3">
                              <hr id="hr-1">
                              <h4 class="text-center mb-3">Lorem ipsum</h4>
                              <ul class="list-unstyled">
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                              </ul>
                           </div>
                        </div>
                     </article>
                     <article class="col-md-4 px-2">
                        <div>
                           <img class="img-fluid" src="images/plan-avanzado.jpg">
                           <div class="p-3">
                              <hr id="hr-2">
                              <h4 class="text-center mb-3">Lorem ipsum</h4>
                              <ul class="list-unstyled">
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                              </ul>
                           </div>
                        </div>
                     </article>
                     <article class="col-md-4 px-2">
                        <div>
                           <img class="img-fluid" src="images/plan-premium.jpg">
                           <div class="p-3 bg-light">
                              <hr id="hr-3">
                              <h4 class="text-center mb-3">Lorem ipsum</h4>
                              <ul class="list-unstyled">
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                                 <li>Lorem ipsum</li>
                              </ul>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
            </section>
            
            <section class="container-fluid tiled text-white">
               <h2 class="text-center display-4 my-4">Lorem Ipsum</h2>
               <div class="row">
                  <article class="col-md-3">
                     <div class=""><img src="images/old_woman.jpg" class="img-fluid"></div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat.</p>
                  </article>
                  <article class="col-md-6 central">
                     <div class=""><img src="images/old_woman_ldscp.jpg" class="img-fluid"></div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </article>
                  <article class="col-md-3">
                     <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat.</p>
                     
                     <div class="push-12"><img src="images/old_woman.jpg" class="img-fluid"></div>
                     
                  </article>
               </div>
            </section>
            <!-- secccion articulos con iconitos -->
            <section class="section-blanco media-icons">
            <div class="row">
               <div class="media col-md-4">
                  <img class="d-flex align-self-start mr-3" src="images/icons/hand.png" alt="Generic placeholder image">
                  <div class="media-body">
                     <h5 class="mt-0"><b>Top-aligned media</b></h5>
                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                     
                  </div>
               </div>
               <div class="media col-md-4">
                  <img class="d-flex align-self-start mr-3" src="images/icons/text.png" alt="Generic placeholder image">
                  <div class="media-body">
                     <h5 class="mt-0"><b>Top-aligned media</b></h5>
                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                     
                  </div>
               </div>
               <div class="media col-md-4">
                  <img class="d-flex align-self-start mr-3" src="images/icons/monitor.png" alt="Generic placeholder image">
                  <div class="media-body">
                     <h5 class="mt-0"><b>Top-aligned media</b></h5>
                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                   
                  </div>
               </div>
               <div class="media col-md-4">
                  <img class="d-flex align-self-start mr-3" src="images/icons/landscape.png" alt="Generic placeholder image">
                  <div class="media-body">
                     <h5 class="mt-0"><b>Top-aligned media</b></h5>
                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                   
                  </div>
               </div>
               <div class="media col-md-4">
                  <img class="d-flex align-self-start mr-3" src="images/icons/star.png" alt="Generic placeholder image">
                  <div class="media-body">
                     <h5 class="mt-0"><b>Top-aligned media</b></h5>
                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                     
                  </div>
               </div>
               <div class="media col-md-4">
                  <img class="d-flex align-self-start mr-3" src="images/icons/screen.png" alt="Generic placeholder image">
                  <div class="media-body">
                     <h5 class="mt-0"><b>Top-aligned media</b></h5>
                     <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                     
                  </div>
               </div>
               </div>
            </section>
            </div> <!-- end sections wrapper -->
            </div> <!-- end body wrapper -->
            <!-- barra de telefono anclada al final -->
            <div class="tel-bottom text-white d-flex d-xs-none">
               <div class="d-flex mx-auto"><i class="my-auto fa fa-phone fa-2x" aria-hidden="true"></i><h3 class="my-auto ml-3">4563-4589</h3></div>
            </div>
            <!-- footer -->
            <footer class="col-md-12 container">
               <div class="row pt-4">
                  <div class="col-md-4 text-white">
                     <ul class="text-center">
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                     </ul>
                  </div>
                  <div class="col-md-4 text-white">
                     <ul class="text-center">
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                     </ul>
                  </div>
                  <div class="col-md-4 text-white">
                     <ul class="text-center">
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                        <li>lorem ipsum</li>
                     </ul>
                  </div>
               </div>
            </footer>
         </div>
         <div id="modal-adm" class="modal fade" role="dialog"></div>
         <div id="modal-log" class="modal fade" role="dialog"></div>
      </body>
   </html>