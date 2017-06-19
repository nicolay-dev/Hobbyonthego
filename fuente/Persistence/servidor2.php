<?php 
	include 'Conexion.php';	
    
    $nombre = $_POST['nombre'];
	$integrantes = $_POST['integrantes'];
	$date = $_POST['date'];
	$genero = $_POST['genero'];
	$desc = $_POST['desc'];
	$latitud = $_POST['latitud'];
	$longitud = $_POST['longitud'];
	echo $date;
   	$con = new Conexion();
   	//log BD    	
   	$con->guardarEventos($nombre,$integrantes,$date,$genero,$desc,$latitud,$longitud);
   	
    
?>