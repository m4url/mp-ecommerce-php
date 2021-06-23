<?php

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if($_POST['type'] == 'payment'){
        $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
        var_dump($_POST);
    }
    
}

?>