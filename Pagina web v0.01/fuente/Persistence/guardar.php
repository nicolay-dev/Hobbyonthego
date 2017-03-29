<?php

	if(isset($_POST['desc'])){
		
		$description= $_POST['desc'];
		$date= $_POST['date1'];
		
		$db = "rfgd_19756503_hobbyonthegoDB";
		$host = "sql202.rf.gd";
		$pass = "mtd3pbWo";
		$user = "rfgd_19756503";

		$con = mysql_connect($host,$user,$pass) or die("No se pudo parce!!!");
		echo "Conecte";

		mysql_select_db($db,$con) or die("no se pudo peee");
		mysql_query("INSERT INTO EVENT (descr,fecha,usuario) VALUES ('$description','$date',1);") or die("eror al insertar datos");
		// retun 0 si todo bn 1 si yuca 
		header('Location: ../../index.html');
		
	}

?>