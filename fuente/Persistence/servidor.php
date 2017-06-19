<?php 
	include 'Conexion.php';	
    
    $listUsers = json_decode($_POST['usuarios']);
 	
    foreach($listUsers as $user)
    {
    	echo "Bienvenido: " .$user->nombre;
    	$con = new Conexion();    	
    	$con->guardarUsuario($user->id,$user->nombre);
    	
    	//header ("Location: https://gohobby.000webhostapp.com/");
    }
    
?>