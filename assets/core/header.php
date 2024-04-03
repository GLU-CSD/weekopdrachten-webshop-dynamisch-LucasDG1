<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Banken</title>
  <link rel="stylesheet" href="./assets/css/style.css">
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
    <main>
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
            <a href="/pages/account/mijnaccount.html" class="accountBtn">My Account</a>
            <hr class="hr">
            <a href="./winkelwagen.php" class="accountBtn">Check out</a>
            <hr class="hr">
            <a href="/pages/inloggen.html" class="accountBtn">Inloggen</a>
          </div>
          <div class="log-in">
            <a href="/pages/account/mijnaccount.html"><i class="fa fa-user" ></i></a>
            <a href="/module2/afrekenen.php"><i class="fa fa-file-text"></i></a>
            <a href="/pages/inloggen.html"><i class="fa fa-sign-in" ></i></a></div>
          </div>

      <div class="underbar">
        <div class="logo">
          <div class="hydralogo"><img src="./assets/img/Hydra.jpg" alt="Logo" width="60" height="60"></div>
        </div>
        <div class="navigator">
          <a href="./home.php" class="home">Home</a>
          <a href="./banken.php" class="muurdecoratie">Couches</a>
          <a href="./doosjes.php" class="doosjes">Tabels</a>
          <a href="./opbergers.php" class="opbergers">Closet</a>
          <a href="./stoelen.php" class="stools">Chair</a>
          <a href="./muurdecoratie.php" class="gadgets">Wall Decoration</a>
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
  </main>