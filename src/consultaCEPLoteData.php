<?php

namespace AhorroLibre\STP;

class ConsultaCEPLoteData
{

    public $claveInstitucionBeneficiario;
    public $claveInstitucionOrdenante;
    public $claveRastreo;
    public $cuentaBeneficiario;
    public $fecha;
    public $monto;
    public $tipoOperacion;

    /**
     * @return mixed
     */
    public function getClaveInstitucionBeneficiario()
    {
        return $this->claveInstitucionBeneficiario;
    }

    /**
     * @param mixed $claveInstitucionBeneficiario
     *
     * @return $this
     */
    public function setClaveInstitucionBeneficiario($claveInstitucionBeneficiario
    ) {
        $this->claveInstitucionBeneficiario = $claveInstitucionBeneficiario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClaveInstitucionOrdenante()
    {
        return $this->claveInstitucionOrdenante;
    }

    /**
     * @param mixed $claveInstitucionOrdenante
     *
     * @return $this
     */
    public function setClaveInstitucionOrdenante($claveInstitucionOrdenante)
    {
        $this->claveInstitucionOrdenante = $claveInstitucionOrdenante;
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
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     *
     * @return $this
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMonto()
    {
        return $this->monto;
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

}