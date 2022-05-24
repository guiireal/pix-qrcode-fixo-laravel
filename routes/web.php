<?php

use App\Pix\Payload;
use Illuminate\Support\Facades\Route;
use Mpdf\QrCode\{QrCode, Output};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $pixKey = "123456789"; // Informe a chave PIX

    $objectPayload = (new Payload())
        ->setPixKey($pixKey)
        ->setDescription('Pagamento do pedido teste')
        ->setMerchantName('Guilherme Franca')
        ->setMerchantCity('SAO PAULO')
        ->setAmount(100.00)
        ->setTxid('123456789');

    $payloadQrCode = $objectPayload->getPayload();

    $qrCodeObject = new QrCode($payloadQrCode);

    $image = (new Output\Png)->output($qrCodeObject, 400);

    return view('welcome', compact('image', 'payloadQrCode'));
});
