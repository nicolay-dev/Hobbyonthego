<?php
namespace Test;
/*require_once 'vendor/Autoload.php';*/
use PHPUnit\Framework\TestCase;


class PUDataDB extends TestCase{
  
    public function testHost() {
    
        $data = new DataDB();
        
        $expected = "localhost";
        $actual = $data->getHost();
        $this->assertEquals($expected, $actual);
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