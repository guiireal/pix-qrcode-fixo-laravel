<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pix</title>
</head>
<body>
    <h1>QR Code Pix</h1>
    <br />
    <img src="data:image/png;base64, {{base64_encode($image)}}" alt="PIX QRCODE">
    <br />
    Código pix:
    <br />
    <strong>{{ $payloadQrCode }}</strong>
</body>
</html>
