<!DOCTYPE HTML>

<script type="text/javascript">
  
</script>

<html>
	<head>

		<title>Hobby on the GO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
 
		<script src="https://code.jquery.com/ui/1.8.10/jquery-ui.min.js"></script>	

	</head>
	<body>

			<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Resultados de la consulta</h1>
							<p>Eventos para la fecha seleccionada </p>

							<?php
							include 'conexion.php';
								
								if(isset($_POST['date2'])){
									
									echo "código php";
								
									$conexion= new conexion;
									$data=$conexion->cargar($_POST['date2']);
								
										if($data === false) {
									
										trigger_error('Wrong SQL: ' . $query . ' Error: ' . $conn->error, E_USER_ERROR);
										} else {
										  $rows_returned = $data->num_rows;
										}

										$data->data_seek(0);
										
										while($row=$data->fetch_assoc()){
											echo '<br>'.$row['descr'].' / fecha: '.$row['fecha'] .'<br>';

										}
								}

							?>
							<ul class="actions">
								<li><a href="../../index.html" class="button scrolly">Regresar</a></li>
							</ul>
						</div>
					</section>

			
				<!-- Three -->
					
			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Bron System. All rights reserved.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/jquery.scrollex.min.js"></script>
			<script src="../../assets/js/jquery.scrolly.min.js"></script>
			<script src="../../assets/js/skel.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../../assets/js/main.js"></script>

	</body>
</html>