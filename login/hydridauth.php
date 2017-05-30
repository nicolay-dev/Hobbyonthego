
<?php
	
// para apuntar la direccion 	 dependencias 
  require_once('vendor/autoload.php');

  if (isset($_REQUEST['hauth_start']) || isset($_REQUEST['hauth_done'])){ //si la peticcion esta en proceso o ya esta ehca 
    Hybrid_Endpoint::process(); // procesar la peticcion 
  }

 ?>
