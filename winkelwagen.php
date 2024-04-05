<?php
    session_start();
    // $article = $_POST['article'];
    // $aantal = $_POST['aantal'];
    // $_SESSION['winkelwagen'][$article] = $aantal;
    include_once("./config.php")
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

        <!-- <div class="winkelwagen-flex">
            <div class="winkelwagen"> -->
    <div class="info">
        <div class="overzicht">Betalings Methode</div>
        <div class="betaalingsmethodes-flex">
            <i class="fa fa-paypal" aria-hidden="true" style="font-size: 60px; cursor: pointer;"></i>
            <i class="fa fa-cc-mastercard" aria-hidden="true"style="font-size: 60px; cursor: pointer;" ></i> 
            <i class="fa fa-cc-visa" aria-hidden="true" style="font-size: 60px; cursor: pointer;"></i>
        </div>
        <a href="./afrekenen.php"><button class="button">Order</button></a>
        <?php        
           if (isset($_SESSION['cart'])) { 

            foreach ($_SESSION['cart'] as $productid => $quantity) {
                // echo 'id: ' . $productid . ' - aantal: ' . $_SESSION['cart'][$productid] . "<br>";

                foreach ($config['products'] as $product) {
                    if ($product['id'] == $productid) {
        ?>
        <div class="winkelwagen-flex">
        <div class="img"><img src="<?php echo $product["image"];?>" alt="" height="160" width="160"></div>
            <div class="winkel-box">
            <div class="title"><?php echo $product["name"];?></div>
                <!-- <div class="price"><?php echo $product["originalPrice"];?></div> -->
            <div class="disPrice"><?php echo $product["discountedPrice"];?></div>
            <div class="amount">Hoeveelheid:<?=$_SESSION['cart'][$productid]?> </div>
            </div>
        </div>
    </div>
    
     <?php      }
            }
        }
    }
    ?>
    </div>
                    
</div>
<?php 
    include_once("./assets/core/footer.php")
?>
</body>
</html>