<?php

namespace AhorroLibre\STP;

use AhorroLibre\STP\Data\RegistraOrdenResponse;
use AhorroLibre\STP\Data\RegistraOrdenData;
use AhorroLibre\STP\Data\ConsultaCEPData;
use AhorroLibre\STP\Data\ConsultaCEPResponse;
use AhorroLibre\STP\Data\ConsultaSaldoCuentaResponse;
use AhorroLibre\STP\Data\ConsultaSaldoCuentaData;

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
    public function registraOrden(RegistraOrdenData $data) : RegistraOrdenResponse
    {
        return new RegistraOrdenResponse();
    }

    /**
     * TODO
     * @param ConsultaCEPData $data
     * @return ConsultaCEPResponse
     */
    public function consultaCEPLote(ConsultaCEPData $data) : ConsultaCEPResponse
    {
        return new ConsultaCEPResponse();
    }

    /**
     * TODO
     * @param ConsultaSaldoCuentaData $data
     * @return ConsultaSaldoCuentaResponse
     */
    public function consultaSaldoCuenta(ConsultaSaldoCuentaData $data) : ConsultaSaldoCuentaResponse
    {
        return new ConsultaSaldoCuentaResponse();
    }
}