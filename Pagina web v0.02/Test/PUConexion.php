<?php

namespace Test;
use PHPUnit\Framework\TestCase;
/*require_once 'PHPUnit/Autoload.php';*/
include_once "DataDB.php";

class conexionTest extends TestCase{
  
    public function testHost() {
    
        $data = new DataDB();
        
    $expect = 'localhost';
        $actual = $data->getHost();
        $this->assertEquals($expected, $actual);
    }
  
}
?>
