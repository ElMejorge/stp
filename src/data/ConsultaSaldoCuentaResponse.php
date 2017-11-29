<?php

namespace AhorroLibre\STP\Data;

class ConsultaSaldoCuentaResponse
{
    /** @var string  */
    private $cargosPendientes;

    /** @var string */
    private $saldo;

    /**
     * @return string
     */
    public function getCargosPendientes(): string
    {
        return $this->cargosPendientes;
    }

    /**
     * @param string $cargosPendientes
     */
    public function setCargosPendientes(string $cargosPendientes)
    {
        $this->cargosPendientes = $cargosPendientes;
    }

    /**
     * @return string
     */
    public function getSaldo(): string
    {
        return $this->saldo;
    }

    /**
     * @param string $saldo
     */
    public function setSaldo(string $saldo)
    {
        $this->saldo = $saldo;
    }
}