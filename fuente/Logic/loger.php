<?php
		
		$value = $_POST['valor'];

		if ($value == '1') {
			logIndex("Index.php");
		}if($value == '2'){
			logIndex("Función Crear evento");
		}if($value == '3'){
			logIndex("Consulta BD");
		}

		function write_log($cadena,$tipo){
			$arch = fopen(realpath( '../..' )."/logs/milog_".date("Y-m-d").".txt", "a+"); 

			fwrite($arch, "[".date("Y-m-d H:i:s.u")." ".$_SERVER['REMOTE_ADDR']." ".
		                   $_SERVER['HTTP_X_FORWARDED_FOR']." - $tipo ] ".$cadena."\n");
			fclose($arch);
		}

		function logIndex($cadena){

				if(!empty($_SERVER['HTTP_REFERER'])){
					write_log("IP: ".$_SERVER['REMOTE_ADDR']." - ".$_SERVER['HTTP_X_FORWARDED_FOR']." - "."\nFunción: ".
										$cadena.
			                             "\nHTTP_HOST: ".$_SERVER['HTTP_HOST']."\nHTTP_REFERER: 
			                             ".$_SERVER['HTTP_REFERER']
			                             .$_SERVER['REQUEST_URI'],"INFO")
										 ;
				}else{
					write_log("IP: ".$_SERVER['REMOTE_ADDR']." - ".$_SERVER['HTTP_X_FORWARDED_FOR']." - "."\nFunción: ".
										$cadena.
			                             "\nHTTP_HOST: ".$_SERVER['HTTP_HOST']."\nHTTP_USER_AGENT: ".
			                             $_SERVER['HTTP_USER_AGENT']."\nREQUEST_URI: ".
			                             $_SERVER['REQUEST_URI'],"INFO")
										 ;
				}
		}
?>


