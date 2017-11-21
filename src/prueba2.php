<?php
include('./lib/STPServices.php');

$data = new OrdenPago();
$data->set_empresa("AHORRO_LIBRE");
$data->set_claveRastreo("IACH0OEE80003");
$data->set_conceptoPago("SWI_SPEI_Payment");
$data->set_cuentaBeneficiario("110180077000000018");
$data->set_cuentaOrdenante("846180000050000011");
$data->set_referenciaNumerica(2);
$data->set_monto(1000.82);
$data->set_tipoCuentaBeneficiario(40);
$data->set_tipoPago(1);
$data->set_institucionContraparte(40131);
$data->set_nombreBeneficiario("alfredo");
$data->set_institucionOperante(90646);
$data->set_iva(16);
$data->set_nombreOrdenante("Juan Lopez");
$data->set_rfcCurpBeneficiario("RFCBEN");
$data->set_rfcCurpOrdenante("RFCORD");
$data->set_tipoCuentaOrdenante(3);

$pemFile = "/Users/macbook/Downloads/STP/Examples/PHP/prueba-key.pem";
$passphrase = "12345678";

registraOrden($data, $pemFile, $passphrase);
?>
