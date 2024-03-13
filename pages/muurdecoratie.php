<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Muurdecoratie</title>
  <link rel="stylesheet" href="/module2/assets/css/style.css">
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="/assets/js/app.js" defer></script>
</head>

<body>
  <header>
    <!-- de hele topbar -->
    <div class="topbar">
      <div>
        <label for="languages">Uw Taal</label>
        <select name="languages" id="languages">
          <option value="nederlands">Nederlands</option>
          <option value="engels">Engels</option>
        </select>
      </div>
      <div id="name">
        <h1>DecorMasters.nl</h1>
      </div>

      <div class="accountContainer">
        <a href="/pages/account/mijnaccount.html" class="accountBtn">Mijn Account</a>
        <hr class="hr">
        <a href="/pages/afrekenen.html" class="accountBtn">Afrekenen</a>
        <hr class="hr">
        <a href="/pages/inloggen.html" class="accountBtn">Inloggen</a>

      </div>
      <div class="log-in">
        <a href="/pages/account/mijnaccount.html"><i class="fa fa-user" ></i></a>
        <a href="/pages/afrekenen.html"><i class="fa fa-file-text"></i></a>
        <a href="/pages/inloggen.html"><i class="fa fa-sign-in" ></i></a></div>
  </div>
    </div>

    <div class="underbar">

      <div class="logo">
        <div class="hydralogo"><img src="/assets/img/Hydra.jpg" alt="Logo" width="60" height="60">
        </div>
      </div>

      <div class="navigator">
        <a href="/pages/home.html" class="home">Home</a>
        <a href="/pages/muurdecoratie.html" class="muurdecoratie">Muurdecoratie</a>
        <a href="/pages/doosjes.html" class="doosjes">Tafels</a>
        <a href="/pages/opbergers.html" class="opbergers">Opbergers</a>
        <a href="/pages/stoelen.html" class="stools">Stoelen</a>
        <a href="/pages/banken.html" class="gadgets">Banken</a>
      </div>

      <div class="search-container">
        <form id="search-form">
          <input type="text" id="search-input" placeholder="Search products...">
          <button type="submit" id="search-button"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <script>
          // ChatGPT Heeft dit verbeterd van kreeg hem niet aan het werken, ik weet 40% hoe dit werkt
        document.getElementById('search-form').addEventListener('submit', function (event) {
          event.preventDefault();

        
          var searchQuery = document.getElementById('search-input').value.toLowerCase().trim();

      
          var products = document.querySelectorAll('.shopBox');
          products.forEach(function (product) {
            var productName = product.querySelector('.textShop a').textContent.toLowerCase();
            if (productName.includes(searchQuery)) {
              product.style.display = 'block';
            } else {
              product.style.display = 'none'; 
            }
          });
        });

      </script>

    </div>







  </header>
  <!-- de filters links -->
  <aside id="aside">
    <div class="filter1">

      <div id="boxes1">
        <h2>Muurdecoratie</h2>
        <hr class="hrAside">
        <ul>
          <li>Subcatergorie 1</li>
          <li>Subcatergorie 2</li>
          <li>Subcatergorie 3</li>
        </ul>

      </div>


    </div>
    <div class="filter1">
      <div id="boxes2">
        <h2>Uw Selectie verfijnen</h2>
        <hr class="hrAside">
        <h3>Materiaal:</h3>
        <ul>
          <li>Hout (14)</li>
          <li>Plastiek (12)</li>
          <li>Metaal(13)</li>
          <li>Rubber(11)</li>
        </ul>




      </div>

    </div>
    <div class="filter1">
      <div id="boxes3">
        <h2>Prijs</h2>
        <hr class="hrAside">
        <div class="slidecontainer">
          <input type="range" id="price-slider" min="0" max="100" value="50">
          <p id="slider-value"></p>


        </div>


      </div>

    </div>
    <div class="filter1">
      <div id="boxes4">
        <h2>Recent bekeken</h2>
        <hr class="hrAside">
        <ul>
          <li>(uw heeft nog niks bekeken)</li>
        </ul>
      </div>



    </div>
    <div class="filter1">
      <div id="boxes5">
        <h2>Nieuwsbrief</h2>
        <hr class="hrAside">

        <form id="form">
          <input type="search" id="query" name="q" placeholder="Opzoeken">

        </form>
      </div>
      <button class="glassy-button">Inschrijven</button>

    </div>



    <div class="filter1">
      <div id="boxes6">
        <h2>Producten Vergelijken</h2>
        <hr class="hrAside">
        <p>(uw heeft nog niks geselecteerd) </p>

      </div>
      <button class="glassy-button">Vergelijken</button>

    </div>

  </aside>
  <nav>
    <div class="topbarGrid">
      <div class="nameArticle">Muurdecoratie</div>
      <div class="selectName">

      </div>



    </div>







  </nav>
  <!-- alle producten -->
  <div class="article">
    <div class="shopBox">
      <div class="square">
        <a
          href="https://kioskfr-production.blokker.nl/clayre-en-eef-wanddecoratie-30x75-cm-rood-wit-ijzer-telephone-muurdecoratie-rood-muurdecoratie/3967310.html"><img
            src="../assets/img/muurdec9.jpg" alt="doos" width="320" height="220"> </a>
      </div>
      <div class="textShop"><a
          href="https://kioskfr-production.blokker.nl/clayre-en-eef-wanddecoratie-30x75-cm-rood-wit-ijzer-telephone-muurdecoratie-rood-muurdecoratie/3967310.html">London
          Tele-Box</a></div>
      <div class="prijs1">€ 50,00</div>
      <div class="prijs2">€ 33,45</div>
      <button class="btn"><i class="fa fa-heart" aria-hidden="true" style="color: rgb(0, 140, 255);"></i></button>
    </div>

    <div class="shopBox">
      <div class="square">
        <a href="https://www.floz.nl/product/wanddecoratie-metaal-paarden/"><img src="../assets/img/muurdec8.jpg"
            alt="doos" width="320" height="220"></a>
      </div>
      <div class="textShop"><a href="https://www.floz.nl/product/wanddecoratie-metaal-paarden/">Shining Horses</a></div>
      <div class="prijs1">€ 40,00</div>
      <div class="prijs2">€ 23,50</div>
      <button class="btn"><i class="fa fa-heart" aria-hidden="true" style="color: rgb(0, 140, 255);"></i></button>
    </div>

    <div class="shopBox">
      <div class="square">
        <a href="https://www.wall-art.nl/Wanddecoraties/Hout/Hexagon-Hout-Palmblad-voor-roze-muur-Boehmer.html"><img
            src="../assets/img/muurdec7.jpg" alt="doos" width="320" height="220"></a>
      </div>
      <div class="textShop"><a
          href="https://www.wall-art.nl/Wanddecoraties/Hout/Hexagon-Hout-Palmblad-voor-roze-muur-Boehmer.html">Hexa
          Plant</a></div>
      <div class="prijs1">€ 45,00</div>
      <div class="prijs2">€ 30,00</div>
      <button class="btn"><i class="fa fa-heart" aria-hidden="true" style="color: rgb(0, 140, 255);"></i></button>
    </div>

    <div class="shopBox">
      <div class="square">
        <a href="https://www.amazon.nl/Metalen-Wanddecoratie-Moderne-Opknoping-Driedimensionale/dp/B0C5MYJMKP"><img
            src="../assets/img/muurdec6.jpg" alt="doos" width="320" height="220"></a>
      </div>
      <div class="textShop"><a
          href="https://www.amazon.nl/Metalen-Wanddecoratie-Moderne-Opknoping-Driedimensionale/dp/B0C5MYJMKP">Gears</a>
      </div>
      <div class="prijs1">€ 69,99</div>
      <div class="prijs2">€ 39,99</div>
      <button class="btn"><i class="fa fa-heart" aria-hidden="true" style="color: rgb(0, 140, 255);"></i></button>
    </div>

    <div class="shopBox">
      <div class="square">
        <a href="https://www.ilovespeelgoed.nl/product/byon-muurdecoratie-ballon-wit-17-cm.html"><img
            src="../assets/img/muurdec5.jpg" alt="doos" width="320" height="220"></a>
      </div>
      <div class="textShop"><a
          href="https://www.ilovespeelgoed.nl/product/byon-muurdecoratie-ballon-wit-17-cm.html">Matt Baloon</a></div>
      <div class="prijs1">€ 25,99</div>
      <div class="prijs2">€ 29,95</div>
      <button class="btn"><i class="fa fa-heart" aria-hidden="true" style="color: rgb(0, 140, 255);"></i></button>
    </div>

    <div class="shopBox">
      <div class="square">
        <a href="https://www.amazon.nl/Johns-Studio-muurdecoratie-sculptuur-slaapkamer/dp/B0932B96S3"><img
            src="../assets/img/muurdec4_.jpg" alt="doos" width="320" height="220"></a>
      </div>
      <div class="textShop"><a
          href="https://www.amazon.nl/Johns-Studio-muurdecoratie-sculptuur-slaapkamer/dp/B0932B96S3">Humming Bird</a>
      </div>
      <div class="prijs1">€ 149,99</div>
      <div class="prijs2">€ 99,99</div>

      <button class="btn"><i class="fa fa-heart" aria-hidden="true" style="color: rgb(0, 140, 255);"></i></button>
    </div>

    <div class="shopBox">
      <div class="square">
        <a
          href="https://clayre-eef.com/nl/muurdecoratie/1892-5y0784-wanddecoratie-124x6x51-cm-goudkleurig-metaal-vlinder-rechthoek-muurdecoratie-8717459763722.html"><img
            src="../assets/img/muurdec3.jpg" alt="doos" width="320" height="220"></a>
      </div>
      <div class="textShop"><a
          href="https://clayre-eef.com/nl/muurdecoratie/1892-5y0784-wanddecoratie-124x6x51-cm-goudkleurig-metaal-vlinder-rechthoek-muurdecoratie-8717459763722.html">G-S
          Butterflies</a></div>
      <div class="prijs1">€ 89,99</div>
      <div class="prijs2">€ 65,99</div>
      <button class="btn"><i class="fa fa-heart" aria-hidden="true" style="color: rgb(0, 140, 255);"></i></button>
    </div>

    <div class="shopBox">
      <div class="square">
        <a
          href="https://clayre-eef.com/nl/muurdecoratie/20795-6y5465-wanddecoratie-vleugels-43x1x55-cm-goudkleurig-ijzer-muurdecoratie-8717459952195.html"><img
            src="../assets/img/muurdec2.jpg" alt="doos" width="320" height="220"></a>
      </div>
      <div class="textShop"><a
          href="https://clayre-eef.com/nl/muurdecoratie/20795-6y5465-wanddecoratie-vleugels-43x1x55-cm-goudkleurig-ijzer-muurdecoratie-8717459952195.html">Golden
          Angel</a></div>
      <div class="prijs1">€ 249,99</div>
      <div class="prijs2">€ 185,99</div>
      <button class="btn"><i class="fa fa-heart" aria-hidden="true" style="color: rgb(0, 140, 255);"></i></button>
    </div>

    <div class="shopBox">
      <div class="square">
        <a href="https://www.bazaaronline.nl/spiegel-creston-muur-decoratie-3-set-goud.html"><img
            src="../assets/img/muurdec1.png" alt="doos" width="320" height="220"></a>
      </div>
      <div class="textShop"><a href="https://www.bazaaronline.nl/spiegel-creston-muur-decoratie-3-set-goud.html">Triple
          Diamond</a></div>
      <div class="prijs1">€ 35,00</div>
      <div class="prijs2">€ 19,95</div>
      <button class="btn"><i class="fa fa-heart" aria-hidden="true" style="color: rgb(0, 140, 255);"></i></button>
    </div>







  </div>
  <!-- de hele footer -->
  <?php include_once("../assets/core/footer.php");?>
  <script>
    //de slider om je prijs te kiezen, heb zelf proberen om te zoeken maar lukte niet echt. heb hier ook ChatGPT voor gebruikt en weet niet echt hoe het werkt
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function () {
      output.innerHTML = this.value;
    }
  </script>
  <script>
    var slider = document.getElementById('price-slider');
    var products = document.querySelectorAll('.shopBox');

    var prices = Array.from(products).map(function (product) {
      return parseFloat(product.querySelector('.prijs2').textContent.replace('€ ', '').replace('.', '').replace(',', '.'));
    });

    var minPrice = Math.min(...prices); 
    var maxPrice = 200; 

    slider.min = minPrice;
    slider.max = maxPrice;

    var selectedPrice = maxPrice;

    slider.value = selectedPrice;

    slider.addEventListener('input', function () {
      var selectedPrice = parseFloat(slider.value);
      products.forEach(function (product) {
        var price = parseFloat(product.querySelector('.prijs2').textContent.replace('€ ', '').replace('.', '').replace(',', '.'));
        if (price > selectedPrice) {
          product.style.display = 'none';
        } else {
          product.style.display = 'block';
        }
      });
      document.getElementById('slider-value').textContent = '€' + selectedPrice.toLocaleString('nl-NL', { minimumFractionDigits: 2 });
    });

    slider.dispatchEvent(new Event('input'));
  </script>
  <div class="background-image"></div>
  <div class="content">

  </div>
</body>

</html>