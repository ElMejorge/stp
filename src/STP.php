<?php

namespace AhorroLibre\STP;

use AhorroLibre\STP\Data\RegistraOrdenResponse;
use AhorroLibre\STP\Data\RegistraOrdenData;
use AhorroLibre\STP\Data\ConsultaCEPResponse;
use AhorroLibre\STP\Data\ConsultaCEPData;
use AhorroLibre\STP\Data\ConsultaSaldoCuentaResponse;
use AhorroLibre\STP\Data\ConsultaSaldoCuentaData;
use AhorroLibre\STP\Lib\OrdenPago;
use AhorroLibre\STP\Lib\STPService;

/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 11/21/17
 * Time: 9:50 AM
 */
class STP
{
    /**
     * TODO
     * @param RegistraOrdenData $data
     * @return RegistraOrdenResponse
     */
    public static function registraOrden(RegistraOrdenData $data) : RegistraOrdenResponse
    {
        $data = new OrdenPago();

        $data->set_empresa(\Config::get('stp.company-name'));
//        $data->set_claveRastreo("IACH0OEE80003");
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

        $pemFile = \Config::get('stp.pem-file');
        $passphrase = \Config::get('stp.pem-password');

        STPService::registraOrden($data, $pemFile, $passphrase);

        return new RegistraOrdenResponse();
    }

    /**
     * TODO
     * @param ConsultaCEPData $data
     * @return ConsultaCEPResponse
     */
    public static function consultaCEPLote(ConsultaCEPData $data) : ConsultaCEPResponse
    {
        return new ConsultaCEPResponse();
    }

    /**
     * TODO
     * @param ConsultaSaldoCuentaData $data
     * @return ConsultaSaldoCuentaResponse
     */
    public static function consultaSaldoCuenta(ConsultaSaldoCuentaData $data) : ConsultaSaldoCuentaResponse
    {
        return new ConsultaSaldoCuentaResponse();
    }
}