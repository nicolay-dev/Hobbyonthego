<?php

	if(isset($_POST['desc'])&& isset($_POST['date1']) && isset($_POST['username']) &&isset($_POST['password'])&&isset($_POST['genero'])&& isset($_POST['integrantes'])&& isset($_POST['namedb'])){
		
		$nombre= $_POST['namedb'];
		$description= $_POST['desc'];
		$date= $_POST['date1'];
		$username= $_POST['username'];
		$password= $_POST['password'];
		$genero= $_POST['genero'];
		$integrantes= $_POST['integrantes'];

		$fecha= date("Y-m-d", strtotime("$date"));
/*		
		$db = "rfgd_19756503_hobbyonthegoDB";
		$host = "sql202.rf.gd";
		$pass = "mtd3pbWo";
		$user = "rfgd_19756503";

*/


		$db = "hobbyonthego";
		$host = "localhost";
		$pass = "";
		$user = "root";

		$connection= new mysqli($host, $user, $pass, $db) or die ("Error al Conecatar con la base de datos");			
		$query="select * from USERS 	where name = '$username' AND pass = '$password'";
		
		$rs= $connection->query($query);
		$rs->data_seek(0);
		

		while($row=$rs->fetch_assoc()){

			$query2="insert INTO EVENTS(name, descr, fecha, genero, max_usuario) VALUES ('$nombre', '$description', '$fecha', '$genero' , $integrantes)";
			$rs2= $connection->query($query2);
			$u= $row['id_user'];

			$query3="select id_event from EVENTS WHERE name='$nombre'";
			$rs3= $connection->query($query3);
			$rs3->data_seek(0);

			while($row2=$rs3->fetch_assoc()){
				$e=$row2['id_event'];
				$query4="insert INTO PASES(tipo, usuario, evento) VALUES ('C','$u', '$e')";
				$connection->query($query4);	
			}
		}

		header('Location: ../../index.html');		
	}

?>