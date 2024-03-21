<?php 
include_once("./config.php");

include_once("./assets/core/header.php");
include_once("./assets/core/filters.php");
?>
        <nav>
            <div class="topbarGrid">
                <div class="nameArticle">Bank</div>
            </div>
        </nav>    

        <div class="article">
            <?php 

            foreach ($config["products"] as $product) {
                include("./assets/core/product.php");
            }
            ?>  
        
        </div> 

        <!-- de footer -->
        <?php 
            include_once("./assets/core/footer.php");
            include_once("./assets/core/script.php");
        ?>
        <!-- de slider om je prijs te kiezen, heb zelf proberen om te zoeken maar lukte niet echt. heb hier ook ChatGPT voor gebruikt en weet niet echt hoe het werkt-->
    
        <div class="background-image"></div>
        <div class="content">
    </div>
</body>
</html>