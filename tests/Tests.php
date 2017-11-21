<?php

use AhorroLibre\STP\STP;
use AhorroLibre\STP\Data\RegistraOrdenData;
use AhorroLibre\STP\Data\RegistraOrdenResponse;
use AhorroLibre\STP\Data\ConsultaCEPData;
use AhorroLibre\STP\Data\ConsultaCEPResponse;
use AhorroLibre\STP\Data\ConsultaSaldoCuentaData;
use AhorroLibre\STP\Data\ConsultaSaldoCuentaResponse;

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

    /**
     * @test
     * @covers STP::consultaCEPLote()
     */
    public function tests_it_queries_cep_lot()
    {
        $stp = new STP();

        $response = $stp->consultaCEPLote(new ConsultaCEPData());

        $this->assertInstanceOf(ConsultaCEPResponse::class, $response);
    }

    /**
     * @test
     * @covers STP::consultaSaldoCuenta()
     */
    public function tests_it_queries_account_balance()
    {
        $stp = new STP();

        $response = $stp->consultaSaldoCuenta(new ConsultaSaldoCuentaData());

        $this->assertInstanceOf(ConsultaSaldoCuentaResponse::class, $response);
    }

    public function tests_it_fucking_works(){
        $stp = new STP();
        $this->assertTrue(true);
    }
}