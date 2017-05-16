<?php

  /*$_HOST = "sql202.rf.gd";  
  $_USERNAME= "rfgd_19756503";
  $_DB = "rfgd_19756503_hobbyonthegoDB";
  $_PASS = "mtd3pbWo";*/

 class DataDb{
    
    private $host;  
    private $username;
    private $db;
    private $pass;
    public function getHost(){
      /*$host = "localhost";*/
      $host = "sql202.rf.gd";
      return $host;    
    }
    public function getUsername(){
      /*$username= "root";*/
      $username= "rfgd_19756503";
      return $username;    
    }
    public function getDB(){
      /*$db = "hobby";*/
      $db = "rfgd_19756503_hobbyonthegoDB";
      return $db;    
    }
    public function getPass(){
      /*$pass = "";*/
      $pass = "mtd3pbWo";
      return $pass;    
    }
  }
?>