<div class="shopBox">
    <div class="square">
        <a href="<?php echo "../pages/prodinfo.php?id=" . $product["id"]?>"><img src="<?php echo $product["image"];?>" alt="<?php echo $product["name"];?>" width="320" height="220"></a>
    </div>
    <div class="textShop"><a href="<?php echo "../pages/prodinfo.php?id=" . $product["id"]?>"><?php echo $product["name"];?></a></div>
    <div class="prijs1"><?php echo $product["originalPrice"];?></div>
    <div class="prijs2"><?php echo $product["discountedPrice"];?></div>
    <a href="<?php echo "../pages/prodinfo.php?id=" . $product["id"]?>"><button class="btn"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: rgb(0, 140, 255);"></i></button></a>
</div>