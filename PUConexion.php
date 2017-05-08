<?php


namespace Test;
use PHPUnit\Framework\TestCase;
include_once "DataDB.php";
/*require_once 'PHPUnit/Autoload.php';*/


class PUConexion extends TestCase{
  
    public function testHost() {
    
        $d = new DataDB();
        
    $expect = 'localhost';
        $actual = $d->getHost();
        $this->assertEquals($expected, $actual);
    }
  
}
?>
