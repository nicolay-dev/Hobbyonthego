
<?php

  /*$_HOST = "sql202.rf.gd";  
  $_USERNAME= "rfgd_19756503";
  $_DB = "rfgd_19756503_hobbyonthegoDB";
  $_PASS = "mtd3pbWo";*/
 class DataDB{
    
    protected $host = "localhost";  
    protected $username = "root";
    protected $db = "hobby";
    protected $pass = "";


    public function getHost(){
      return $this->host;    
    }
    public function getUsername(){
      return $this->username;    
    }
    public function getDB(){
      return $this->db;    
    }
    public function getPass(){
      return $this->pass;    
    }
  }
?>