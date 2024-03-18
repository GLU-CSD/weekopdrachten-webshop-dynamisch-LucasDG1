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
                <div class="little-img"></div>
                <div class="little-img"></div>
                <div class="little-img"></div>
            </div>
            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, saepe obcaecati. Laudantium, ullam autem vero ea velit optio. Animi ipsa repellat assumenda, est labore sunt ratione deserunt. Reprehenderit, sequi molestiae?
            </div>
            <div class="price"><?php echo $product["originalPrice"];?></div>
            <div class="disPrice"><?php echo $product["discountedPrice"];?></div>
            <button class="button">Order</button>
        </div>

</div>
<?php 
    include_once("../assets/core/footer.php");
?>

</body>
</html>