<?php

define('EASE_LOGGER', 'console');
define('APP_NAME', 'flexibee example');
include_once '../vendor/autoload.php';

\Ease\Shared::init(['ABRAFLEXI_URL','ABRAFLEXI_LOGIN','ABRAFLEXI_PASSWORD','ABRAFLEXI_COMPANY'], '../.env');

$faktura = new \AbraFlexi\FakturaVydana;
$fktury_data = $faktura->getColumnsFromAbraFlexi(['id','kod','sumCelkem']);
print_r($faktura);

