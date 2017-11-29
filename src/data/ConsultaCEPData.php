<?php

namespace AhorroLibre\STP\Data;

class ConsultaCEPData
{
    /** @var string */
    private $claveInstitucionBeneficiario;

    /** @var string */
    private $claveInstitucionOrdenante;

    /** @var string */
    private $cuentaBeneficiario;

    /** @var string */
    private $fecha;

    /** @var float */
    private $monto;

    /** @var string */
    private $tipoOperacion;

    /** @var string */
    private $claveRastreo;

    /**
     * @return string
     */
    public function getClaveInstitucionBeneficiario(): string
    {
        return $this->claveInstitucionBeneficiario;
    }

    /**
     * @param string $claveInstitucionBeneficiario
     */
    public function setClaveInstitucionBeneficiario(string $claveInstitucionBeneficiario)
    {
        $this->claveInstitucionBeneficiario = $claveInstitucionBeneficiario;
    }

    /**
     * @return string
     */
    public function getClaveInstitucionOrdenante(): string
    {
        return $this->claveInstitucionOrdenante;
    }

    /**
     * @param string $claveInstitucionOrdenante
     */
    public function setClaveInstitucionOrdenante(string $claveInstitucionOrdenante)
    {
        $this->claveInstitucionOrdenante = $claveInstitucionOrdenante;
    }

    /**
     * @return string
     */
    public function getCuentaBeneficiario(): string
    {
        return $this->cuentaBeneficiario;
    }

    /**
     * @param string $cuentaBeneficiario
     */
    public function setCuentaBeneficiario(string $cuentaBeneficiario)
    {
        $this->cuentaBeneficiario = $cuentaBeneficiario;
    }

    /**
     * @return string
     */
    public function getFecha(): string
    {
        return $this->fecha;
    }

    /**
     * @param string $fecha
     */
    public function setFecha(string $fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return float
     */
    public function getMonto(): float
    {
        return $this->monto;
    }

    /**
     * @param float $monto
     */
    public function setMonto(float $monto)
    {
        $this->monto = $monto;
    }

    /**
     * @return string
     */
    public function getTipoOperacion(): string
    {
        return $this->tipoOperacion;
    }

    /**
     * @param string $tipoOperacion
     */
    public function setTipoOperacion(string $tipoOperacion)
    {
        $this->tipoOperacion = $tipoOperacion;
    }

    /**
     * @return string
     */
    public function getClaveRastreo(): string
    {
        return $this->claveRastreo;
    }

    /**
     * @param string $claveRastreo
     * @return ConsultaCEPData
     */
    public function setClaveRastreo(string $claveRastreo): ConsultaCEPData
    {
        $this->claveRastreo = $claveRastreo;
        return $this;
    }

}