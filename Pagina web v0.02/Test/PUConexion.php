<?php

namespace Test;
/*require_once 'vendor/Autoload.php';*/
use PHPUnit\Framework\TestCase;



#include_once 'DataDB.php';
#require_once 'PHPUnit/Autoload.php';


class PUConexion extends TestCase{
  	protected $ba;

	protected function setUp(){
	    $this->ba = new DataDB;
	}


    public function testHost() {
    
  	$ba = new DataDB;
    $actual = $ba->getHost();
    $this->assertEquals('localhost', $actual);
    }
  
}
?>
