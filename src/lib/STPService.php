<?php

namespace AhorroLibre\STP\Lib;

use AhorroLibre\STP\Lib\CryptoHandlerSTP;
use AhorroLibre\STP\Lib\OrdenPago;
use AhorroLibre\STP\Lib\nusoap_client;

class STPService
{
    public static function registraOrden(OrdenPago $data, $pemFile, $passphrase): array
    {
        $proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
        $proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
        $proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
        $proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';

        $wsURL =  \Config::get('stp.ip_address') . ':' . \Config::get('stp.port') .  '/'. \Config::get('stp.path');

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
        $data->setFirma($retVal);
        echo "<br>value :<BR>" . $data->getEmpresa() . "<br><br>";

        $ordenPago = array(
            "empresa" => $data->getEmpresa(),
            "claveRastreo" => $data->getClaveRastreo(),
            "conceptoPago" => $data->getConceptoPago(),
            "cuentaBeneficiario" => $data->getCuentaBeneficiario(),
            "cuentaOrdenante" => $data->getCuentaOrdenante(),
            "referenciaNumerica" => $data->getReferenciaNumerica(),
            "monto" => $data->getMonto(),
            "tipoCuentaBeneficiario" => $data->getTipoCuentaBeneficiario(),
            "tipoPago" => $data->getTipoPago(),
            "institucionContraparte" => $data->getInstitucionContraparte(),
            "nombreBeneficiario" => $data->getNombreBeneficiario(),
            "institucionOperante" => $data->getInstitucionOperante(),
            "iva" => $data->getIva(),
            "nombreOrdenante" => $data->getNombreOrdenante(),
            "rfcCurpBeneficiario" => $data->getRfcCurpBeneficiario(),
            "rfcCurpOrdenante" => $data->getRfcCurpOrdenante(),
            "tipoCuentaOrdenante" => $data->getTipoCuentaOrdenante(),
            "fechaOperacion" => $data->getFechaOperacion(),
            "topologia" => $data->getTopologia(),
            "prioridad" => $data->getPrioridad(),
            "usuario" => $data->getUsuario(),
            "tipoOperacion" => $data->getTipoOperacion(),
            "causaDevolucion" => $data->getCausaDevolucion(),
            "claveRastreoDevolucion" => $data->getClaveRastreoDevolucion(),
            "nombreBeneficiario2" => $data->getNombreBeneficiario2(),
            "tipoCuentaBeneficiario2" => $data->getTipoCuentaBeneficiario2(),
            "cuentaBeneficiario2" => $data->getCuentaBeneficiario2(),
            "rfcCurpBeneficiario2" => $data->getRfcCurpBeneficiario2(),
            "conceptoPago2" => $data->getConceptoPago2(),
            "clavePago" => $data->getClavePago(),
            "referenciaCobranza" => $data->getReferenciaCobranza(),
            "medioEntrega" => $data->getMedioEntrega(),
            "emailBeneficiario" => $data->getEmailBeneficiario(),
            "claveCatUsuario1" => $data->getClaveCatUsuario1(),
            "claveCatUsuario2" => $data->getClaveCatUsuario2(),
            "folioOrigen" => $data->getFolioOrigen(),
            "estado" => $data->getEstado(),
            "firma" => $data->getFirma()
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
//                print_r($result);
                echo '</pre>';
            }
        }


        return $result;
//        dd($response);
//        echo '<h2>Request</h2><pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
//        echo '<h2>Response</h2><pre>' . htmlspecialchars($client->parseResponse($client->responseHeaders, $client->response), ENT_QUOTES) . '</pre>';
    }

}
