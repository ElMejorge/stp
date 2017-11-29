<?php

namespace AhorroLibre\STP\Data;

class ConsultaSaldoCuentaData
{
    /** @var string */
    private $cuenta;

    /** @var string */
    private $firma;

    /**
     * @return string
     */
    public function getCuenta(): string
    {
        return $this->cuenta;
    }

    /**
     * @param string $cuenta
     * @return ConsultaSaldoCuentaData
     */
    public function setCuenta(string $cuenta): ConsultaSaldoCuentaData
    {
        $this->cuenta = $cuenta;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirma(): string
    {
        return $this->firma;
    }

    /**
     * @param string $firma
     * @return ConsultaSaldoCuentaData
     */
    public function setFirma(string $firma): ConsultaSaldoCuentaData
    {
        $this->firma = $firma;
        return $this;
    }


}