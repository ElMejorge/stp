<?php
/**
 * Class Stp
 *
 * @author    Roberto Flores <roberto@ahorrolibre.com>
 * @copyright Ahorro Libre, Inc.
 * @package   Common\Misc\Psp
 */

namespace AhorroLibre\STP;


class StpKeyStoreManager
{
    function __construct()
    {

    }

    public static function signInfo($pemFile, $dataToSign, $passphrase){
        $pKeyId = self::getCertified($pemFile, $passphrase);
        $binary_signature = "";

        $hex_ary = array();
        foreach (str_split($dataToSign) as $chr) {
            $hex_ary[] = sprintf("%02X", ord($chr));
        }

        openssl_sign($dataToSign, $binary_signature, $pKeyId, "RSA-SHA256");
        $retVal = base64_encode($binary_signature);

        openssl_free_key($pKeyId);


        return $retVal;
    }

    private static function getCertified($pemFile, $passphrase){
        $fp = fopen($pemFile, "r");
        $private_key = fread($fp, 8192);
        fclose($fp);

        return openssl_get_privatekey($private_key, $passphrase);
    }



}