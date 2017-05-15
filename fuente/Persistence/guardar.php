<?php

	if(isset($_POST['desc'])&& isset($_POST['date1']) && isset($_POST['username']) &&isset($_POST['password'])&&isset($_POST['genero'])&& isset($_POST['integrantes'])&& isset($_POST['namedb'])){
	//if(isset($_POST['desc'])&& isset($_POST['date1']) &&isset($_POST['genero'])&& isset($_POST['integrantes'])&& isset($_POST['namedb'])){
		
		$nombre= $_POST['namedb'];
		$description= $_POST['desc'];
		$date= $_POST['date1'];
		$username= $_POST['username'];
		$password= $_POST['password'];
		//$username= "Nico";
		//$password= "1234";
		$genero= $_POST['genero'];
		$integrantes= $_POST['integrantes'];

		$fecha= date("Y-m-d", strtotime("$date"));
		
		$db = "rfgd_19756503_HB";
		$user = "rfgd_19756503";
		$pass = "mtd3pbWo";
		$host = "sql202.rf.gd";


/*
		$db = "hobbyonthego";
		$host = "localhost";
		$pass = "";
		$user = "root";

*/		
		$connection= new mysqli($host, $user, $pass, $db) or die ("Error al Conecatar con la base de datos");			
		$query="select * from USERS 	where name = '$username' AND pass = '$password'";
		
		$rs= $connection->query($query);
		$rs->data_seek(0);
		
			while($row=$rs->fetch_assoc()){
			if(strcmp($row['name'] ,$username)== 0 && strcmp($row['pass'] ,$password)== 0){

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
			echo "<script>alert('El Evento se agrego con exito!');</script>";
		echo "<script>document.location.href='../../index.html'</script>";
		}else{
		echo "<script>alert('Revisar datos por favor, no se pudo crear el evento');</script>";
		echo "<script>document.location.href='../../index.html'</script>";

		
		//header('Location: ../../index.html');
		}
	}echo "<script>alert('Revisar datos por favor, no se pudo crear el evento');</script>";
		echo "<script>document.location.href='../../index.html'</script>";
	}

?>