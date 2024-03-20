<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="../assets/css/info.css">   
</head>
<body>
   <?php 
   include_once("../config.php");
   include_once("../assets/core/header.php");

   $product = [];
   foreach ($config["products"] as $curr_product) {
    if ($curr_product["id"] == $_GET["id"]){
        $product = $curr_product;
        break;
    }
   }
   ?>
   <div class="main">

        <div class="imagebox"><img class="image" src="<?php echo $product["image"];?>" alt=""></div>
        <div class="prodInfo">
            <div class="title"><?php echo $product["name"];?></div>
            <div class="little-img-flex">
                <div class="little-img"><img class="image" src="<?php echo $product["litImg"];?>" alt=""></div>
                <div class="little-img"><img class="image" src="<?php echo $product["litImg2"];?>" alt=""></div>
                <div class="little-img"><img class="image" src="<?php echo $product["litImg3"];?>" alt=""></div>
            </div>
            <div class="text">
            <?php echo $product["text"];?>
            </div>
            <div class="price"><?php echo $product["originalPrice"];?></div>
            <div class="disPrice"><?php echo $product["discountedPrice"];?></div>
            <button class="button"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 27px "></i>In Winkelwagen</button>
        </div>

</div>
<?php 
    include_once("../assets/core/footer.php");
?>

</body>
</html>