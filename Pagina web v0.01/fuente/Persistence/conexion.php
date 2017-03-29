<?php
	include 'dataDB.php';
	
	class conexion{
	
		function __construct() {

			$dataDB = new dataDB;	
			$connection= new mysqli($dataDB->getHost(), $dataDB->getUsername(), $dataDB->getPass(), $dataDB->getDB()) or die ("Error al Conecatar con la base de datos");

			echo "Conecte";
			
		}
		
		function guardar($desc, $date1){   
						
			$query="INSERT INTO EVENT (descr,fecha,usuario) VALUES ('$desc','$date1',1);";
			$rs= $connection->query($query);
		}
		
		function cargar($fecha_inicio){
				
			$fecha= date("Y-m-d", strtotime("$fecha_inicio"));
			echo $fecha."<br>";

			/*echo $date->format('Y-m-d');*/
			/*echo $_PO0ST['date2'];*/
			$query="select * from EVENT where fecha='$fecha';";
			//realiza consulta1
			$rs= $connection->query($query);
			
			return $rs;
		}	
	}
?>