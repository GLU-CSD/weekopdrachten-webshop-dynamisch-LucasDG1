<?php 
session_start();
if (isset($_POST['bestel'])) {
    $_SESSION['cart'][$_POST['id']] = $_POST['aantal'];
   }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="./assets/css/info.css">   
</head>
<body>
   <?php 
   include_once("./config.php");
   include_once("./assets/core/header.php");

   $product = [];
   foreach ($config["products"] as $curr_product) {
    if ($curr_product["id"] == $_GET["id"]){
        $product = $curr_product;
        break;
    }
   }
   ?>
   <div class="main">

        <div class="imagebox"><img class="image" id="boxImg"src="<?php echo $product["image"];?>" alt=""></div>
        <div class="prodInfo">
            <div class="title"><?php echo $product["name"];?></div>
            <div class="little-img-flex">
                <div class="little-img"><img onclick="document.getElementById('boxImg').src=this.src"class="image" src="<?php echo $product["litImg"];?>" alt=""></div>
                <div class="little-img"><img onclick="document.getElementById('boxImg').src=this.src"class="image" src="<?php echo $product["litImg2"];?>" alt=""></div>
                <div class="little-img"><img onclick="document.getElementById('boxImg').src=this.src"class="image" src="<?php echo $product["litImg3"];?>" alt=""></div>
            </div>
            <div class="text">
            <?php echo $product["text"];?>
            </div>
            <div class="price"><?php echo $product["originalPrice"];?></div>
            <div class="disPrice"><?php echo $product["discountedPrice"];?></div>
            <form action="prodinfo.php?id=<?= $product['id']; ?>&add=true" method="post">
                <input type="hidden" name="id" value="<?= $product['id']; ?>">
                <input type="submit" name="bestel" value="Add To Shoppingcart" class="ShoppingcartAdd">
                <input type="number" name="aantal" class="count" value="1" min=1>
              </form>
            <!-- <form  action="./winkelwagen.php" method="post"><input name="article" type="hidden" value="<?php echo $curr_product["id"] ?>"> <input type="number" class="count" name="aantal" value="1" min=1 >
            <input type="submit" value="In winkelwagen">
            </form> -->
           
           
        </div>

</div>

<?php 

    include_once("./assets/core/footer.php");
?>

</body>
</html>