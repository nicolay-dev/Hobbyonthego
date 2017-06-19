<?php 
	include 'Conexion.php';	
    
    $listEvents = json_decode($_POST['eventos']);
 	
    foreach($listEvents as $evento)
    {
    	$con = new Conexion();    	
    	$con->guardarEventos($evento->nombre,$evento->integrantes,$evento->date,$evento->genero,$evento->desc,$evento->latitud,$evento->longitud);
    }
    
?>