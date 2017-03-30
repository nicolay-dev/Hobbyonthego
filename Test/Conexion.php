<?php
	include 'dataDB.php';
	
	class conexion{	

		function guardar($desc, $date1){   
			$dataDB = new dataDB;	
			$connection= new mysqli($dataDB->getHost(), $dataDB->getUsername(), $dataDB->getPass(), $dataDB->getDB()) or die ("Error al Conecatar con la base de datos");			
			$query="INSERT INTO EVENT (descr,fecha,usuario) VALUES ('$desc','$date1',1);";
			$rs= $connection->query($query);
		}
		
		function cargar($fecha_inicio){
				
			$fecha= date("Y-m-d", strtotime("$fecha_inicio"));
			echo $fecha."<br>";

			/*echo $date->format('Y-m-d');*/
			/*echo $_PO0ST['date2'];*/
			//$query="select * from EVENT where fecha='$fecha';";
			//realiza consulta1
			
			$query="begin dbms_output.put_line('prueba de pl'); end";
			
			echo $query;
			$dataDB = new dataDB;	
			$connection= new mysqli($dataDB->getHost(), $dataDB->getUsername(), $dataDB->getPass(), $dataDB->getDB()) or die ("Error al Conecatar con la base de datos");
			$rs= $connection->query($query);
			echo $rs;
			return $rs;
		}	
	}
?>