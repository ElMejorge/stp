<?php
/**
 * Class Stp
 *
 * @author    Roberto Flores <roberto@ahorrolibre.com>
 * @copyright Ahorro Libre, Inc.
 * @package   Common\Misc\Psp
 */

namespace AhorroLibre\STP;

class StpOriginal
{

    protected $client;


    function __construct()
    {
        $this->client = new \SoapClient("http://demo.stpmex.com:7004/speidemo/webservices/SpeiServices?wsdl", array('trace' => 1));
    }

    public function returnTrue(){
        return true;
    }

    public function sendPayment()
    {

        $data = new StpRegistraOrdenData();

        $data
            ->setClaveRastreo('2324234')
            ->setInstitucionContraparte(40014)
            ->setMonto(300)
            ->setEmpresa('AHORRO_LIBRE')
            ->setNombreBeneficiario('alfredo')
            ->setTipoCuentaBeneficiario(3)
            ->setTipoPago(1)
            ->setcuentaBeneficiario('411111111111')
            ->setRfcCurpBeneficiario('FOMR790925FB6')
            ->setConceptoPago('AhorroLibre')
            ->setReferenciaNumerica('3435341');

        $data->sign();

        var_dump('Registering order');
        $res = $this->client->registraOrdenes([$data]);
        var_dump('Order registered');

        //3838363, ID Interno de STP
        dd($res);

    }

    public function checkPayment(){

        $data =  new ConsultaCEPLoteData();

        $data
            ->setMonto(300)
            ->setClaveInstitucionBeneficiario(40014)
            ->setClaveRastreo('2324234')
            ->setClaveInstitucionOrdenante('90646')
            ->setCuentaBeneficiario('411111111111')
            ->setFecha('20161103')
            ->setTipoOperacion('C');

        try {
            $res = $this->client->consultaCEPLote([$data]);
        }
        catch(\Exception $e) {
            dd($this->client->__getLastRequest());
        }

        dd($res);

    }

}