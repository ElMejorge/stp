<?php

namespace AhorroLibre\STP\Lib;

class CryptoHandlerSTP {

    public static function signInfo($pemFile, $dataToSign, $passphrase){
        $pKeyId = self::getCertified($pemFile, $passphrase);
        $binary_signature = "";

        //	print $dataToSign."<p/>";

        $hex_ary = array();
        foreach (str_split($dataToSign) as $chr) {
            $hex_ary[] = sprintf("%02X", ord($chr));
        }
        //	echo implode(' ',$hex_ary);

        openssl_sign($dataToSign, $binary_signature, $pKeyId, "RSA-SHA256");
        $retVal = base64_encode($binary_signature);

        openssl_free_key($pKeyId);

        var_dump($dataToSign);
        print "\n";
        return $retVal;
    }

    private static function getCertified($pemFile, $passphrase){
        $fp = fopen($pemFile, "r");
        $private_key = fread($fp, 8192);
        fclose($fp);

        return openssl_get_privatekey($private_key, $passphrase);
    }
}
