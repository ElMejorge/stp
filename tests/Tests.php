<?php 

use AhorroLibre\STP\STP;
use AhorroLibre\STP\Data\RegistraOrdenData;
use AhorroLibre\STP\Data\RegistraOrdenResponse;

class Tests extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers STP::registraOrden()
     */
    public function tests_it_registers_order()
    {
        $stp = new STP();

        $response = $stp->registraOrden(new RegistraOrdenData());

        $this->assertInstanceOf(RegistraOrdenResponse::class, $response);
    }

    public function tests_it_fucking_works(){
        $stp = new STP();
        $this->assertTrue(true);
    }
}