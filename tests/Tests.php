<?php

use AhorroLibre\STP\STP;
use AhorroLibre\STP\Data\RegistraOrdenData;
use AhorroLibre\STP\Data\OrdenResponse;
use AhorroLibre\STP\Data\ConsultaCEPData;
use AhorroLibre\STP\Data\ConsultaSaldoCuentaData;
use AhorroLibre\STP\Data\ConsultaSaldoCuentaResponse;
use AhorroLibre\STP\Lib\OrdenPago;

class Tests extends TestCase
{
    /**
     * @test
     * @covers STP::registraOrden()
     */
    public function tests_it_registers_order()
    {
        $stp = new STP();

        $response = $stp->registraOrden(new OrdenPago(
            'Pago de prueba',
            '110180077000000018',
            2,
            1000.00,
            STP::CUENTA_CLABE,
            40131,
            'Juan',
            16
        ));

        $this->assertInstanceOf(OrdenResponse::class, $response);
        $this->assertNotEquals(0, $response->getId());
        $this->assertFalse($response->isError());
        $this->assertNull($response->getDescriptionError());
    }

    /**
     * @test
     * @covers STP::registraOrden()
     */
    public function tests_it_sends_payment()
    {
        STP::registraOrden(new RegistraOrdenData());
        $this->assertTrue(true);
    }


    /**
     * @test
     * @covers STP::consultaCEPLote()
     */
    public function tests_it_queries_cep_lot()
    {
        $stp = new STP();

        $response = $stp->consultaCEPLote(new ConsultaCEPData());

        $this->assertInstanceOf(ConsultaCEPData::class, $response);
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
}