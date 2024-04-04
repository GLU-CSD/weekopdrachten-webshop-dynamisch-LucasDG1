<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Afrekenen</title>
  <link rel="stylesheet" href="./assets/css/afrekenen.css">
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

    </div>

    <div class="underbar">

      <div class="logo">
        <div class="hydralogo"><img src="/assets/img/Hydra.jpg" alt="Logo" width="60" height="60">
        </div>
      </div>
      <!-- de btns onder de topbar -->
      <div class="navigator">
      <a href="./home.php" class="home">Home</a>
          <a href="./muurdecoratie.php" class="muurdecoratie">Wall Decoration</a>
          <a href="./doosjes.php" class="doosjes">Tabels</a>
          <a href="./opbergers.php" class="opbergers">Closet</a>
          <a href="./stoelen.php" class="stools">Chair</a>
          <a href="./banken.php" class="gadgets">Couches</a>
      </div>

      <div class="opzoeken">
        <button class="searchBtn"></button>
        <button class="searchBtn"></button>
        <button class="searchBtn" id="shoppingcart"></button>




      </div>

    </div>


  </header>
  
  <main>

    <div class="content">
      <div class="block"></div>
      <div class="mainblock">
        <div class="title">Order</div>
        <h3>Your info</h3>
        <h4></h4>
        <h4 id="TyBe">Type of Order:</h4>
        <form name="myForm" action="/assest/pages/home.html" onsubmit="return validateForm()" method="post" required>
        <div>
          <input type="radio" id="radselect" name="drone" value="particulier" checked /><label
            for="radselect">Private</label>

        </div>
        <div>
          <input type="radio" id="radselect1" name="drone" value="Zakelijk" checked /><label
            for="radselect1">Buisness</label>

        </div>

        <h4 id="aanhef">Gender</h4>
        <div>
          <input type="radio" id="radselect" name="drone1" value="particulier" checked /><label
            for="radselect">MR.</label>

        </div>
        <div>
          <input type="radio" id="radselect1" name="drone1" value="Zakelijk" checked /><label
            for="radselect1">Ms.</label>

        </div>
        <div>
          <input type="radio" id="radselect1" name="drone1" value="Anders" checked /><label
            for="radselect1">Other</label>

        </div>
        <div>
          <input type="radio" id="radselect1" name="drone1" value="zegikniet" checked /><label for="radselect1">Rather dont say.</label>

        </div>
        <div class="name">
          <h4 id="naam">Name</h4>
          <div class="textbox">
            <div class="block1"></div>
            <label id="fnamebox" for="fname"></label>
            <input type="text" id="fname" placeholder="First name" name="fname"><br><br>
            <input type="text" id="bname" placeholder="" name="bname"><br><br>
            <input type="text" id="lname" placeholder="Last Name" name="lname"><br><br>
            <div class="block2"></div>
          </div>
        </div>
        <div class="postcode">
          <h4 id="post">Postcode</h4>
         
          
          <input type="text" id="postcode1" placeholder="1234AB" name="postcode"><br><br>
       

        </div>
        <div class="huisnummer">
          <h4 id="huisnbm">House number</h4>
         <div class="flexhuisNbm">
          <div class="block3"></div>
          <input type="text" id="huisnummer1" placeholder="Nr." name="huisnummer"><br><br>
          <input type="text" id="huisnummer1" placeholder="extra" name="huisnummer"><br><br>
          <div class="block4"></div>
        </div>
</div>
<div class="land">
  <h4 id="h4land">Country</h4>
  <div class="dropdown">
  <select name="landen" id="landen">
    <option value="nederland">Netherlands</option>
    <option value="belgie">Belgium</option>
    <option value="duitsland">Germany</option>
    <option value="luxemburg">Luxemburg</option>
  </select>

</div>
</div>
<div class="afleveren">
  <h4 id="aflever">Delivery Adres </h4>
  <div>
    <input type="radio" id="radselect4" name="drone1" value="Adres" checked /><label
      for="radselect">Deliver on adres above</label>

  </div>
  <div>
    <input type="radio" id="radselect4" name="drone1" value="Zakelijk" checked /><label
      for="radselect1">Deliver on other adres </label>

  </div>
</div>
<div class="email">
  <h4 id="emailadres">E-mail</h4>
  <div class="block5"></div>
  <input type="text" id="email" placeholder="E-mail" name="email"><br><br>
  
  <div class="block6"></div>
</div>
<div class="telefoonnummer">
  <h4 id="telefoon">Phone number</h4>
  <div class="block7"></div>
  <input type="text" id="telefoonN" placeholder="Phone number" name="telefoonnummer"><br><br>
  
  <div class="block8"></div>
</div>
<div class="geboortedatum">
  <h4 id="geboorte">Date of birth</h4>
  <div class="block9"></div>
  <input type="text" id="geboortenD" placeholder="dd-mm-yy" name="geboortedatum"><br><br>
  
  <div class="block10"></div>
</div>
<div class="gegevensBewaren">
<h2 class="bewaarG">Keep your info</h2>
<h2 class="bewaarG">Better for next time</h2>
</div>
<div class="wachtwoord">
  <h4 id="wachtwoordT">Password</h4>
  <input type="password" id="pwd" name="pwd" minlength="8" placeholder="Min. 8"><br><br>
</div>
<div class="wachtwoordB">
  <h4 id="wachtwoordT2">Password confirm</h4>
  <input type="password" id="pwd1" name="pwd" minlength="8" placeholder="Min. 8 "><br><br>
</div>
</form>
<a href="./dankuwel.php"><button type="button" class="buttonSend">Send</button></a>

        



      </div>
      <div class="block"></div>
    </div>


  </main>
<script>
function validateForm() {
  var fname = document.getElementById("fname").value;
  var bname = document.getElementById("bname").value;
  var lname = document.getElementById("lname").value;
  var postcode = document.getElementById("postcode1").value;
  var huisnummer = document.getElementById("huisnummer1").value;
  var email = document.getElementById("email").value;
  var telefoon = document.getElementById("telefoonN").value;
  var geboortedatum = document.getElementById("geboortenD").value;
  var pwd = document.getElementById("pwd").value;
  var pwd1 = document.getElementById("pwd1").value;

  if (fname == "" || bname == "" || lname == "" || postcode == "" || huisnummer == "" || email == "" || telefoon == "" || geboortedatum == "" || pwd == "" || pwd1 == "") {
    alert("All fields must be filled out");
    return false;
  } else {
    // If all fields are filled out, submit the form
    document.forms["myForm"].submit();
  }
}


</script>
</body>

</html>