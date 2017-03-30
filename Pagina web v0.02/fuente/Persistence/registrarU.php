<?php

	if(isset($_POST['evento'])&& isset($_POST['usuarioI'])){
		
		$evento= $_POST['evento'];
		$username= $_POST['usuarioI'];
		
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
		$query="select * from USERS where name = '$username'";
		
		$rs= $connection->query($query);
		$rs->data_seek(0);
		

		while($row=$rs->fetch_assoc()){
			$u=$row['id_user'];
			$query2="insert INTO PASES(tipo, usuario, evento) VALUES ('A','$u', '$evento')";
			$rs2= $connection->query($query2);
		}

		header('Location: ../../index.html');		
	}

?>