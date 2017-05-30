<?php
	/*
	$_HOST = "sql202.rf.gd";	
	$_USERNAME= "rfgd_19756503";
	$_DB = "rfgd_19756503_hobbyonthegoDB";
	$_PASS = "mtd3pbWo";
	*/

	class DataDB{
		
		private $host;	
		private $username;
		private $db;
		private $pass;

		public function getHost(){
			//$host = "sql202.rf.gd";
			$host = "localhost";
			return $host;    
		}
		public function getUsername(){
			//$username = "rfgd_19756503";
			$username = "id1807813_nicolay";
			//$username= "root";
			return $username;    
		}
		public function getDB(){

			//$db = "rfgd_19756503_HB";
			$db = "id1807813_hbogo";
			//$db = "hobbyonthego";
			return $db;    
		}
		public function getPass(){
			$pass = "mtd3pbWo";
			//$pass = "";
			return $pass;    
		}
	}

?>