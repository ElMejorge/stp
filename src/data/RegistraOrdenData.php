<?php

namespace AhorroLibre\STP\Data;

class RegistraOrdenData
{
    /** @var string */
    private $cuentaBeneficiario;

    /** @var int */
    private $institucionOperante;

    /** @var int */
    private $institucionContraparte;

    /** @var float */
    private $monto;

    /** @var int */
    private $referenciaNumerica;

    /** @var int */
    private $tipoPago;

    /** @var int $iva */
    private $iva;

    /** @var string */
    private $nombreBeneficiario;

    /** @var int */
    private $tipoCuentaBeneficiario;

    /** @var string */
    private $conceptoPago;

    /** @var string */
    private $empresa;

    /** @var string|null */
    private $cuentaOrdenante;

    /** @var string|null */
    private $emailBeneficiario;

    /** @var string|null */
    private $fechaOperacion;

    /** @var string|null */
    private $folioOrigen;

    /** @var string|null */
    private $nombreOrdenante;

    /** @var string|null */
    private $rfcCurpBeneficiario;

    /** @var string|null */
    private $rfcCurpOrdenante;

    /** @var int|null */
    private $tipoCuentaOrdenante;

    /** @var string|null */
    private $claveRastreo;

    /** @var string|null */
    private $firma;

    /**
     * OrdenPago constructor.
     * @param string $empresa
     * @param string $conceptoPago
     * @param string $cuentaBeneficiario
     * @param int $referenciaNumerica
     * @param float $monto
     * @param int $tipoCuentaBeneficiario
     * @param int $tipoPago
     * @param int $institucionContraparte
     * @param string $nombreBeneficiario
     * @param string $institucionOperante
     * @param int $iva
     */
    public function __construct(
        string $empresa,
        string $conceptoPago,
        string $cuentaBeneficiario,
        int $referenciaNumerica,
        float $monto,
        int $tipoCuentaBeneficiario,
        int $tipoPago,
        int $institucionContraparte,
        string $nombreBeneficiario,
        string $institucionOperante,
        int $iva
    ) {
        $this->empresa = $empresa;
        $this->conceptoPago = $conceptoPago;
        $this->cuentaBeneficiario = $cuentaBeneficiario;
        $this->referenciaNumerica = $referenciaNumerica;
        $this->monto = $monto;
        $this->tipoCuentaBeneficiario = $tipoCuentaBeneficiario;
        $this->tipoPago = $tipoPago;
        $this->institucionContraparte = $institucionContraparte;
        $this->nombreBeneficiario = $nombreBeneficiario;
        $this->institucionOperante = $institucionOperante;
        $this->iva = $iva;
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
     * @return RegistraOrdenData
     */
    public function setCuentaBeneficiario(string $cuentaBeneficiario): RegistraOrdenData
    {
        $this->cuentaBeneficiario = $cuentaBeneficiario;
        return $this;
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
     * @return RegistraOrdenData
     */
    public function setNombreBeneficiario(string $nombreBeneficiario): RegistraOrdenData
    {
        $this->nombreBeneficiario = $nombreBeneficiario;
        return $this;
    }

    /**
     * @return string
     */
    public function getRfcCurpBeneficiario(): ?string
    {
        return $this->rfcCurpBeneficiario;
    }

    /**
     * @param string $rfcCurpBeneficiario
     * @return RegistraOrdenData
     */
    public function setRfcCurpBeneficiario(?string $rfcCurpBeneficiario): RegistraOrdenData
    {
        $this->rfcCurpBeneficiario = $rfcCurpBeneficiario;
        return $this;
    }

    /**
     * @return int
     */
    public function getTipoCuentaBeneficiario(): int
    {
        return $this->tipoCuentaBeneficiario;
    }

    /**
     * @param int $tipoCuentaBeneficiario
     * @return RegistraOrdenData
     */
    public function setTipoCuentaBeneficiario(int $tipoCuentaBeneficiario): RegistraOrdenData
    {
        $this->tipoCuentaBeneficiario = $tipoCuentaBeneficiario;
        return $this;
    }

    /**
     * @return string
     */
    public function getClaveRastreo(): ?string
    {
        return $this->claveRastreo;
    }

    /**
     * @param string $claveRastreo
     * @return RegistraOrdenData
     */
    public function setClaveRastreo(?string $claveRastreo): RegistraOrdenData
    {
        $this->claveRastreo = $claveRastreo;
        return $this;
    }

    /**
     * @return string
     */
    public function getConceptoPago(): string
    {
        return $this->conceptoPago;
    }

    /**
     * @param string $conceptoPago
     * @return RegistraOrdenData
     */
    public function setConceptoPago(string $conceptoPago): RegistraOrdenData
    {
        $this->conceptoPago = $conceptoPago;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmpresa(): string
    {
        return $this->empresa;
    }

    /**
     * @param string $empresa
     * @return RegistraOrdenData
     */
    public function setEmpresa(string $empresa): RegistraOrdenData
    {
        $this->empresa = $empresa;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirma(): ?string
    {
        return $this->firma;
    }

    /**
     * @param string $firma
     * @return RegistraOrdenData
     */
    public function setFirma(?string $firma): RegistraOrdenData
    {
        $this->firma = $firma;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstitucionOperante(): int
    {
        return $this->institucionOperante;
    }

    /**
     * @param int $institucionOperante
     * @return RegistraOrdenData
     */
    public function setInstitucionOperante(int $institucionOperante): RegistraOrdenData
    {
        $this->institucionOperante = $institucionOperante;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstitucionContraparte(): int
    {
        return $this->institucionContraparte;
    }

    /**
     * @param int $institucionContraparte
     * @return RegistraOrdenData
     */
    public function setInstitucionContraparte(int $institucionContraparte): RegistraOrdenData
    {
        $this->institucionContraparte = $institucionContraparte;
        return $this;
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
     * @return RegistraOrdenData
     */
    public function setMonto(float $monto): RegistraOrdenData
    {
        $this->monto = $monto;
        return $this;
    }

    /**
     * @return int
     */
    public function getReferenciaNumerica(): int
    {
        return $this->referenciaNumerica;
    }

    /**
     * @param int $referenciaNumerica
     * @return RegistraOrdenData
     */
    public function setReferenciaNumerica(int $referenciaNumerica): RegistraOrdenData
    {
        $this->referenciaNumerica = $referenciaNumerica;
        return $this;
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
     * @return RegistraOrdenData
     */
    public function setTipoPago(int $tipoPago): RegistraOrdenData
    {
        $this->tipoPago = $tipoPago;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCuentaOrdenante(): ?string
    {
        return $this->cuentaOrdenante;
    }

    /**
     * @param string $cuentaOrdenante
     * @return RegistraOrdenData
     */
    public function setCuentaOrdenante(?string $cuentaOrdenante): RegistraOrdenData
    {
        $this->cuentaOrdenante = $cuentaOrdenante;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmailBeneficiario(): ?string
    {
        return $this->emailBeneficiario;
    }

    /**
     * @param string $emailBeneficiario
     * @return RegistraOrdenData
     */
    public function setEmailBeneficiario(?string $emailBeneficiario): RegistraOrdenData
    {
        $this->emailBeneficiario = $emailBeneficiario;
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
     * @return RegistraOrdenData
     */
    public function setFechaOperacion(?string $fechaOperacion): RegistraOrdenData
    {
        $this->fechaOperacion = $fechaOperacion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFolioOrigen(): ?string
    {
        return $this->folioOrigen;
    }

    /**
     * @param string $folioOrigen
     * @return RegistraOrdenData
     */
    public function setFolioOrigen(?string $folioOrigen): RegistraOrdenData
    {
        $this->folioOrigen = $folioOrigen;
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
     * @return RegistraOrdenData
     */
    public function setNombreOrdenante(?string $nombreOrdenante): RegistraOrdenData
    {
        $this->nombreOrdenante = $nombreOrdenante;
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
     * @return RegistraOrdenData
     */
    public function setRfcCurpOrdenante(?string $rfcCurpOrdenante): RegistraOrdenData
    {
        $this->rfcCurpOrdenante = $rfcCurpOrdenante;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTipoCuentaOrdenante(): ?int
    {
        return $this->tipoCuentaOrdenante;
    }

    /**
     * @param int $tipoCuentaOrdenante
     * @return RegistraOrdenData
     */
    public function setTipoCuentaOrdenante(?int $tipoCuentaOrdenante): RegistraOrdenData
    {
        $this->tipoCuentaOrdenante = $tipoCuentaOrdenante;
        return $this;
    }

    /**
     * @return int
     */
    public function getIva(): int
    {
        return $this->iva;
    }

    /**
     * @param int $iva
     * @return RegistraOrdenData
     */
    public function setIva(int $iva): RegistraOrdenData
    {
        $this->iva = $iva;
        return $this;
    }
}