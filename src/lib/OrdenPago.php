<?php

namespace AhorroLibre\STP\Lib;

use AhorroLibre\STP\STP;

class OrdenPago
{
    // Not null values
    /** @var string $empresa */
    private $empresa;
    /** @var string $conceptoPago */
    private $conceptoPago;
    /** @var string $cuentaBeneficiario */
    private $cuentaBeneficiario;
    /** @var int $referenciaNumerica */
    private $referenciaNumerica;
    /** @var float $monto */
    private $monto;
    /** @var int $tipoCuentaBeneficiario */
    private $tipoCuentaBeneficiario;
    /** @var int $tipoPago */
    private $tipoPago;
    /** @var int $institucionContraparte */
    private $institucionContraparte;
    /** @var string $nombreBeneficiario */
    private $nombreBeneficiario;
    /** @var string $institucionOperante */
    private $institucionOperante;
    /** @var int $iva */
    private $iva;

    // Optional values
    private $fechaOperacion;
    private $claveRastreo;
    private $topologia;
    private $prioridad;
    private $usuario;
    private $tipoOperacion;
    private $causaDevolucion;
    private $claveRastreoDevolucion;
    private $nombreOrdenante;
    private $tipoCuentaOrdenante;
    private $cuentaOrdenante;
    private $rfcCurpOrdenante;
    private $rfcCurpBeneficiario;
    private $nombreBeneficiario2;
    private $tipoCuentaBeneficiario2;
    private $cuentaBeneficiario2;
    private $rfcCurpBeneficiario2;
    private $conceptoPago2;
    private $clavePago;
    private $referenciaCobranza;
    private $medioEntrega;
    private $emailBeneficiario;
    private $claveCatUsuario1;
    private $claveCatUsuario2;
    private $folioOrigen;
    private $estado;
    private $firma;

    /**
     * OrdenPago constructor.
     * @param string $conceptoPago
     * @param string $cuentaBeneficiario
     * @param int $referenciaNumerica
     * @param float $monto
     * @param int $tipoCuentaBeneficiario
     * @param int $institucionContraparte
     * @param string $nombreBeneficiario
     * @param int $iva
     */
    public function __construct(
        string $conceptoPago,
        string $cuentaBeneficiario,
        int $referenciaNumerica,
        float $monto,
        int $tipoCuentaBeneficiario,
        int $institucionContraparte,
        string $nombreBeneficiario,
        int $iva
    ) {
        $this->empresa = \Config::get('stp.company-name');
        $this->conceptoPago = $conceptoPago;
        $this->cuentaBeneficiario = $cuentaBeneficiario;
        $this->referenciaNumerica = $referenciaNumerica;
        $this->monto = $monto;
        $this->tipoCuentaBeneficiario = $tipoCuentaBeneficiario;
        $this->tipoPago = STP::PAGO_DEFAULT;
        $this->institucionContraparte = $institucionContraparte;
        $this->nombreBeneficiario = $nombreBeneficiario;
        $this->institucionOperante = STP::INSTITUCION_STP;
        $this->iva = $iva;
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
     * @return OrdenPago
     */
    public function setEmpresa(string $empresa): OrdenPago
    {
        $this->empresa = $empresa;
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
     * @return OrdenPago
     */
    public function setConceptoPago(string $conceptoPago): OrdenPago
    {
        $this->conceptoPago = $conceptoPago;
        return $this;
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
     * @return OrdenPago
     */
    public function setCuentaBeneficiario(string $cuentaBeneficiario): OrdenPago
    {
        $this->cuentaBeneficiario = $cuentaBeneficiario;
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
     * @return OrdenPago
     */
    public function setReferenciaNumerica(int $referenciaNumerica): OrdenPago
    {
        $this->referenciaNumerica = $referenciaNumerica;
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
     * @return OrdenPago
     */
    public function setMonto(float $monto): OrdenPago
    {
        $this->monto = $monto;
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
     * @return OrdenPago
     */
    public function setTipoCuentaBeneficiario(int $tipoCuentaBeneficiario): OrdenPago
    {
        $this->tipoCuentaBeneficiario = $tipoCuentaBeneficiario;
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
     * @return OrdenPago
     */
    public function setTipoPago(int $tipoPago): OrdenPago
    {
        $this->tipoPago = $tipoPago;
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
     * @return OrdenPago
     */
    public function setInstitucionContraparte(int $institucionContraparte): OrdenPago
    {
        $this->institucionContraparte = $institucionContraparte;
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
     * @return OrdenPago
     */
    public function setNombreBeneficiario(string $nombreBeneficiario): OrdenPago
    {
        $this->nombreBeneficiario = $nombreBeneficiario;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstitucionOperante(): string
    {
        return $this->institucionOperante;
    }

    /**
     * @param string $institucionOperante
     * @return OrdenPago
     */
    public function setInstitucionOperante(string $institucionOperante): OrdenPago
    {
        $this->institucionOperante = $institucionOperante;
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
     * @return OrdenPago
     */
    public function setIva(int $iva): OrdenPago
    {
        $this->iva = $iva;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaOperacion()
    {
        return $this->fechaOperacion;
    }

    /**
     * @param mixed $fechaOperacion
     * @return OrdenPago
     */
    public function setFechaOperacion($fechaOperacion)
    {
        $this->fechaOperacion = $fechaOperacion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClaveRastreo()
    {
        return $this->claveRastreo;
    }

    /**
     * @param mixed $claveRastreo
     * @return OrdenPago
     */
    public function setClaveRastreo($claveRastreo)
    {
        $this->claveRastreo = $claveRastreo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTopologia()
    {
        return $this->topologia;
    }

    /**
     * @param mixed $topologia
     * @return OrdenPago
     */
    public function setTopologia($topologia)
    {
        $this->topologia = $topologia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * @param mixed $prioridad
     * @return OrdenPago
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     * @return OrdenPago
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoOperacion()
    {
        return $this->tipoOperacion;
    }

    /**
     * @param mixed $tipoOperacion
     * @return OrdenPago
     */
    public function setTipoOperacion($tipoOperacion)
    {
        $this->tipoOperacion = $tipoOperacion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCausaDevolucion()
    {
        return $this->causaDevolucion;
    }

    /**
     * @param mixed $causaDevolucion
     * @return OrdenPago
     */
    public function setCausaDevolucion($causaDevolucion)
    {
        $this->causaDevolucion = $causaDevolucion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClaveRastreoDevolucion()
    {
        return $this->claveRastreoDevolucion;
    }

    /**
     * @param mixed $claveRastreoDevolucion
     * @return OrdenPago
     */
    public function setClaveRastreoDevolucion($claveRastreoDevolucion)
    {
        $this->claveRastreoDevolucion = $claveRastreoDevolucion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombreOrdenante()
    {
        return $this->nombreOrdenante;
    }

    /**
     * @param mixed $nombreOrdenante
     * @return OrdenPago
     */
    public function setNombreOrdenante($nombreOrdenante)
    {
        $this->nombreOrdenante = $nombreOrdenante;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoCuentaOrdenante()
    {
        return $this->tipoCuentaOrdenante;
    }

    /**
     * @param mixed $tipoCuentaOrdenante
     * @return OrdenPago
     */
    public function setTipoCuentaOrdenante($tipoCuentaOrdenante)
    {
        $this->tipoCuentaOrdenante = $tipoCuentaOrdenante;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCuentaOrdenante()
    {
        return $this->cuentaOrdenante;
    }

    /**
     * @param mixed $cuentaOrdenante
     * @return OrdenPago
     */
    public function setCuentaOrdenante($cuentaOrdenante)
    {
        $this->cuentaOrdenante = $cuentaOrdenante;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRfcCurpOrdenante()
    {
        return $this->rfcCurpOrdenante;
    }

    /**
     * @param mixed $rfcCurpOrdenante
     * @return OrdenPago
     */
    public function setRfcCurpOrdenante($rfcCurpOrdenante)
    {
        $this->rfcCurpOrdenante = $rfcCurpOrdenante;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRfcCurpBeneficiario()
    {
        return $this->rfcCurpBeneficiario;
    }

    /**
     * @param mixed $rfcCurpBeneficiario
     * @return OrdenPago
     */
    public function setRfcCurpBeneficiario($rfcCurpBeneficiario)
    {
        $this->rfcCurpBeneficiario = $rfcCurpBeneficiario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombreBeneficiario2()
    {
        return $this->nombreBeneficiario2;
    }

    /**
     * @param mixed $nombreBeneficiario2
     * @return OrdenPago
     */
    public function setNombreBeneficiario2($nombreBeneficiario2)
    {
        $this->nombreBeneficiario2 = $nombreBeneficiario2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoCuentaBeneficiario2()
    {
        return $this->tipoCuentaBeneficiario2;
    }

    /**
     * @param mixed $tipoCuentaBeneficiario2
     * @return OrdenPago
     */
    public function setTipoCuentaBeneficiario2($tipoCuentaBeneficiario2)
    {
        $this->tipoCuentaBeneficiario2 = $tipoCuentaBeneficiario2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCuentaBeneficiario2()
    {
        return $this->cuentaBeneficiario2;
    }

    /**
     * @param mixed $cuentaBeneficiario2
     * @return OrdenPago
     */
    public function setCuentaBeneficiario2($cuentaBeneficiario2)
    {
        $this->cuentaBeneficiario2 = $cuentaBeneficiario2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRfcCurpBeneficiario2()
    {
        return $this->rfcCurpBeneficiario2;
    }

    /**
     * @param mixed $rfcCurpBeneficiario2
     * @return OrdenPago
     */
    public function setRfcCurpBeneficiario2($rfcCurpBeneficiario2)
    {
        $this->rfcCurpBeneficiario2 = $rfcCurpBeneficiario2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConceptoPago2()
    {
        return $this->conceptoPago2;
    }

    /**
     * @param mixed $conceptoPago2
     * @return OrdenPago
     */
    public function setConceptoPago2($conceptoPago2)
    {
        $this->conceptoPago2 = $conceptoPago2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClavePago()
    {
        return $this->clavePago;
    }

    /**
     * @param mixed $clavePago
     * @return OrdenPago
     */
    public function setClavePago($clavePago)
    {
        $this->clavePago = $clavePago;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReferenciaCobranza()
    {
        return $this->referenciaCobranza;
    }

    /**
     * @param mixed $referenciaCobranza
     * @return OrdenPago
     */
    public function setReferenciaCobranza($referenciaCobranza)
    {
        $this->referenciaCobranza = $referenciaCobranza;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMedioEntrega()
    {
        return $this->medioEntrega;
    }

    /**
     * @param mixed $medioEntrega
     * @return OrdenPago
     */
    public function setMedioEntrega($medioEntrega)
    {
        $this->medioEntrega = $medioEntrega;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailBeneficiario()
    {
        return $this->emailBeneficiario;
    }

    /**
     * @param mixed $emailBeneficiario
     * @return OrdenPago
     */
    public function setEmailBeneficiario($emailBeneficiario)
    {
        $this->emailBeneficiario = $emailBeneficiario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClaveCatUsuario1()
    {
        return $this->claveCatUsuario1;
    }

    /**
     * @param mixed $claveCatUsuario1
     * @return OrdenPago
     */
    public function setClaveCatUsuario1($claveCatUsuario1)
    {
        $this->claveCatUsuario1 = $claveCatUsuario1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClaveCatUsuario2()
    {
        return $this->claveCatUsuario2;
    }

    /**
     * @param mixed $claveCatUsuario2
     * @return OrdenPago
     */
    public function setClaveCatUsuario2($claveCatUsuario2)
    {
        $this->claveCatUsuario2 = $claveCatUsuario2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFolioOrigen()
    {
        return $this->folioOrigen;
    }

    /**
     * @param mixed $folioOrigen
     * @return OrdenPago
     */
    public function setFolioOrigen($folioOrigen)
    {
        $this->folioOrigen = $folioOrigen;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     * @return OrdenPago
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirma()
    {
        return $this->firma;
    }

    /**
     * @param mixed $firma
     * @return OrdenPago
     */
    public function setFirma($firma)
    {
        $this->firma = $firma;
        return $this;
    }

    public function _getDataToSign()
    {
        $retVal = "||" . $this->institucionContraparte . "|";
        $retVal .= trim($this->empresa) . "|";
        $retVal .= $this->fechaOperacion . "|";
        $retVal .= trim($this->folioOrigen) . "|";
        $retVal .= trim($this->claveRastreo) . "|";
        $retVal .= $this->institucionOperante . "|";

        //el monto tiene que tener como separador de fracciones el caracter "."
        $retVal .= number_format($this->monto, 2, '.', '') . "|";
        $retVal .= $this->tipoPago . "|";
        $retVal .= $this->tipoCuentaOrdenante . "|";
        $retVal .= trim($this->nombreOrdenante) . "|";
        $retVal .= trim($this->cuentaOrdenante) . "|";
        $retVal .= trim($this->rfcCurpOrdenante) . "|";
        $retVal .= $this->tipoCuentaBeneficiario . "|";
        $retVal .= trim($this->nombreBeneficiario) . "|";
        $retVal .= trim($this->cuentaBeneficiario) . "|";
        $retVal .= trim($this->rfcCurpBeneficiario) . "|";
        $retVal .= trim($this->emailBeneficiario) . "|";
        $retVal .= $this->tipoCuentaBeneficiario2 . "|";
        $retVal .= trim($this->nombreBeneficiario2) . "|";
        $retVal .= trim($this->cuentaBeneficiario2) . "|";
        $retVal .= trim($this->rfcCurpBeneficiario2) . "|";
        $retVal .= trim($this->conceptoPago) . "|";
        $retVal .= trim($this->conceptoPago2) . "|";
        $retVal .= trim($this->claveCatUsuario1) . "|";
        $retVal .= trim($this->claveCatUsuario2) . "|";
        $retVal .= trim($this->clavePago) . "|";
        $retVal .= trim($this->referenciaCobranza) . "|";
        $retVal .= $this->referenciaNumerica . "|";
        $retVal .= $this->tipoOperacion . "|";
        $retVal .= trim($this->topologia) . "|";
        $retVal .= trim($this->usuario) . "|";
        $retVal .= $this->medioEntrega . "|";
        $retVal .= $this->prioridad . "|";
        $retVal .= number_format($this->iva, 2, '.', '') . "||";

        return $retVal;
    }
}
