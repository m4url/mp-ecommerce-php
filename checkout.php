<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = 'Mi producto';
    $item->quantity = 1;
    $item->unit_price = 75.56;
    $preference->items = array($item);
    $preference->save();
}



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- SDK MercadoPago.js V2 -->
    <script src="https://sdk.mercadopago.com/js/v2"></script>

    

</head>
<body>
<div class="cho-container"></div>
</body>
<script>
        // Agrega credenciales de SDK
        const mp = new MercadoPago('APP_USR-7eb0138a-189f-4bec-87d1-c0504ead5626', {
                locale: 'es-AR'
        });

        // Inicializa el checkout
        mp.checkout({
            preference: {
                id: 'YOUR_PREFERENCE_ID'
            },
            render: {
                    container: '.cho-container', // Indica dónde se mostrará el botón de pago
                    label: 'Pagar la compra', // Cambia el texto del botón de pago (opcional)
            }
        });
    </script>
</html>
