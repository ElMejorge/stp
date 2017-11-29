<?php

namespace AhorroLibre\STP\Lib;

class OrdenPago
{
    private $fechaOperacion;
    private $institucionOperante;
    private $institucionContraparte;
    private $claveRastreo;
    private $monto;
    private $tipoPago;
    private $topologia;
    private $prioridad;
    private $usuario;
    private $empresa;
    private $tipoOperacion;
    private $causaDevolucion;
    private $claveRastreoDevolucion;
    private $nombreOrdenante;
    private $tipoCuentaOrdenante;
    private $cuentaOrdenante;
    private $rfcCurpOrdenante;
    private $nombreBeneficiario;
    private $tipoCuentaBeneficiario;
    private $cuentaBeneficiario;
    private $rfcCurpBeneficiario;
    private $nombreBeneficiario2;
    private $tipoCuentaBeneficiario2;
    private $cuentaBeneficiario2;
    private $rfcCurpBeneficiario2;
    private $conceptoPago;
    private $conceptoPago2;
    private $referenciaNumerica;
    private $clavePago;
    private $referenciaCobranza;
    private $iva;
    private $medioEntrega;
    private $emailBeneficiario;
    private $claveCatUsuario1;
    private $claveCatUsuario2;
    private $folioOrigen;
    private $estado;
    private $firma;

    public function set_fechaOperacion($fechaOperacion)
    {
        $this->fechaOperacion = $fechaOperacion;
    }

    public function get_fechaOperacion()
    {
        return $this->fechaOperacion;
    }

    public function set_institucionOperante($institucionOperante)
    {
        $this->institucionOperante = $institucionOperante;
    }

    public function get_institucionOperante()
    {
        return $this->institucionOperante;
    }

    public function set_institucionContraparte($institucionContraparte)
    {
        $this->institucionContraparte = $institucionContraparte;
    }

    public function get_institucionContraparte()
    {
        return $this->institucionContraparte;
    }

    public function set_claveRastreo($claveRastreo)
    {
        $this->claveRastreo = $claveRastreo;
    }

    public function get_claveRastreo()
    {
        return $this->claveRastreo;
    }

    public function set_monto($monto)
    {
        $this->monto = $monto;
    }

    public function get_monto()
    {
        return $this->monto;
    }

    public function set_tipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;
    }

    public function get_tipoPago()
    {
        return $this->tipoPago;
    }

    public function set_topologia($topologia)
    {
        $this->topologia = $topologia;
    }

    public function get_topologia()
    {
        return $this->topologia;
    }

    public function set_prioridad($prioridad)
    {
        $this->prioridad = $prioridad;
    }

    public function get_prioridad()
    {
        return $this->prioridad;
    }

    public function set_usuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function get_usuario()
    {
        return $this->usuario;
    }

    public function set_empresa($empresa)
    {
        $this->empresa = $empresa;
    }

    public function get_empresa()
    {
        return $this->empresa;
    }

    public function set_tipoOperacion($tipoOperacion)
    {
        $this->tipoOperacion = $tipoOperacion;
    }

    public function get_tipoOperacion()
    {
        return $this->tipoOperacion;
    }

    public function set_causaDevolucion($causaDevolucion)
    {
        $this->causaDevolucion = $causaDevolucion;
    }

    public function get_causaDevolucion()
    {
        return $this->causaDevolucion;
    }

    public function set_claveRastreoDevolucion($claveRastreoDevolucion)
    {
        $this->claveRastreoDevolucion = $claveRastreoDevolucion;
    }

    public function get_claveRastreoDevolucion()
    {
        return $this->claveRastreoDevolucion;
    }

    public function set_nombreOrdenante($nombreOrdenante)
    {
        $this->nombreOrdenante = $nombreOrdenante;
    }

    public function get_nombreOrdenante()
    {
        return $this->nombreOrdenante;
    }

    public function set_tipoCuentaOrdenante($tipoCuentaOrdenante)
    {
        $this->tipoCuentaOrdenante = $tipoCuentaOrdenante;
    }

    public function get_tipoCuentaOrdenante()
    {
        return $this->tipoCuentaOrdenante;
    }

    public function set_cuentaOrdenante($cuentaOrdenante)
    {
        $this->cuentaOrdenante = $cuentaOrdenante;
    }

    public function get_cuentaOrdenante()
    {
        return $this->cuentaOrdenante;
    }

    public function set_rfcCurpOrdenante($rfcCurpOrdenante)
    {
        $this->rfcCurpOrdenante = $rfcCurpOrdenante;
    }

    public function get_rfcCurpOrdenante()
    {
        return $this->rfcCurpOrdenante;
    }

    public function set_nombreBeneficiario($nombreBeneficiario)
    {
        $this->nombreBeneficiario = $nombreBeneficiario;
    }

    public function get_nombreBeneficiario()
    {
        return $this->nombreBeneficiario;
    }

    public function set_tipoCuentaBeneficiario($tipoCuentaBeneficiario)
    {
        $this->tipoCuentaBeneficiario = $tipoCuentaBeneficiario;
    }

    public function get_tipoCuentaBeneficiario()
    {
        return $this->tipoCuentaBeneficiario;
    }

    public function set_cuentaBeneficiario($cuentaBeneficiario)
    {
        $this->cuentaBeneficiario = $cuentaBeneficiario;
    }

    public function get_cuentaBeneficiario()
    {
        return $this->cuentaBeneficiario;
    }

    public function set_rfcCurpBeneficiario($rfcCurpBeneficiario)
    {
        $this->rfcCurpBeneficiario = $rfcCurpBeneficiario;
    }

    public function get_rfcCurpBeneficiario()
    {
        return $this->rfcCurpBeneficiario;
    }

    public function set_nombreBeneficiario2($nombreBeneficiario2)
    {
        $this->nombreBeneficiario2 = $nombreBeneficiario2;
    }

    public function get_nombreBeneficiario2()
    {
        return $this->nombreBeneficiario2;
    }

    public function set_tipoCuentaBeneficiario2($tipoCuentaBeneficiario2)
    {
        $this->tipoCuentaBeneficiario2 = $tipoCuentaBeneficiario2;
    }

    public function get_tipoCuentaBeneficiario2()
    {
        return $this->tipoCuentaBeneficiario2;
    }

    public function set_cuentaBeneficiario2($cuentaBeneficiario2)
    {
        $this->cuentaBeneficiario2 = $cuentaBeneficiario2;
    }

    public function get_cuentaBeneficiario2()
    {
        return $this->cuentaBeneficiario2;
    }

    public function set_rfcCurpBeneficiario2($rfcCurpBeneficiario2)
    {
        $this->rfcCurpBeneficiario2 = $rfcCurpBeneficiario2;
    }

    public function get_rfcCurpBeneficiario2()
    {
        return $this->rfcCurpBeneficiario2;
    }

    public function set_conceptoPago($conceptoPago)
    {
        $this->conceptoPago = $conceptoPago;
    }

    public function get_conceptoPago()
    {
        return $this->conceptoPago;
    }

    public function set_conceptoPago2($conceptoPago2)
    {
        $this->conceptoPago2 = $conceptoPago2;
    }

    public function get_conceptoPago2()
    {
        return $this->conceptoPago2;
    }

    public function set_referenciaNumerica($referenciaNumerica)
    {
        $this->referenciaNumerica = $referenciaNumerica;
    }

    public function get_referenciaNumerica()
    {
        return $this->referenciaNumerica;
    }

    public function set_clavePago($clavePago)
    {
        $this->clavePago = $clavePago;
    }

    public function get_clavePago()
    {
        return $this->clavePago;
    }

    public function set_referenciaCobranza($referenciaCobranza)
    {
        $this->referenciaCobranza = $referenciaCobranza;
    }

    public function get_referenciaCobranza()
    {
        return $this->referenciaCobranza;
    }

    public function set_iva($iva)
    {
        $this->iva = $iva;
    }

    public function get_iva()
    {
        return $this->iva;
    }

    public function set_medioEntrega($medioEntrega)
    {
        $this->medioEntrega = $medioEntrega;
    }

    public function get_medioEntrega()
    {
        return $this->medioEntrega;
    }

    public function set_emailBeneficiario($emailBeneficiario)
    {
        $this->emailBeneficiario = $emailBeneficiario;
    }

    public function get_emailBeneficiario()
    {
        return $this->emailBeneficiario;
    }

    public function set_claveCatUsuario1($claveCatUsuario1)
    {
        $this->claveCatUsuario1 = $claveCatUsuario1;
    }

    public function get_claveCatUsuario1()
    {
        return $this->claveCatUsuario1;
    }

    public function set_claveCatUsuario2($claveCatUsuario2)
    {
        $this->claveCatUsuario2 = $claveCatUsuario2;
    }

    public function get_claveCatUsuario2()
    {
        return $this->claveCatUsuario2;
    }

    public function set_folioOrigen($folioOrigen)
    {
        $this->folioOrigen = $folioOrigen;
    }

    public function get_folioOrigen()
    {
        return $this->folioOrigen;
    }

    public function set_estado($estado)
    {
        $this->estado = $estado;
    }

    public function get_estado()
    {
        return $this->estado;
    }

    public function set_firma($firma)
    {
        $this->firma = $firma;
    }

    public function get_firma()
    {
        return $this->firma;
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
