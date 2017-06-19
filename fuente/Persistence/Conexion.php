<?php
	include 'DataDB.php';
	
	class conexion{	

		function guardar($desc, $date1){   
			$dataDB = new DataDB();	
			$connection= new mysqli($dataDB->getHost(), $dataDB->getUsername(), $dataDB->getPass(), $dataDB->getDB()) or die ("Error al Conecatar con la base de datos");			
			$query="INSERT INTO EVENTS (descr,fecha,usuario) VALUES ('$desc','$date1',1);";
			$rs= $connection->query($query);
		}
		
		function cargarGF($fecha_inicio,$fecha_fin, $genero){
				
			$fechaini= date("Y-m-d", strtotime("$fecha_inicio"));
			$fechafin= date("Y-m-d", strtotime("$fecha_fin"));
			//echo $fecha."<br>";

			
			$dataDB = new DataDB();	
			$connection= new mysqli($dataDB->getHost(), $dataDB->getUsername(), $dataDB->getPass(), $dataDB->getDB()) or die ("Error al Conecatar con la base de datos");
			$query ="select * from EVENTS where genero ='$genero' AND fecha>='$fechaini' AND fecha <= '$fechafin'";
			$rs= $connection->query($query);			
			return $rs;
		}	

		function cargarGenero($genero){
				
			/*echo $date->format('Y-m-d');*/
			/*echo $_PO0ST['date2'];*/
			//realiza consulta1
			
			
			$dataDB = new DataDB();	
			$connection= new mysqli($dataDB->getHost(), $dataDB->getUsername(), $dataDB->getPass(), $dataDB->getDB()) or die ("Error al Conecatar con la base de datos");
			$query ="select * from EVENTS where genero ='$genero'";
			
			$rs= $connection->query($query);
			
			return $rs;
		}
		function guardarUsuario($id,$name){
			$dataDB = new DataDB();	
			$connection= new mysqli($dataDB->getHost(), $dataDB->getUsername(), $dataDB->getPass(), $dataDB->getDB()) or die ("Error al Conecatar con la base de datos");
			$query="SELECT RED_ID FROM USERS WHERE RED_ID = $id";
			$rs= $connection->query($query);
			$rs->data_seek(0);
			if(!($rs->data_seek(0))){
			//while($row=$rs->fetch_assoc()){	
				$query2="insert INTO USERS(name,red_id) VALUES ('$name','$id');";
				$rs2= $connection->query($query2);
			}	
		

		}
		function guardarEventos($nombre,$integrantes,$date,$genero,$desc,$latitud,$longitud){
			echo $nombre;
			$dataDB = new DataDB();	
			$connection= new mysqli($dataDB->getHost(), $dataDB->getUsername(), $dataDB->getPass(), $dataDB->getDB()) or die ("Error al Conecatar con la base de datos");
			$fecha= date("Y-m-d", strtotime("$date"));
			$query2="insert INTO USERS(nombre,descr,fecha,genero,max_usuario,latitud,longitud) VALUES ('$nombre','$desc','$fecha','$genero',$integrantes,'$latitud','$longitud');";
			$rs2= $connection->query($query2);				
		}
	}
?>