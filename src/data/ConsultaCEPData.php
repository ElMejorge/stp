<?php

namespace AhorroLibre\STP\Data;

class ConsultaCEPData
{
    /** @var string */
    private $conceptoPago;

    /** @var string */
    private $cuentaBeneficiario;

    /** @var string */
    private $cuentaOrdenante;

    /** @var string */
    private $hora;

    /** @var float */
    private $monto;

    /** @var string */
    private $nombreBeneficiario;

    /** @var string */
    private $nombreInstBeneficiaria;

    /** @var string */
    private $nombreInstOrdenante;

    /** @var string */
    private $selloDigital;

    /** @var string */
    private $serieCertificado;

    /** @var string */
    private $tipoOperacion;

    /** @var int */
    private $tipoPago;

    /** @var string */
    private $estadoConsulta;

    /** @var string */
    private $fechaCaptura;

    /** @var string */
    private $fechaOperacion;

    /** @var float */
    private $iva;

    /** @var string */
    private $nombreOrdenante;

    /** @var string */
    private $referenciaNumerica;

    /** @var string */
    private $rfcCurpBeneficiario;

    /** @var string */
    private $rfcCurpOrdenante;

    /**
     * @return string
     */
    public function getConceptoPago(): string
    {
        return $this->conceptoPago;
    }

    /**
     * @param string $conceptoPago
     */
    public function setConceptoPago(string $conceptoPago)
    {
        $this->conceptoPago = $conceptoPago;
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
    public function getCuentaOrdenante(): string
    {
        return $this->cuentaOrdenante;
    }

    /**
     * @param string $cuentaOrdenante
     */
    public function setCuentaOrdenante(string $cuentaOrdenante)
    {
        $this->cuentaOrdenante = $cuentaOrdenante;
    }

    /**
     * @return string
     */
    public function getHora(): string
    {
        return $this->hora;
    }

    /**
     * @param string $hora
     */
    public function setHora(string $hora)
    {
        $this->hora = $hora;
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
    public function getNombreBeneficiario(): string
    {
        return $this->nombreBeneficiario;
    }

    /**
     * @param string $nombreBeneficiario
     */
    public function setNombreBeneficiario(string $nombreBeneficiario)
    {
        $this->nombreBeneficiario = $nombreBeneficiario;
    }

    /**
     * @return string
     */
    public function getNombreInstBeneficiaria(): string
    {
        return $this->nombreInstBeneficiaria;
    }

    /**
     * @param string $nombreInstBeneficiaria
     */
    public function setNombreInstBeneficiaria(string $nombreInstBeneficiaria)
    {
        $this->nombreInstBeneficiaria = $nombreInstBeneficiaria;
    }

    /**
     * @return string
     */
    public function getNombreInstOrdenante(): string
    {
        return $this->nombreInstOrdenante;
    }

    /**
     * @param string $nombreInstOrdenante
     */
    public function setNombreInstOrdenante(string $nombreInstOrdenante)
    {
        $this->nombreInstOrdenante = $nombreInstOrdenante;
    }

    /**
     * @return string
     */
    public function getSelloDigital(): string
    {
        return $this->selloDigital;
    }

    /**
     * @param string $selloDigital
     */
    public function setSelloDigital(string $selloDigital)
    {
        $this->selloDigital = $selloDigital;
    }

    /**
     * @return string
     */
    public function getSerieCertificado(): string
    {
        return $this->serieCertificado;
    }

    /**
     * @param string $serieCertificado
     */
    public function setSerieCertificado(string $serieCertificado)
    {
        $this->serieCertificado = $serieCertificado;
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
     * @return int
     */
    public function getTipoPago(): int
    {
        return $this->tipoPago;
    }

    /**
     * @param int $tipoPago
     */
    public function setTipoPago(int $tipoPago)
    {
        $this->tipoPago = $tipoPago;
    }

    /**
     * @return string
     */
    public function getEstadoConsulta(): string
    {
        return $this->estadoConsulta;
    }

    /**
     * @param string $estadoConsulta
     */
    public function setEstadoConsulta(string $estadoConsulta)
    {
        $this->estadoConsulta = $estadoConsulta;
    }

    /**
     * @return string|null
     */
    public function getFechaCaptura(): ?string
    {
        return $this->fechaCaptura;
    }

    /**
     * @param string $fechaCaptura
     * @return ConsultaCEPData
     */
    public function setFechaCaptura(?string $fechaCaptura): ConsultaCEPData
    {
        $this->fechaCaptura = $fechaCaptura;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFechaOperacion(): ?string
    {
        return $this->fechaOperacion;
    }

    /**
     * @param string $fechaOperacion
     * @return ConsultaCEPData
     */
    public function setFechaOperacion(?string $fechaOperacion): ConsultaCEPData
    {
        $this->fechaOperacion = $fechaOperacion;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getIva(): ?float
    {
        return $this->iva;
    }

    /**
     * @param float $iva
     * @return ConsultaCEPData
     */
    public function setIva(?float $iva): ConsultaCEPData
    {
        $this->iva = $iva;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNombreOrdenante(): ?string
    {
        return $this->nombreOrdenante;
    }

    /**
     * @param string $nombreOrdenante
     * @return ConsultaCEPData
     */
    public function setNombreOrdenante(?string $nombreOrdenante): ConsultaCEPData
    {
        $this->nombreOrdenante = $nombreOrdenante;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferenciaNumerica(): ?string
    {
        return $this->referenciaNumerica;
    }

    /**
     * @param string $referenciaNumerica
     * @return ConsultaCEPData
     */
    public function setReferenciaNumerica(?string $referenciaNumerica): ConsultaCEPData
    {
        $this->referenciaNumerica = $referenciaNumerica;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRfcCurpBeneficiario(): ?string
    {
        return $this->rfcCurpBeneficiario;
    }

    /**
     * @param string $rfcCurpBeneficiario
     * @return ConsultaCEPData
     */
    public function setRfcCurpBeneficiario(string $rfcCurpBeneficiario): ConsultaCEPData
    {
        $this->rfcCurpBeneficiario = $rfcCurpBeneficiario;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRfcCurpOrdenante(): ?string
    {
        return $this->rfcCurpOrdenante;
    }

    /**
     * @param string $rfcCurpOrdenante
     * @return ConsultaCEPData
     */
    public function setRfcCurpOrdenante(?string $rfcCurpOrdenante): ConsultaCEPData
    {
        $this->rfcCurpOrdenante = $rfcCurpOrdenante;
        return $this;
    }
}