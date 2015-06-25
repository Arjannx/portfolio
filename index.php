  <?php

    include('layouts/header.php');
    include('includes/config.php');
    include('layouts/menu.php');
  ?>
  <div class="container">

<!-- sliderzooi -->
    <div class="slider" style="margin: 0px auto 50px auto">
      <img src="images/adcdev.jpg">
      <img src="images/projectwebwinkels.jpg">
      <img src="images/projectwebwinkels.jpg">
    </div>
    <script>
    $('.slider').slick({
      infinite: true,
      speed: 500,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true
    });
    </script>

    <div class="row">
      <div class="col-sm-4">
          <h3>Mijn projecten</h3>
          <p><a href="projecten.php">Klik hier</a> om naar mijn projecten te gaan.</p>
          <p>Hier vind je informatie over de projecten waar ik momenteel mee bezig ben of die ik al heb afgerond.</p>
          <?php echo "<br /> \n"; ?>
      </div>
      <div class="col-sm-4">
        <h3>Over mij</h3>
        <p><a href="overmij.php">Klik hier</a> om naar de `Over mij`-pagina te gaan.</p>
        <p>Hier vind je informatie over mij, wie ik ben etc.</p>
        <?php echo "<br /> \n"; ?>
      </div>
      <div class="col-sm-4">
        <h3>Contact</h3>
        <p><a href="contact.php">Klik hier</a> om naar de `contact`-pagina te gaan.</p>
        <p>Hier kun je een formulier invullen om in contact te komen met mij.</p>
        <?php echo "<br /> \n"; ?>
        <?php echo "<br /> \n"; ?>
      </div>
    </div>
  </div>

  <?php
    include('layouts/footer.php');
  ?>
