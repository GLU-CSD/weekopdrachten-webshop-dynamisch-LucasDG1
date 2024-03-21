<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="/module2/assets/css/home.css">
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
    <?php include_once("./assets/core/header.php") ?>
    <article>
      <!-- de homepage tekst -->
      <div class="textleft">
        <div class="maintext">
<div class="headtextflex">
  <div class="block"></div>
          <div class="headtext">
            <h4>Welkom bij DecorMasters.nl!</h4>
          </div>

          <div class="block1"></div>
        </div>
        <aside>
          <!-- de fotos rechts -->
          <div class="pictureboxflex">
            <div class="block3"></div>
          <div class="picturebox">
            <div class="w3-content w3-section" style="max-width:500px">
              <div class="asideBox">
                <img class="mySlides w3-animate-left" src="../assets/img/room1.jpg" style="width:100%" alt=".">
                <img class="mySlides w3-animate-left" src="../assets/img/room2.jpg" style="width:100%" alt=".">
                <img class="mySlides w3-animate-left" src="../assets/img/room3.jpg" style="width:100%" alt=".">
                <img class="mySlides w3-animate-left" src="../assets/img/room4.jpg" style="width:100%" alt=".">
                <img class="mySlides w3-animate-left" src="../assets/img/room5.jpg" style="width:100%" alt=".">
    
    
              </div>
    
    
            </div>
    
          </div>
          <div class="block4"></div>
        </div>
        </aside>







        </div>


      </div>

      <div class="textbox1">
        <div class="undertext1">
          <h4>Breng de schoonheid van creativiteit in huis met onze prachtige selectie decoratieve stukken.</h4>
        </div>
      </div>
      <div class="textbox2">
        <div class="undertext2">
          <h4>Ontdek onze zorgvuldig samengestelde collectie van handgemaakte en design items, elk gekozen om een
            vleugje persoonlijkheid en verfijning toe te voegen aan uw interieur.</h4>
        </div>
      </div>
      <div class="textbox3">
        <div class="undertext3">
          <h4>Bij DecorMasters.nl geloven we in de kracht van schoonheid en inspiratie. Daarom streven we ernaar om
            u een moeiteloze en plezierige winkelervaring te bieden, met snelle verzending, veilige betalingsopties
            en uitstekende klantenservice.</h4>
        </div>
      </div>


    </article>

    <div class="background-image"></div>
    <div class="content">

    </div>


<!-- de hele footer -->

<?php include_once("./assets/core/footer.php");?>

  </main>
  <script>
    //de fotos die elken 3,5 seconden veranderen
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) { myIndex = 1 }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 3500);

    }
  </script>
</body>

</html>