<?php
require_once 'PHPUnit/Autoload.php';
/*include_once "Conexion.php";*/
namespace Test;
use PHPUnit\Framework\TestCase;
class conxionTest extends TestCase{
  
    public function testHost() {
    
        $data = new DataDB();
        
    $expect = 'localhost';
        $actual = $data->getHost();
        $this->assertEquals($expected, $actual);
    }
  
}
?>
