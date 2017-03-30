<!DOCTYPE HTML>
<!--
<script type="text/javascript" src="../../assets/js/jquery-3.2.0.js"></script>
 
<script>
function realizaProceso(valorCaja1, valorCaja2){
        var parametros = {
                "valorCaja1" : valorCaja1,
                "valorCaja2" : valorCaja2
        };
        $.ajax({
                data:  parametros,
                url:   'ejemplo_ajax_proceso.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
}
</script>
-->
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
							<h1>Eventos de Fiesta:</h1>
							
							<?php

								include '../Persistence/Conexion.php';
								
								$conexion= new conexion;
								
								$data=$conexion->cargarGF($_POST['date2'] 	, "Fiesta");
							
								if($data === false) {
									trigger_error('Wrong SQL: ' . $query . ' Error: ' . $conn->error, E_USER_ERROR);
								} else {
									//echo "entre al else";
									$rows_returned = $data->num_rows;
								}
						
								$data->data_seek(0);
								//echo "llegue al while";
								while($row=$data->fetch_assoc()){
									//echo "entre al while";
									echo '<br>ID: '.$row['id_event']. '/ Nombre: '.$row['name'].'/  Descripción: ' .$row['descr'].' / fecha: '.$row['fecha'] .'<br>';
								}
							?>

							<div class="inner">
								<form action="../Persistence/registrarU.php" method = post name = "formulario">						
								
									<label for="">Inscribirse: </label>
									<p>Para inscribirse a un evento escribe el ID del evento y tu usuario</p>
									<label for="">ID: </label>
									<input type="number" name="evento" id="evento" min="0" max="1000"></textarea>
									<label for="">Usuario: </label>
									<input type="text" name="usuarioI" id="usuarioI"></textarea>
									<ul class="actions">
												<li><a href="" class="button submit">Registrar</a></li>
									</ul>
								</form>

							
								<form action="FiestaF.php" method= post name= "cargar">	
									<div class="field">
									<label for="">Listar por fecha: </label>
										<label for="date2">Fecha: </label>
										<input name= "date2" id="date2" type="date" min = "2017-03-17" value = "2017-03-30"></input>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit" >Buscar</a></li>
										</ul>
							
								</form>
							</div>						
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