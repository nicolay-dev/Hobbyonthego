<?php

namespace Test;
/*require_once 'vendor/Autoload.php';*/
use PHPUnit\Framework\TestCase;
use Test\DataDB;


#include_once 'DataDB.php';
#require_once 'PHPUnit/Autoload.php';


class PUConexion extends TestCase{
  
    public function testHost() {
    
      /* $d = new DataDB();*/
        
    	$expect = 'localhost';
        $actual = DataDB::getHost();
        $this->assertEquals($expected, $actual);
    }
  
}
?>
