<?php

namespace AhorroLibre\STP;

use AhorroLibre\STP\Data\OrdenResponse;
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
    const CUENTA_CLABE = 40;
    const CUENTA_TARJETA = 3;

    const PAGO_DEFAULT = 1;

    const INSTITUCION_STP = 90646;

    private $pemFile;

    private $pass;

    public function __construct()
    {
        $this->pemFile = \Config::get('stp.pem-file');
        $this->pass = \Config::get('stp.pem-password');
    }

    /**
     * TODO
     * @param OrdenPago $orden
     * @return OrdenResponse
     */
    public function registraOrden(OrdenPago $orden) : OrdenResponse
    {
        $result = STPService::registraOrden($orden, $this->pemFile, $this->pass);
        return $this->transformResponse($result);
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

    private function transformResponse(array $response): OrdenResponse
    {
        $id = $response['return']['id'];
        $error = null;
        if (isset($response['return']['descriptionError'])) {
            $error = $response['return']['descriptionError'];
        }
        return new OrdenResponse($id, $error);
    }
}