<?php
	/*
	$_HOST = "sql202.rf.gd";	
	$_USERNAME= "rfgd_19756503";
	$_DB = "rfgd_19756503_hobbyonthegoDB";
	$_PASS = "mtd3pbWo";
	*/

class dataDB{
  	
  	private $host;	
	private $username;
	private $db;
	private $pass;
  	
/*
	function __construct() {
		$host = "localhost";
		$username= "root";
		$db = "hobbyonthego";
		$pass = "";
	}
*/

  	public function getHost(){
  		$host = "localhost";
    	return $host;    
 	}
 	public function getUsername(){
 		$username= "root";
    	return $username;    
 	}
 	public function getDB(){
 		$db = "hobbyonthego";
    	return $db;    
 	}
 	public function getPass(){
    	$pass = "";
    	return $pass;    
 	}
}

?>