<?php
require "Price.php";
$currency = 'USD-BRL';
$price = '1';
$data = Price::cost($currency, $price);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/icon.png">
    <title>Cotação de Moedas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script src="js/jquery.mask.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <select id="currency">
                    <option value="USD-BRL">Dólar Comercial (USD-BRL)</option>
                    <option value="USDT-BRL">Dólar Turismo (USDT-BRL)</option>
                    <option value="CAD-BRL">Dólar Canadense (CAD-BRL)</option>
                    <option value="AUD-BRL">Dólar Australiano (AUD-BRL)</option>
                    <option value="EUR-BRL">Euro (EUR-BRL)</option>
                    <option value="GBP-BRL">Libra Esterlina (GBP-BRL)</option>
                    <option value="ARS-BRL">Peso Argentino (ARS-BRL)</option>
                    <option value="JPY-BRL">Iene Japonês (JPY-BRL)</option>
                    <option value="CHF-BRL">Franco Suíço (CHF-BRL)</option>
                    <option value="CNY-BRL">Yuan Chinês (CNY-BRL)</option>
                    <!-- <option value="YLS-BRL">Novo Shekel Israelense (YLS-BRL)</option> -->
                    <option value="BTC-BRL">Bitcoin (BTC-BRL)</option>
                    <option value="ETH-BRL">Litecoin (ETH-BRL)</option>
                    <option value="LTC-BRL">Ethereum (LTC-BRL)</option>
                    <option value="XRP-BRL">Ripple (XRP-BRL)</option>
                </select>
                <br><br>
            </div>
            <div class="col-md-4">
                <input class="money" type="text" id="price" value="1,00">
            </div>
            <div class="col-md-4">
                <span>Vale</span>
            </div>
            <div class="col-md-4">
                <span id="sign">R$</span><span class="bid"><?= $data[4] ?></span>
            </div>
            <div class="col-md-4">
                <br>
                <small>Compra</small><br>
                <span id="sign">R$</span><span class="bid"><?= $data[4] ?></span>
            </div>
            <div class="col-md-4">
                <br>
                <small>Venda</small><br>
                <span id="sign">R$</span><span id="ask"><?= $data[5] ?></span>
            </div>
            <div class="col-md-4">
                <br>
                <small>Porcentagem de variação</small><br>
                <span id="pctChange"><?= $data[3] ?></span><span id="sign">%</span>
            </div>
            <div class="col-md-4">
                <br>
                <small>Máximo</small><br>
                <span id="sign">R$</span><span id="high"><?= $data[0] ?></span>
            </div>
            <div class="col-md-4">
                <br>
                <small>Mínimo</small><br>
                <span id="sign">R$</span><span id="low"><?= $data[1] ?></span>
            </div>
            <div class="col-md-4">
                <br>
                <small>Variação</small><br>
                <span id="sign">R$</span><span id="varBid"><?= $data[2] ?></span>
            </div>
            <div class="col-md-12">
                <br>
                <small>Última atualização: <small><small id="create_date"><?= $data[6] ?></small>
            </div>
        </div>
    </div>
</body>

</html>