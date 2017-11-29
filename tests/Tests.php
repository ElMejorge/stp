<?php

use AhorroLibre\STP\STP;
use AhorroLibre\STP\Data\RegistraOrdenData;
use AhorroLibre\STP\Data\RegistraOrdenResponse;
use AhorroLibre\STP\Data\ConsultaCEPData;
use AhorroLibre\STP\Data\ConsultaSaldoCuentaData;
use AhorroLibre\STP\Data\ConsultaSaldoCuentaResponse;
use AhorroLibre\STP\Lib\OrdenPago;
use AhorroLibre\STP\Lib\STPService;

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
     * @covers STP::registraOrden()
     */
    public function tests_it_sends_payment()
    {
        $data = new OrdenPago();

        $data->set_empresa("AHORRO_LIBRE");
        $data->set_claveRastreo("IACH0OEE80003");
        $data->set_conceptoPago("SWI_SPEI_Payment");
        $data->set_cuentaBeneficiario("110180077000000018");
        $data->set_cuentaOrdenante("846180000050000011");
        $data->set_referenciaNumerica(2);
        $data->set_monto(1000.82);
        $data->set_tipoCuentaBeneficiario(40);
        $data->set_tipoPago(1);
        $data->set_institucionContraparte(40131);
        $data->set_nombreBeneficiario("alfredo");
        $data->set_institucionOperante(90646);
        $data->set_iva(16);
        $data->set_nombreOrdenante("Juan Lopez");
        $data->set_rfcCurpBeneficiario("RFCBEN");
        $data->set_rfcCurpOrdenante("RFCORD");
        $data->set_tipoCuentaOrdenante(3);

        $pemFile = "/Users/macbook/Downloads/STP/Examples/PHP/prueba-key.pem";
        $passphrase = "12345678";

        //$pemFile = getcwd() . '/prueba-key.pem';

        STPService::registraOrden($data, $pemFile, $passphrase);
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