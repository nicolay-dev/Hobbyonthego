<!DOCTYPE html>
<html lang="en-US">
<head>

	<meta charset="UTF-8" />
	<meta name="description" content=""/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Hobby on the GO </title>

	<!-- Windows 8 Tiles -->
	<meta name="msapplication-TileColor" content="#FFFFFF"/>
	<!-- ****** faviconit.com favicons ****** -->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
	<link rel="stylesheet" href="css/picto-foundry-emotions.css" />
	<link rel="stylesheet" href="css/picto-foundry-household.css" />
	<link rel="stylesheet" href="css/picto-foundry-shopping-finance.css" />
	<link rel="stylesheet" href="css/picto-foundry-general.css" />
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDe2WKlFxtesnaxaoih0xj-BmkU2_KRaUs&libraries=places">
    </script>
	<script src= "js/maps/main.js"></script>
    <script src= "js/maps/localizacion.js"></script>
</head>
	<body>

<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '820159238139212',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.9' // use graph api version 2.8
  });

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
	function testAPI() {
	    console.log('Welcome!  Fetching your information.... ');
	    FB.api('/me?fields=id,name,email,permissions', function(response) {
		      console.log('Successful login for: '+ response.id +':' + response.name + ':' + response.id.email);
		      var user = new usuario(response.id,response.name);
		      var listUsers = []; 
			  listUsers.push(user);	  
		      var listUsersJSON = JSON.stringify(listUsers);

	      	  $.post('fuente/Persistence/servidor.php', {usuarios: listUsersJSON},function(respuesta){
	      	  	alert(respuesta);
	      	  });


	    },{scope: 'email'});
	}
	function usuario(id, nombre){
	    this.id = id;
	    this.nombre = nombre;
	}

	function guadarEvento(){
		alert("inicio funcion");
		alert("alerta2");
		
		
				var lo2 = getLocatio2();
		alert("pedilocation");
		  var eventoN = new evento(document.getElementById('namedb').value,document.getElementById('integrantes').value,document.getElementById('date1').value,document.getElementById('genero').value, document.getElementById('desc').value,lo2[0],lo2[1]);
		 alert("cree eventoN");
		  alert (eventoN.nombre);
	      var listEvents = []; 
		  listEvents.push(eventoN);	  
	      var listEventJSON = JSON.stringify(listEvents);
		$.post('fuente/Persistence/servidor2.php', {eventos: listEventJSON},function(respuesta){
	      	  	alert(respuesta);
	      	  });
	}

	function evento(nombre,integrantes,date,genero,desc,latitud,longitud){
		//this.nombre = document.getElementById('namedb').value;
		//this.integrantes = document.getElementById('integrantes').value;
		//this.date = document.getElementById('date1').value;
		//this.genero = document.getElementById('genero').value;
		//this.desc = document.getElementById('desc').value;
		
		//var lati = document.getElementById('latitud');
		//var longi = document.getElementById('longitud').innerHTML;
		//latitud=document.getElementById("latitud");
		//this.loc = getLocatio2();
		
		//this.latitud = this.loc[0];
		//this.longitud = this.loc[1];
		//console.log(this.loc[0]);
		//console.log(this.loc[1]);
		//alert ("Entre a la función");
		//alert (this.nombre);

		this.nombre = nombre;
		this.integrantes = integrantes;
		this.date = date;
		this.genero = genero;
		this.desc = desc;
		//var lati = document.getElementById('latitud');
		//var longi = document.getElementById('longitud').innerHTML;
		//latitud=document.getElementById("latitud");
		//this.loc = getLocatio2();
		this.latitud = latitud;
		this.longitud = longitud;
		}


</script>


	

	
	<?php include_once("analyticstracking.php") ?>
		
		<div class="pushWrapper">

		    <!-- Header (shown on mobile only) -->
			<header class="pageHeader">
				<!-- Menu Trigger -->
				<button class="menu-trigger">
					<span class="lines"></span>
				</button>

				<!-- Logo -->
			    <a class="headerLogo smoothScroll" href="#section-intro">
			    	<i class="fa fa-home size-30"></i>
					<span class="text">INICIO</span>
				</a>
			</header>

		    <!-- Sidebar -->
			<div class="sidebar">

				<nav class="mainMenu">
					<ul class="menu">
					</br>		
						<li>
							<a class="smoothScroll" href="#testimonials-part" title="¿Quienes-somos?"><i class="step icon-question size-30"></i><span class="text">¿Que somos?</span></a>
						</li>
						<li>
							<a class="smoothScroll" href="#stastistical-part" title="Services"><i class="step icon-bulleted-list size-30"></i><span class="text">Actividades</span></a>
						</li>
						<li>
							<a class="smoothScroll" href="#tips-part" title="Important Tips"><i class="step icon-light-bulb size-30"></i><span class="text">Crear actividad</span></a>
						</li>
						<li>
							<a class="smoothScroll" href="#section-team" title="Team-members"><i class="fa fa-info-circle size-30 size"></i><span class="text">Acerca de</span></a>
						</li>
						<li>
							<a class="smoothScroll" href="#contact-form" title="Contact Form"><i class="step icon-envelope-1 size-30"></i><span class="text">Contacto</span></a>
						</li>
					</ul>
				</nav>

				<nav class="backToTop">
					<ul class="backToTop-menu">
						<li><a class="smoothScroll" href="#section-intro" title="to the top"><i class="fa fa-chevron-up"></i><span class="text">Ir al Inicio</span></a></li>
					</ul>
				</nav>

			</div>

			<!-- Share Menu -->
			<!--
			<nav class="shareMenu">
				<a href="#" class="share-menu-trigger"><i class="fa fa-share-alt"></i></a>

				<div class="tweet-share">

					<a href="https://twitter.com/share" class="twitter-share-button" data-via="TaphaNgum">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>



				</div>
			</nav>
			-->
		    <!-- Main -->
		    <main>

			<!-- FORMS -->

			<!-- INTRO -->
				



		<section id="menuNico" class="right">
				<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true" onlogin="checkLoginState();"></div>



		</section>

		<section class="section-intro" id="section-intro" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
		

			<a class="LC-logo" href="#/">
				<i class="icon-LClogo"></i>
				<!-- span class="text">Luxury</span> -->
			</a>

			<div class="content">
				<div class="container-template">
				    <div class="relative fullwidth col-sm-9">
                        <h1>
				    	<i class="fa fa-child size-50"></i><br><br>
				        <strong><span class="seconday">HOBBY ON THE GO</span></strong>				        
				    	</h1>
                    </div>
				   
				    <div class="relative fullwidth col-sm-3">
                            
                            <div class="relative fullwidth col-sm-12">
                            <button href="#stastistical-part" type="button" id="secondaymit" name="secondaymit" class="form-btn1 semibold btn-block smoothScroll"><i class="fa fa-paw size-50"></i>Crear Evento</button>
                    		</div>
                    		
                    <div class="relative fullwidth col-sm-12">
                            <button href="#tips-part" type="button" id="secondaymit" name="secondaymit" class="form-btn1 semibold btn-block smoothScroll"><i class="fa fa-paw size-50"></i>Listar Eventos</button>
                    		</div>
                    </div>
				    
			    </div>
		    </div>

		</section>

		<section class="testimonials-part" id="testimonials-part">

					<div class="testimonials-part-section-seperator">
						<div class="container-template">
							<h2>
						        <span class="seconday">Hobby on the GO es</span>

						    </h2>
							<br>
							<br>
							<div class="testimonials-container">
						    <ul class="testimonials testimonials-wrapper">

								    <li class="testimonials-slide">
								    	<span class="testimonial-text">La mejor opción para el desparche, si buscas algo diferente, divertido e interesante para hacer, somos tu solución!.</span>
								    </li>


								    <li class="testimonials-slide">
								    	<span class="testimonial-text">La mejor experiencia visual, para crear actividades con tus amigos, conoce y disfruta de los mejores eventos en la ciudad.</span>
								    </li>


								    <li class="testimonials-slide">
								    	<span class="testimonial-text">Inscríbete y escoje las actividades en las cuales quieres participar.</span>
								    </li>

								</ul>
							</div>

							<div class="testimonials-pagination"></div>
						</div>
					</div>

				</section>

<!--
		<section class="timeline-part" id="timeline-part">

			<div class="content">
				<div class="container-template">

					<div class="headergroup">
					    <h2 class="in-point">
					        <span class="seconday">La mejor opción para el desparche</span>
					        <br>
					        <br>
					        <br>
					        </h2>

							<p align="center">Luxury Homes, the number-one purveyor of Luxury Homes in the world, is proud to prsent this short online showcase to you. We hope you enjoy it.</p>
							<br>
					        <br>
				    </div>

				    </div>
			    </div>

		</section>

		-->
			<!-- ONLINE STATISTICS SECTION -->

		<section class="stastistical-part" id="stastistical-part">


			<!-- section-seperator -->
			<div class="section-seperator">
				<div class="container-template">
					<h2>
				        <span class="seconday">Géneros</span>
				    </h2>
				</div>

			</div>

			<!-- Content -->
			<div class="content">
				<div class="container-template">
				<div class="headergroup">
							<p>
						        <span>Busca las actividades de acuerdo al género de tu preferencia</span>
						    </p>
					</div>
					<!-- Generos -->
					<div class="row">
						<h2>
						  <div class="col-sm-6">
							  <a href   ="fuente/GUI/AL.php" type= "button" class="form-btn1 semibold btn-block">
							  <i class="fa fa-paw size-50"></i>Aire Libre</a>
						  </div>
						 <div class="col-sm-6">
							  <a href   ="fuente/GUI/D.php" type= "button" class="form-btn1 semibold btn-block">
							  <i class="fa fa-soccer-ball-o size-50"></i>Deportes</a>
						  </div>
						</h2>
					</div>
					<div class="row">
						<h2>
						  <div class="col-sm-6">
							  <a href   ="fuente/GUI/P.php" type= "button" class="form-btn1 semibold btn-block">
							  <i class="fa fa-film size-50"></i>Películas</a>
						  </div>
						  <div class="col-sm-6">
							  <a href   ="fuente/GUI/F.php" type= "button" class="form-btn1 semibold btn-block">
							  <i class="fa fa-group size-50"></i>Rumba</a>
						  </div>
						</h2>
					</div>
				</div>
			</div>

		</section>

			<!-- TESTIMONIALS SECTION -->
		<!--
		<section class="testimonials-part" id="testimonials-part">

			<div class="testimonials-part-section-seperator">
				<div class="container-template">
					<h2>
				        <span class="seconday">What our</span>
				        Clients say
				    </h2>

					<div class="testimonials-container">
				    <ul class="testimonials testimonials-wrapper">

						    <li class="testimonials-slide">
						    	<span class="testimonial-text">I am in love with the home designs. They are what i've been looking for a long time! I am in love with the home designs. They are what i've been looking for a long time!</span>
						    	<span class="testimonial-author">Ben Carson, DIRECTOR Carson Energy</span>
						    </li>


						    <li class="testimonials-slide">
						    	<span class="testimonial-text">A very interesting and haunting visual experience!&#039;It stats with you a long time. Very, very unique. A very interesting and haunting visual experience!&#039;It stats with you a long time. Very, very unique.</span>
						    	<span class="testimonial-author">Bob Gerry, CO-FOUNDER Hales &#038; Carters</span>
						    </li>


						    <li class="testimonials-slide">
						    	<span class="testimonial-text">We must definitely give you a nod for this great experience. It was very much worth my time. A very interesting and haunting visual experience!&#039;It stats with you a long time.Very,very unique.</span>
						    	<span class="testimonial-author">Catherine Denton, DIRECTOR Parpar</span>
						    </li>

						</ul>
					</div>

					<div class="testimonials-pagination"></div>
				</div>
			</div>

		</section>
		-->
			<!-- MEMBERSHIP SECTION-->
		<!--
		<section class="membership-part" id="membership-part">


			<div class="membership-part-section-seperator" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
				<div class="container-template">
					<img style="margin: auto;" src="images/keys.png" alt="keys">
					<div class="headergroup">
						<h2>
					        <span class="seconday">Get</span>
					        <span>A Home</span>

					    </h2>
				    </div>

				    <div class="content-template">
				        <p>Luxury operates on a membership basis. All customers who wish to be featured by Luxury need to secondayscribe to an annual membership once their application has been approved to meet our standard. We aim to feature only the best of the best.</p>
						<p>If you would like to be considered for membership, please contact us.</p>
				    </div>
				    <br>
				    <button type="button" class="form-btn semibold">Get A Home</button>
				</div>
			</div>

		</section>
		-->
			<!-- PROFILE -->
		<!--
		<section class="featured-part" id="featured-part">


			<div class="content">
				<div class="container-template">

					<div class="headergroup">
						<h2>
					        <span class="seconday">Top</span>
					        <span>Featured</span>
					    </h2>
				    </div>
				    <br>

				    <div class="intro content-template">
				        <p>Luxury Homes operates on in over 155 countries all over the world: <strong>Apartments</strong>, <strong>Condos</strong> and <strong>Mansions</strong>.</p>
				    </div>
				    <br>

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>



				  <div class="carousel-inner">
				    <div class="item active">
				      <img src="images/pricing.jpg" alt="...">
				      <div class="carousel-caption">

				      </div>
				    </div>
				    <div class="item">
				      <img src="images/pricing.jpg" alt="...">
				      <div class="carousel-caption">

				      </div>
				    </div>
				     <div class="item">
				      <img src="images/pricing.jpg" alt="...">
				      <div class="carousel-caption">

				      </div>
				    </div>
				  </div>



				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>

			</div>
		</div>

		</section>
		-->
		<!-- Important Tips -->

		<section class="tips-part" id="tips-part">

			<div class="section-seperator">
				<div class="container-template">
					<h2>
				        <span class="seconday">Nueva</span>
				    </h2>
				</div>
			</div>



			<!-- Content -->
			<div class="content">
				<div class="container-template">
					<div class="headergroup">
							<h2>
						        <span>Llena los siguientes campos para crear un nuevo evento</span>
						    </h2>
					</div>
					<div class="contact-form">

						 <form name = "formulario">

						 	<!-- Left Inputs -->
						 	<div class="row">
						   		<div class="col-md-6">
							      <div class="row">
							      	
							        <div class="col-md-12">
								          <!-- Name -->
			                             <!-- <br> -->
			                            <input type="text" name="namedb" id="namedb" required="required" class="form" placeholder="Nombre de la actividad"/>
								    </div>
								    <div class="col-md-12">
								        <!-- Fecha -->
			                            <input type="datetime-local" name="date1" id="date1" required="required" class="form" value = "2017-04-18T10:00"/>
							        </div>
								   </div>
								      <div class="row">
								        <div class="col-lg-6">
								         		<!-- Integrantes necesarios -->
					                            <input type="number" name="integrantes" id="integrantes" required="required" class="form" placeholder="Integrantes Necesarios" min="1"="20"/></textarea>
								        </div>
								        <div class="col-lg-6" >
								           <!-- Género -->
					                            <select name="genero" id="genero" required="required" class="form">
															   <option value="Aire Libre">Aire Libre</option>
															   <option value="Fiesta">Fiesta</option>
															   <option value="Peliculas">Películas</option>
															   <option value="Actividad Fisica">Deportes</option>
												</select>
								        </div>
							      	  </div>
						    	  </div>
						    		<!-- Right Inputs -->
								    <div class="col-md-6">
								    	<!-- <br> -->
			                            <!-- Descripción -->
										<textarea name="desc" id="desc" class="form textarea"  placeholder="Descripción"></textarea>
								    </div>
								    <div class="col-md-6">


								    </div>
								    <div class="col-md-12">
								    	<!-- Autocompletado -->
								    	<input name="autocompletado" type="text" id="autocomplete" class="form">
								    	<!-- Maps -->
								    	<div id="map" class="contact-form">
								    	<label id="latitud" style='display:none;'>no hay</label>
										<label id="longitud" style='display:none;'>no hay</label>
										</div>
								    </div>
						  	</div>
	                        <!-- Bottom secondaymit -->
	                        <div class="relative fullwidth col-xs-12">
	                            <!-- Send Button -->
	                            </br>
	                            <button onclick="guadarEvento()" href="" class="button form-btn semibold">Crear evento!</button>
	                        </div><!-- End Bottom secondaymit -->
	                        <!-- Clear -->
	                        <div class="clear"></div>
	                    </form>
	                </div>
	            </div>
	        </div>
	        </div>


<!-- lista vieja
					<div class="content-template">
				       	<ul>
							<li>
								<i class="icon-task-check"></i> Your listing will be included in the Luxury directory area (coming soon!)
							</li>
							<li>
								<i class="icon-task-check"></i> This listing will include your company logo, company description and contact details
							</li>
							<li>
								<i class="icon-task-check"></i> Payment can be made online via Stripe.
							</li>
							<li>
								<i class="icon-task-check"></i> Inclusion in the our social media activity plus followed and liked by Luxury
							</li>
							<li>
								<i class="icon-task-check"></i> Inclusion in the member’s only Luxury online directory
							</li>
							<li>
								<i class="icon-task-check"></i> A Luxury logo will be provided for you to feature this on your website.
							</li>
						</ul>
				    </div>

					<br/>
				   	<button type="button" class="form-btn semibold">Space <body></body>oking Form</button>

				</div>
			</div>
-->
		</section>

			<!-- PRICING -->
		<!--
		<section class="pricing-part" id="pricing-part">


			<div class="section-seperator">
				<div class="container-template">
					<h2>
				        <span class="seconday">Our</span>
				       Pricing
				    </h2>
				</div>
			</div>

			<div class="content">
				<div class="container-template">



			 		<ul class="pricing-menu">

					    <li class="selected"><a href="#">On Sale</a></li>
					    <li><a href="#">Recently Sold</a></li>
					    <li><a href="#">For Rent</a></li>

					</ul>


					<a href="#" class="pricing-nav pricing-nav-prev"><i class="fa fa-angle-left"></i></a>
					<a href="#" class="pricing-nav pricing-nav-next"><i class="fa fa-angle-right"></i></a>

			 		<div class="pricing-container">
				    <div class="pricing-wrapper">


					    <div class="pricing-slide">
					    	<div class="headergroup">
					    		<h3>
					    			<span>Sale</span>
									<span class="seconday">Annual Cost</span>
									<span class="super-seconday">$587,000</span>
				    			</h3>
					    	</div>

							<div class="pricing-slide-content content-template">
					    		<p>Our Diamond Membership Package</p>
								<ul>
									<li class="pricing-slide-text"> <i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>

								</ul>
								<p>&nbsp;</p>
				    		</div>
				    	</div>


					    <div class="pricing-slide">
					    	<div class="headergroup">
					    		<h3>
					    			<span>Sold</span>
									<span class="seconday">Annual Cost</span>
									<span class="super-seconday">$358,000</span>
				    			</h3>
					    	</div>

							<div class="pricing-slide-content content-template">
					    		<p>Our premium Membership Package</p>
								<ul>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>

								</ul>
								<p>&nbsp;</p>
				    		</div>
				    	</div>


					    <div class="pricing-slide">
					    	<div class="headergroup">
					    		<h3>
					    			<span>Rent</span>
									<span class="seconday">Annual Cost</span>
									<span class="super-seconday">$18,000</span>
				    			</h3>
					    	</div>

							<div class="pricing-slide-content content-template">
								<p>Our great Membership Package</p>
					    		<ul>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>
									<li class="pricing-slide-text"><i class="icon-compose"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, explicabo, Luxury.</li>

								</ul>
				    		</div>
				    	</div>
					</div>
				</div>
			</div>
		</div>

		</section>

		-->
			<!-- EVENTS CALENDAR SECTION-->
			<!--
		<section class="events-part" id="events-part">



			<div class="section-seperator">
				<div class="container-template">
					<h2>
				        <span class="seconday">Upcoming</span>
				        Events
				    </h2>
				</div>
			</div>


			<div class="content">
				<div class="container-template">


			 		<ul class="events-list">
		 				<li class="event-titles">
		 					<div class="event-title">Event</div>
		 					<div class="event-title">Date</div>
		 					<div class="event-title">Location</div>
		 				</li>

		 				<li>
		 					<div class="event-text">
								<div class="event-details content-template">
									<h4 class="event-title">Highbury</h4>

									<div class="event-date">
										08/09/2015							</div>

									<div class="event-location">
										London Rd. 46 Waterloo Road. NW1 5QT  	</div>
								</div>

								<div class="event-description content-template">devious Semikoli. Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. </div>
							</div>

							<div class="event-image">
								<img src="images/lambo2copy.jpg" alt="your text" />
							</div>
		 				</li>


		 				<li>
		 					<div class="event-text">
								<div class="event-details content-template">
									<h4 class="event-title">Gordon Hague</h4>

									<div class="event-date">
										29/05/2014
									</div>

									<div class="event-location">
										Unit 68
										69 Royal Hospital Road
										London SW3 4HP
									</div>
								</div>

								<div class="event-description content-template">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden of Luxury.
								</div>
							</div>

							<div class="event-image">
								<img src="images/appartmentcopy.jpg" alt="your text" />					</div>
		 				</li>


		 				<li>
		 					<div class="event-text">
								<div class="event-details content-template">
									<h4 class="event-title">devious Semikoli</h4>

									<div class="event-date">
										09/07/2013							</div>

									<div class="event-location">
										Rocking Palace, 22 Happiness Hill Way.							</div>
								</div>

								<div class="event-description content-template">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden</div>
							</div>

							<div class="event-image">
								<img src="images/intro_bgcopy.jpg" alt="your text here" />					</div>
		 				</li>


		 				<li>
		 					<div class="event-text">
								<div class="event-details content-template">
									<h4 class="event-title">47 Chandos Place</h4>

									<div class="event-date">
										29/09/2019
									</div>

									<div class="event-location">
											47 Chandos Place
											Covent Garden
											London WC2N 4HS
											Covent Garden, Strand
									</div>
								</div>

								<div class="event-description content-template">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden </div>
							</div>

							<div class="event-image">
								<img src="images/brand-copyy.jpg" alt="your text" />
							</div>
		 				</li>
					</ul>
				</div>
			</div>
		</section>
			-->
			<!-- FOUNDERS & TEAM SECTION-->

		<section class="section-team" id="section-team">

			<!-- Content -->
			<div class="content">
				<div class="container-template">

					<div class="headergroup">
						<h2>
					        <span>BornSystem</span>
					    </h2>
				    </div>


					<!-- Team Members List -->
			 		<ul class="team-members">

		 				<li>
		 					<div class="team-member-image">
		 						<img src="images/Reza.png" alt="yours alone" />
		 					</div>

		 					<h3 class="team-member-title">
		 						<span class="seconday">Hobby on the GO</span>
		 					</h3>

		 					<div class="team-member-text content-template">
		 						<p>Desarrolladores:</p>
		 						<p>Jonathan Camilo Ferrucho Espitia</p>
		 						<p>Nicolay Joya González</p>
		 					</div>
		 				</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="contact-form" id="contact-form">

					<div class="headergroup">
						<h2>
					        <span>Envíanos un Correo!</span>
					    </h2>
				    </div>

		<div class="container">
			<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <br />
                    <form id="contact-us" method="post" action="contact.php">
                        <!-- Left Inputs -->
                       <div class="col-xs-6 ">
                            <!-- Name -->
                            <br>
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Nombre" />
                            <!-- Email -->
                            <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                            <!-- secondayject -->
                            <input type="text" name="secondayject" id="secondayject" required="required" class="form" placeholder="Asunto" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6">
                            <!-- Message -->
                            <br>
                            <textarea name="message" id="message" class="form textarea"  placeholder="Mensaje"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom secondaymit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="button" id="secondaymit" name="secondaymit" class="form-btn semibold">Enviar Mensaje</button>
                        </div><!-- End Bottom secondaymit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Gracias !</strong> Tu correo se ha enviado satisfactoriamente.
                        </div>
                    </div>
                    </div>
                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->

        <br />

		</section>

			<footer class="pageFooter">
				
				<div class="btnContainer">
					<a class="gc-link" href="#" target="_blank"><i class="icon-handcrafted"></i></a>
				</div>

				<div class="btnContainer">
				    <a class="LC-logo" href="#/">
						<i class="icon-LClogo"></i>
					</a>
				</div>
			</footer>

			</main>

		</div>
		<script type='text/javascript' src='js/jquery.js'></script>
		<script type='text/javascript' src='js/jquery-migrate.js'></script>
		<script type='text/javascript' src='js/jquery.form.js'></script>
		<script type='text/javascript' src='js/jquery.mobile.custom.js'></script>
		<script type='text/javascript' src='js/modernizr.js'></script>
		<script type='text/javascript' src='js/response.js'></script>
		<script type='text/javascript' src='js/swiper.js'></script>
		<script type='text/javascript' src='js/waypoints.js'></script>
		<script type='text/javascript' src='js/jquery.stellar.js'></script>
		<script type='text/javascript' src='js/module.js'></script>
		<script type='text/javascript' src='js/bootstrap.min.js'></script>
		<script src="js/wow.min.js"></script>
		<script>
		new WOW().init();
		</script>

	</body>
</html>
