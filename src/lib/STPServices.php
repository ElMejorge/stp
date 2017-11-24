<?php

namespace AhorroLibre\STP\Lib;

use AhorroLibre\STP\Lib\CryptoHandlerSTP;
use AhorroLibre\STP\Lib\OrdenPago;
use nusoap_client;

class STPService
{
    public static function registraOrden(OrdenPago $data, $pemFile, $passphrase)
    {
        $proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
        $proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
        $proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
        $proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';

        $wsURL = 'http://demo.stpmex.com:7004/speidemo/webservices/SpeiServices?WSDL';

        $client = new nusoap_client($wsURL, 'wsdl', $proxyhost, $proxyport, $proxyusername, $proxypassword);
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = false;
        $err = $client->getError();

        if ($err) {
            echo '<h2>Constructor error</h2><pre>' . $err . '</pre>' . '<br>';
        }

        $dataToSign = $data->_getDataToSign();
        $retVal = CryptoHandlerSTP::signInfo($pemFile, $dataToSign, $passphrase);
        echo "<br>retVal :<BR>$retVal<br><br>";
        $data->set_firma($retVal);
        echo "<br>value :<BR>" . $data->get_empresa() . "<br><br>";

        $ordenPago = array(
            "empresa" => $data->get_empresa(),
            "claveRastreo" => $data->get_claveRastreo(),
            "conceptoPago" => $data->get_conceptoPago(),
            "cuentaBeneficiario" => $data->get_cuentaBeneficiario(),
            "cuentaOrdenante" => $data->get_cuentaOrdenante(),
            "referenciaNumerica" => $data->get_referenciaNumerica(),
            "monto" => $data->get_monto(),
            "tipoCuentaBeneficiario" => $data->get_tipoCuentaBeneficiario(),
            "tipoPago" => $data->get_tipoPago(),
            "institucionContraparte" => $data->get_institucionContraparte(),
            "nombreBeneficiario" => $data->get_nombreBeneficiario(),
            "institucionOperante" => $data->get_institucionOperante(),
            "iva" => $data->get_iva(),
            "nombreOrdenante" => $data->get_nombreOrdenante(),
            "rfcCurpBeneficiario" => $data->get_rfcCurpBeneficiario(),
            "rfcCurpOrdenante" => $data->get_rfcCurpOrdenante(),
            "tipoCuentaOrdenante" => $data->get_tipoCuentaOrdenante(),
            "fechaOperacion" => $data->get_fechaOperacion(),
            "topologia" => $data->get_topologia(),
            "prioridad" => $data->get_prioridad(),
            "usuario" => $data->get_usuario(),
            "tipoOperacion" => $data->get_tipoOperacion(),
            "causaDevolucion" => $data->get_causaDevolucion(),
            "claveRastreoDevolucion" => $data->get_claveRastreoDevolucion(),
            "nombreBeneficiario2" => $data->get_nombreBeneficiario2(),
            "tipoCuentaBeneficiario2" => $data->get_tipoCuentaBeneficiario2(),
            "cuentaBeneficiario2" => $data->get_cuentaBeneficiario2(),
            "rfcCurpBeneficiario2" => $data->get_rfcCurpBeneficiario2(),
            "conceptoPago2" => $data->get_conceptoPago2(),
            "clavePago" => $data->get_clavePago(),
            "referenciaCobranza" => $data->get_referenciaCobranza(),
            "medioEntrega" => $data->get_medioEntrega(),
            "emailBeneficiario" => $data->get_emailBeneficiario(),
            "claveCatUsuario1" => $data->get_claveCatUsuario1(),
            "claveCatUsuario2" => $data->get_claveCatUsuario2(),
            "folioOrigen" => $data->get_folioOrigen(),
            "estado" => $data->get_estado(),
            "firma" => $data->get_firma()
        );

        $param = array("ordenPago" => $ordenPago);

        $result = $client->call('registraOrden', array('parameters' => $param), '', '', false, true);
        if ($client->fault) {
            echo '<h2>Fault</h2><pre>';
            print_r($result);
            echo '</pre>';
        } else {
            $err = $client->getError();
            if ($err) {
                echo '<h2>Error</h2><pre>' . $err . '</pre>';
            } else {
                echo '<h2>Result</h2><pre>';
                print_r($result);
                echo '</pre>';
            }
        }
        echo '<h2>Request</h2><pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
        echo '<h2>Response</h2><pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
    }

}
