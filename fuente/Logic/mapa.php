<!DOCTTYPE html>
<html lang="en">	
<head>

	<meta charset="UTF-8">	
	<title>Maps api</title>	

<script src="https://maps.googleapis.com/maps/api/
		js?key=AIzaSyCFd1zMkRE1Myz0yNxdJ4l8HVCDwYQoGFM&libraries=places">
    </script>

    <script src= "mainM.js"></script>
    <script src= "LocalizacionM.js"></script>


</head>

<body>
<?php 
	include 'Conexion.php';	
    
    $nombre = $_POST['nombre'];
	$latitud = $_POST['latitud'];
	$longitud = $_POST['longitud'];
    
	echo '<div id="map"></div>
		<p id="latitud">'.$latitud.'</p>
		<p id="longitud">'.$longitud.'</p>';
?>

</body>
</html>


