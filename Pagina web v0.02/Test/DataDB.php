
<?php

  /*$_HOST = "sql202.rf.gd";  
  $_USERNAME= "rfgd_19756503";
  $_DB = "rfgd_19756503_hobbyonthegoDB";
  $_PASS = "mtd3pbWo";*/
 class DataDB{
    
    private $host;  
    private $username;
    private $db;
    private $pass;


    public function getHost(){
      $this->host = "localhost";
      return $host;    
    }
    public function getUsername(){
      $this->username= "root";
      return $username;    
    }
    public function getDB(){
      $this->db = "hobby";
      return $db;    
    }
    public function getPass(){
      $this->pass = "";
      return $pass;    
    }
  }
?>