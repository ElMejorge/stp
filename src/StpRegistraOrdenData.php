<?php
/**
 * Class Stp
 *
 * @author    Roberto Flores <roberto@ahorrolibre.com>
 * @copyright Ahorro Libre, Inc.
 * @package   Common\Misc\Psp
 */

namespace AhorroLibre\STP;

use AhorroLibre\STP\StpKeyStoreManager as KeyManager;
use League\Flysystem\Config;

class StpRegistraOrdenData
{

    public $institucionContraparte;
    public $empresa;
    public $fechaOperacion;
    public $folioOrigen;
    public $claveRastreo;
    public $institucionOperante;
    public $monto;
    public $tipoPago;
    public $tipoCuentaOrdenante;
    public $nombreOrdenante;
    public $cuentaOrdenante;
    public $rfcCurpOrdenante;
    public $tipoCuentaBeneficiario;
    public $nombreBeneficiario;
    public $cuentaBeneficiario;
    public $rfcCurpBeneficiario;
    public $emailBeneficiario;
    public $tipoCuentaBeneficiario2;
    public $nombreBeneficiario2;
    public $cuentaBeneficiario2;
    public $rfcCurpBeneficiario2;
    public $conceptoPago;
    public $conceptoPago2;
    public $claveCatUsuario1;
    public $claveCatUsuario2;
    public $clavePago;
    public $referenciaCobranza;
    public $referenciaNumerica;
    public $tipoOperacion;
    public $topologia;
    public $usuario;
    public $medioEntrega;
    public $prioridad;
    public $iva;
    public $firma;

    public function __construct()
    {
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
     *
     * @return $this
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
     *
     * @return $this
     */
    public function setClaveCatUsuario2($claveCatUsuario2)
    {
        $this->claveCatUsuario2 = $claveCatUsuario2;
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
     *
     * @return $this
     */
    public function setClavePago($clavePago)
    {
        $this->clavePago = $clavePago;
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
     *
     * @return $this
     */
    public function setClaveRastreo($claveRastreo)
    {
        $this->claveRastreo = $claveRastreo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConceptoPago()
    {
        return $this->conceptoPago;
    }

    /**
     * @param mixed $conceptoPago
     *
     * @return $this
     */
    public function setConceptoPago($conceptoPago)
    {
        $this->conceptoPago = $conceptoPago;
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
     *
     * @return $this
     */
    public function setConceptoPago2($conceptoPago2)
    {
        $this->conceptoPago2 = $conceptoPago2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCuentaBeneficiario()
    {
        return $this->cuentaBeneficiario;
    }

    /**
     * @param mixed $cuentaBeneficiario
     *
     * @return $this
     */
    public function setCuentaBeneficiario($cuentaBeneficiario)
    {
        $this->cuentaBeneficiario = $cuentaBeneficiario;
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
     *
     * @return $this
     */
    public function setCuentaBeneficiario2($cuentaBeneficiario2)
    {
        $this->cuentaBeneficiario2 = $cuentaBeneficiario2;
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
     *
     * @return $this
     */
    public function setCuentaOrdenante($cuentaOrdenante)
    {
        $this->cuentaOrdenante = $cuentaOrdenante;
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
     *
     * @return $this
     */
    public function setEmailBeneficiario($emailBeneficiario)
    {
        $this->emailBeneficiario = $emailBeneficiario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * @param mixed $empresa
     *
     * @return $this
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
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
     *
     * @return $this
     */
    public function setFechaOperacion($fechaOperacion)
    {
        $this->fechaOperacion = $fechaOperacion;
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
     *
     * @return $this
     */
    public function setFolioOrigen($folioOrigen)
    {
        $this->folioOrigen = $folioOrigen;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitucionContraparte()
    {
        return $this->institucionContraparte;
    }

    /**
     * @param mixed $institucionContraparte
     *
     * @return $this
     */
    public function setInstitucionContraparte($institucionContraparte)
    {
        $this->institucionContraparte = $institucionContraparte;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstitucionOperante()
    {
        return $this->institucionOperante;
    }

    /**
     * @param mixed $institucionOperante
     *
     * @return $this
     */
    public function setInstitucionOperante($institucionOperante)
    {
        $this->institucionOperante = $institucionOperante;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIva()
    {
        return number_format($this->iva, 2);
    }

    /**
     * @param mixed $iva
     *
     * @return $this
     */
    public function setIva($iva)
    {
        $this->iva = $iva;
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
     *
     * @return $this
     */
    public function setMedioEntrega($medioEntrega)
    {
        $this->medioEntrega = $medioEntrega;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMonto()
    {
        return number_format($this->monto, 2);
    }

    /**
     * @param mixed $monto
     *
     * @return $this
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombreBeneficiario()
    {
        return $this->nombreBeneficiario;
    }

    /**
     * @param mixed $nombreBeneficiario
     *
     * @return $this
     */
    public function setNombreBeneficiario($nombreBeneficiario)
    {
        $this->nombreBeneficiario = $nombreBeneficiario;
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
     *
     * @return $this
     */
    public function setNombreBeneficiario2($nombreBeneficiario2)
    {
        $this->nombreBeneficiario2 = $nombreBeneficiario2;
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
     *
     * @return $this
     */
    public function setNombreOrdenante($nombreOrdenante)
    {
        $this->nombreOrdenante = $nombreOrdenante;
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
     *
     * @return $this
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;
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
     *
     * @return $this
     */
    public function setReferenciaCobranza($referenciaCobranza)
    {
        $this->referenciaCobranza = $referenciaCobranza;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReferenciaNumerica()
    {
        return $this->referenciaNumerica;
    }

    /**
     * @param mixed $referenciaNumerica
     *
     * @return $this
     */
    public function setReferenciaNumerica($referenciaNumerica)
    {
        $this->referenciaNumerica = $referenciaNumerica;
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
     *
     * @return $this
     */
    public function setRfcCurpBeneficiario($rfcCurpBeneficiario)
    {
        $this->rfcCurpBeneficiario = $rfcCurpBeneficiario;
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
     *
     * @return $this
     */
    public function setRfcCurpBeneficiario2($rfcCurpBeneficiario2)
    {
        $this->rfcCurpBeneficiario2 = $rfcCurpBeneficiario2;
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
     *
     * @return $this
     */
    public function setRfcCurpOrdenante($rfcCurpOrdenante)
    {
        $this->rfcCurpOrdenante = $rfcCurpOrdenante;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoCuentaBeneficiario()
    {
        return $this->tipoCuentaBeneficiario;
    }

    /**
     * @param mixed $tipoCuentaBeneficiario
     *
     * @return $this
     */
    public function setTipoCuentaBeneficiario($tipoCuentaBeneficiario)
    {
        $this->tipoCuentaBeneficiario = $tipoCuentaBeneficiario;
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
     *
     * @return $this
     */
    public function setTipoCuentaBeneficiario2($tipoCuentaBeneficiario2)
    {
        $this->tipoCuentaBeneficiario2 = $tipoCuentaBeneficiario2;
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
     *
     * @return $this
     */
    public function setTipoCuentaOrdenante($tipoCuentaOrdenante)
    {
        $this->tipoCuentaOrdenante = $tipoCuentaOrdenante;
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
     *
     * @return $this
     */
    public function setTipoOperacion($tipoOperacion)
    {
        $this->tipoOperacion = $tipoOperacion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * @param mixed $tipoPago
     *
     * @return $this
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;
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
     *
     * @return $this
     */
    public function setTopologia($topologia)
    {
        $this->topologia = $topologia;
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
     *
     * @return $this
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    public function generateString(){

        $chain = '||';

        foreach($this as $key=>$value) {
            if($key=='firma') continue;
            $getter = 'get'.ucfirst($key);
            $chain.= $this->$getter().'|';
        }

        $chain.= '|';

        return $chain;

    }

    public function getSha256String(){
        return hash( 'sha256', $this->generateString());
    }

    public function sign(){

        $dataToSign = $this->generateString();

        $signature = KeyManager::signInfo('/home/vagrant/code/packages/stp/src/prueba-key.pem',$dataToSign,'12345678');

        return $this->setFirma($signature);

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
     *
     * @return $this
     */
    public function setFirma($firma)
    {
        $this->firma = $firma;
        return $this;
    }



}