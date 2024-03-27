<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/winkelwagen.css">
    <title>Document</title>
</head>
<body>
<?php include_once("./assets/core/header.php");?>
<div class="winkelwagen-flex">
    <div class="winkelwagen">
        <div class="winkelwagen-flex">
            <div class="img"></div>
            <div class="winkel-box">
                <div class="title">BANKENBANKENBANENENKANEK</div>
                <div class="price">$34567</div>
                <div class="disPrice">$23456</div>
            </div>
        </div>
    </div>
    <div class="info">
        <div class="overzicht">Betalings Methode</div>
        <div class="betaalingsmethodes-flex">
            <div class="betalen">Ideal</div>
            <div class="betalen">Paypal</div>
            <div class="betalen">Mastercard</div>
            <div class="betalen">Visa</div>
            <div class="betalen">American Exspress</div>
        </div>
        <button class="button">Order</button>
    </div>
</div>
</body>
</html>