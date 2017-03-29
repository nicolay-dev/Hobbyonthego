<?php
/*
	if(isset($_POST['date2'])){
		
		$fecha= $_PO0ST['date2'];

		$db = "rfgd_19756503_hobbyonthegoDB";
		$host = "sql202.rf.gd";
		$pass = "mtd3pbWo";
		$user = "rfgd_19756503";

		$con = mysql_connect($host,$user,$pass) or die("Error al conectar");
		
		mysql_select_db($db,$con) or die("Error al inicializar");

		$resultado = mysql_query("select * from event where fecha="$fecha";") or die ("Errer al buscar la informacion");
		
		while($fila = mysql_fetch_array($resultado, MYSQL_NUM)){
			echo $fila[0];
		}*/
	echo "lalalalalalalalalal";

	if(isset($_POST['date2'])){

		echo "entre al if ---2";
		$fecha= $_PO0ST['date2'];
		
		$host = "sql202.rf.gd";	
		$username= "rfgd_19756503";
		$db = "rfgd_19756503_hobbyonthegoDB";
		$pass = "mtd3pbWo";

		$connection= new mysqli($host, $username, $pass, $db) or die ("Error al buscar la informacion");
	
		echo $fecha;
		//select * from event where fecha='$fecha';
		$query="select * from EVENT where fecha='2017-02-02';";
		//realiza consulta1
		$rs= $connection->query($query);
	
		if($rs === false) {
			echo "rs====false";
		  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $conn->error, E_USER_ERROR);
		} else {
		echo "entre al else";
		  $rows_returned = $rs->num_rows;
		}
	

		$rs->data_seek(0);
		echo "llegue al while";
		while($row=$rs->fetch_assoc()){
			echo "entre al while";
			echo '<br>'.$row['descr'] .'<br>';
		}
	}	
?>