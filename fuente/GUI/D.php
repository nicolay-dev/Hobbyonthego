<!DOCTYPE html>
<html lang="en-US">
<head>

	
		
	<meta charset="UTF-8" />
	<meta name="description" content=""/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Luxury - Dream Home At Your Doorsteps </title>
	<!-- Windows 8 Tiles -->
	<meta name="msapplication-TileColor" content="#FFFFFF"/>
	<!-- ****** faviconit.com favicons ****** -->
	<link rel="stylesheet" type="text/css" href="../../css/style.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/animate.min.css"/>
	<link rel="stylesheet" href="../../css/picto-foundry-emotions.css" />
	<link rel="stylesheet" href="../../css/picto-foundry-household.css" />
	<link rel="stylesheet" href="../../css/picto-foundry-shopping-finance.css" />
	<link rel="stylesheet" href="../../css/picto-foundry-general.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="../../css/font-awesome.min.css" rel="stylesheet"/>
</head>
	<body>
		<div class="pushWrapper">
		    <!-- Header (shown on mobile only) -->
			<header class="pageHeader">
				<!-- Menu Trigger -->
				<button class="menu-trigger">
					<span class="lines"></span>
				</button>

				<!-- Logo -->
			    <a class="headerLogo smoothScroll" href="../../index.html">
			    	<i class="fa fa-child size-30"></i>
					<span class="text">INICIO</span>
				</a>		  
			</header>
		    
		    <!-- Sidebar -->
			<div class="sidebar">

				<nav class="mainMenu">
					<ul class="menu">
						<li>
							<a class="smoothScroll" href="#events-part" title="Upcoming Events"><i class="step icon-calendar-1 size-30 size"></i><span class="text">Lista</span></a>
						</li>
						
					</ul>
				</nav>

				<nav class="backToTop">
					<ul class="backToTop-menu">
						<li><a class="smoothScroll" href="#events-part" title="to the top"><i class="fa fa-chevron-up"></i><span class="text">Back to top</span></a></li>
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

		<section class="events-part" id="events-part">


			<!-- section-seperator -->
			<div class="section-seperator">
				<div class="container-template">
					<h2>
				        <span class="seconday">Eventos</span>
				    </h2>
				</div>
			</div>

			<!-- Content -->
			<div class="content">



				<div class="container-template">
					<form action="DF.php" method="post" name = "formulario">
					<div class="col-md-6">
					</div>
					<div class="col-md-4">
					<!-- Fecha -->
			    	<input type="datetime-local" name="date2" id="date1" required="required" class="form" value = "2017-04-18T10:00"/>
				</div>
				<div class="col-md-2">
					<!-- Boton filtrar -->
					<button href="" type="button submit" class="button submit form-btn semibold">Filtrar por fecha</button>
			    </div>
			    </form>
			    </div>
			    <br>
			    <br>
			    <div class="container-template">


					<!-- Events List -->
			 		<ul class="events-list">
		 				<li class="event-titles">
		 					<div class="event-title">Nombre</div>
		 					<div class="event-title">Fecha</div>
		 					<div class="event-title">Inscribirse</div>
		 				</li>
						
							<?php
								
								include '../Persistence/Conexion.php';
								
								$conexion = new Conexion();

								$data=$conexion->cargarGenero("Actividad Fisica");
								
								if($data === false) {
									
									trigger_error('Wrong SQL: ' . $query . ' Error: ' . $conn->error, E_USER_ERROR);
								} else {
									
									$rows_returned = $data->num_rows;
								}
						
								$data->data_seek(0);
								//echo "llegue al while";
								while($row=$data->fetch_assoc()){
									echo '<li>
									<div class="event-text">
									<div class="event-details content-template">
									<h4 class="event-title">'.$row['name'].'</h4>
									<div class="event-date">'.$row['fecha'].'</div>
									<div class="event-location">
									<a href="../Persistence/validar.php" class="form-btn semibold">Inscribirse!</a></div></div>
									<div class="event-description content-template">'.$row['descr'].'.</div></div>
									<div class="event-image">
									<img src="../../images/ActividadFisica.jpg" alt="your text" /></div>';



									//echo '<br>ID: '.$row['id_event']. '/ Nombre: '.$row['name'].'/  Descripción: ' .$row['descr'].' / fecha: '.$row['fecha'] .'<br>';
								}
							?>



<!--
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