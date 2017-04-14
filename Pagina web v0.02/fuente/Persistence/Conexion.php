<?php
	include 'DataDB.php';
	
	class conexion{	

		function guardar($desc, $date1){   
			$dataDB = new DataDB();	
			$connection= new mysqli($dataDB->getHost(), $dataDB->getUsername(), $dataDB->getPass(), $dataDB->getDB()) or die ("Error al Conecatar con la base de datos");			
			$query="INSERT INTO EVENT (descr,fecha,usuario) VALUES ('$desc','$date1',1);";
			$rs= $connection->query($query);
		}
		
		function cargarGF($fecha_inicio, $genero){
				
			$fecha= date("Y-m-d", strtotime("$fecha_inicio"));
			//echo $fecha."<br>";

			
			$dataDB = new DataDB();	
			$connection= new mysqli($dataDB->getHost(), $dataDB->getUsername(), $dataDB->getPass(), $dataDB->getDB()) or die ("Error al Conecatar con la base de datos");
			$query ="select * from EVENTS where genero ='$genero' AND fecha='$fecha'";
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
	}
?>