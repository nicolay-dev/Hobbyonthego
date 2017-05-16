<?php
use PHPUnit\Framework\TestCase;
include_once 'DataDb.php';
class PUConexion extends TestCase{

	    public function testHost() {

		    $d = new DataDb();
		    /*$expect = 'localhost';*/
		    $expect = 'sql202.rf.gd';
	        $actual = $d->getHost();
	        $this->assertEquals($expect, $actual);
		}
	  	public function testUsername() {

	        $data = new DataDB();
	        /*$expected = "root";*/
	        $expected = "rfgd_19756503";
	        $actual = $data->getUsername();
	        $this->assertEquals($expected, $actual);
	    }

	   public function testDB() {

	        $data = new DataDB();
	        /*$expected = "hobby";*/
	        $expected = "rfgd_19756503_hobbyonthegoDB";
	        $actual = $data->getDB();
	        $this->assertEquals($expected, $actual);
	    }

	   	public function testPass() {

	        $data = new DataDB();
	        /*$expected = "";*/
	        $expected = "mtd3pbW";
	        $actual = $data->getPass();
	        $this->assertEquals($expected, $actual);
	    }
	}
?>
