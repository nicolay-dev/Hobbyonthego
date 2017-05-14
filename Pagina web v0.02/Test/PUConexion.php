<?php

namespace Test;
/*require_once 'vendor/Autoload.php';*/
use PHPUnit\Framework\TestCase;
use \DataDB;
#include_once 'DataDB.php';
#require_once 'PHPUnit/Autoload.php';


class PUConexion extends TestCase{
  
    public function testHost() {
    
        $d = new DataDB();
        
    $expect = 'localhost';
        $actual = $d->getHost();
        $this->assertEquals($expected, $actual);
    }
  
}
?>
