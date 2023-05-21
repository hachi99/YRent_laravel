<!DOCTYPE html>
    <html lang="en">
      <head>
        <title>YRent - Precios Y Flota</title>
        <link rel="icon" href="images/favicon.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    
        <link rel="stylesheet" href="css\open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css\animate.css">
    
        <link rel="stylesheet" href="css\owl.carousel.min.css">
        <link rel="stylesheet" href="css\owl.theme.default.min.css">
        <link rel="stylesheet" href="css\magnific-popup.css">
    
        <link rel="stylesheet" href="css\aos.css">
    
        <link rel="stylesheet" href="css\ionicons.min.css">
    
        <link rel="stylesheet" href="css\bootstrap-datepicker.css">
        <link rel="stylesheet" href="css\jquery.timepicker.css">
    
        <link rel="stylesheet" href="css\flaticon.css">
        <link rel="stylesheet" href="css\icomoon.css">
        <link rel="stylesheet" href="css\style.css">
      </head>
      <body>
        
          <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand" href="index">Y<span>Rent</span></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>
    <!------ inicio del contenido---->
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index" class="nav-link">Inicio</a></li>
                    <li class="nav-item active"><a href="#" class="nav-link">Precios y Flota</a></li>
                    <li class="nav-item"><a href="ubic" class="nav-link">Ubicación</a></li>
                    <li class="nav-item"><a href="rserv" class="nav-link">Ver reservación</a></li>
                </ul>
              </div>
            </div>
          </nav>
        <!-- END nav -->
        
        <section class="header shadow" style="background-image: url('images/177.png');" data-stellar-background-ratio="0">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
              <div class="col-md-9 ftco-animate pb-5">
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Precios Y Flota <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Reservar</h1>
              </div>
            </div>
          </div>
        </section>
    
        <section class="ftco-section ftco-cart">
         <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						<form class="request-form bg-primary" method="POST" action="/booking"  role="form">
                             @csrf
		          		<h2>Agendar y reservar un vehiculo</h2>
			    				<div class="form-group">
			    					<label for="" class="label">ID Sucursal de recolección:</label>
                                    <label for="exampleFormControlSelect1"></label>
                                    <select class="form-control" name="offic_id"  required>
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                    </select>			
			    				</div>
			
			    		<div class="d-flex">
			    			<div class="form-group mr-2">
			                <label for="" class="label">Fecha de recolección</label>
			                <input type="date" class="form-control"  id="Startdate" name="collectiondate" required>
			              </div>
			              <div class="form-group ml-2">
			                <label for="" class="label">Fecha de devolución</label>
			                <input type="date" class="form-control"  name="returndate" id="startdate" required >
			              </div>
		              </div>
		              <div class="form-group">
		                <label for="" class="label">Tu ID de Cliente</label>
		                <input type="text" class="form-control" id="text" placeholder="ID Cliente" name="custom_id" required>
                        <div class="d-flex">
			    			<div class="form-group mr-2">
			                <label for="" class="label">Vehiculo seleccionado:</label>
			                <input type="text" class="form-control" id="texto" placeholder="ID del vehiculo" name="flot_id" required>
			              </div>
			              <div class="form-group ml-2">
			                <label for="" class="label">Seguro seleccionado</label>
			                <input type="text" class="form-control" id="texto" placeholder="ID del seguro" name="insurcar_id" required>
			              </div>
                          <div class="form-group ml-2">
			                <label for="" class="label">Promocion aplicada:</label>
			                <input type="text" class="form-control" id="texto" placeholder="Codigo de promocion" name="promotion_id"required>
			              </div>
		              </div>
                        
		              </div>
			            <div class="form-group">
			              <input type="submit" value="Reservar auto" class="btn btn-secondary py-3 px-4">
			            </div>
			    			</form>
	  					</div>      
                          <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">IDs de Sucursales, Vehiculos y Clientes</h3>
                                <div class="row d-flex mb-4">
                            <div class="col-md-4 d-flex align-self-stretch">
                              <div class="services w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                                <div class="text w-100">
                                  <h3 class="heading mb-2">ID de Sucursales</h3>
                                  <h4 class=""> 1- Jalisco <br> 2- Guanajuato <br> 3-CDMX <br> 4-Tijuana </h4>
                    
                              </div>
                              </div>      
                            </div>
                            <div class="col-md-4 d-flex align-self-stretch">
                              <div class="services w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                                <div class="text w-100">
                                  <h3 class="heading mb-2">ID de Clientes</h3>
                                  <h4 class=""> 2 <br> 3 <br> 4 <br>5<br>6 </h4>
                                  
                                </div>
                              </div>      
                            </div>
                            <div class="col-md-4 d-flex align-self-stretch">
                              <div class="services w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                                <div class="text w-100">
                                  <h3 class="heading mb-2">ID de Vehiculos</h3>
                                  <h4 class=""> 12- Coupe <br> 13- Convertible <br> 14-SUV <br> 15-Hatchback compacto <br> 16- Sedan Compacto <br> 17- Van </h4>
                                </div>
                              </div>      
                            </div>
                          </div> 
            </section>
            </div>
            <div class="card-fluid text-center">
                <h2>ID de Seguros y Promociones</h2>
                <h4>Introduce estos codigos en el formulario</h4>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID (Codigo)</th>
                        <th scope="col">Seguro</th>
                        <th scope="col">Promocion</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Cobertura Total: Cubre daños a terceros y pasajeros</td>
                        <td>30% de descuento primera reserva</td>
                      
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Obligatorio: Daños a terceros</td>
                        <td>25% de descuento pagando con paypal</td>
                        
                      </tr>
                    </tbody>
                  </table>
            </div>

      </body>


    
        <!------ footer fin del contenido---->
    
        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container">
              <div class="row mb-5">
                <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><a href="#" class="logo">Y<span>Rent</span></a></h2>
                    <p>La mejor opcion para cualquier ocasión, renta de vehiculos de diferentes tipos</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md">
                  <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Información</h2>
                    <ul class="list-unstyled">
                      <li><a href="#" class="py-2 d-block">Acerca de nosotros</a></li>
                      <li><a href="#" class="py-2 d-block">Servicios</a></li>
                      <li><a href="#" class="py-2 d-block">Terminos y Condiciones</a></li>
                      <li><a href="#" class="py-2 d-block">Garantia del 100% de satisfacción</a></li>
                      <li><a href="#" class="py-2 d-block">Privacidad &amp; Politica de cookies</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md">
                   <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Ayuda al cliente</h2>
                    <ul class="list-unstyled">
                      <li><a href="#" class="py-2 d-block">Preguntas frecuentes</a></li>
                      <li><a href="#" class="py-2 d-block">Medios de pago</a></li>
                      <li><a href="#" class="py-2 d-block">Tips para agendar</a></li>
                      <li><a href="#" class="py-2 d-block">Como funciona?</a></li>
                      <li><a href="#" class="py-2 d-block">Contactenos</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                      <h2 class="ftco-heading-2">¿Dudas o Sugerencias?</h2>
                      <div class="block-23 mb-3">
                        <ul>
                          <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                          <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                          <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
    
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
            </div>
          </div>
        </footer>
        
      
    
      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    
      <script src="js\jquery.min.js"></script>
      <script src="js\jquery-migrate-3.0.1.min.js"></script>
      <script src="js\popper.min.js"></script>
      <script src="js\bootstrap.min.js"></script>
      <script src="js\jquery.easing.1.3.js"></script>
      <script src="js\jquery.waypoints.min.js"></script>
      <script src="js\jquery.stellar.min.js"></script>
      <script src="js\owl.carousel.min.js"></script>
      <script src="js\jquery.magnific-popup.min.js"></script>
      <script src="js\aos.js"></script>
      <script src="js\jquery.animateNumber.min.js"></script>
      <script src="js\bootstrap-datepicker.js"></script>
      <script src="js\jquery.timepicker.min.js"></script>
      <script src="js\scrollax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="js\google-map.js"></script>
      <script src="js\main.js"></script>
      {{--<script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/jquery.timepicker.min.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="js/google-map.js"></script>
      <script src="js/main.js"></script>--}}
        
      </body>
    </html>

    <!--