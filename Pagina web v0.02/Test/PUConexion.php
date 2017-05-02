<?php

include_once "Conexion.php";


class conxionTest extends PHPUnit_Framework_TestCase{
	
    public function testHost() {
		
        $data = new DataDB();
        
		$expect = 'localhost';
        $actual = $data->getHost();
        $this->assertEquals($expected, $actual);
    }
	
}
?>