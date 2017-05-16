<?php
use PHPUnit\Framework\TestCase;
include_once 'DataDb.php';
class PUConexion extends TestCase{
  
	    public function testHost() {
	    
		    $d = new DataDb();
		    $expect = 'localhost';
	        $actual = $d->getHost();
	        $this->assertEquals($expect, $actual);
		}
	  	public function testUsername() {
	    
	        $data = new DataDB();
	        
	        $expected = "root";
	        $actual = $data->getUsername();
	        $this->assertEquals($expected, $actual);
	    }
	  
	   public function testDB() {
	    
	        $data = new DataDB();
	        $expected = "hobby";
	        $actual = $data->getDB();
	        $this->assertEquals($expected, $actual);
	    }
	  
	   	public function testPass() {
	    
	        $data = new DataDB();
	        $expected = "";
	        $actual = $data->getPass();
	        $this->assertEquals($expected, $actual);
	    }
	}
?>