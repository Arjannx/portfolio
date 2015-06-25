  <?php
    include('layouts/header.php');
    include('includes/config.php');
    include('layouts/menu.php');
  ?>

  <div class="container">
    <div class="jumbotron">
      <h1>Over mij</h1>
      <p>Hier vind je informatie over wie ik ben en wat ik doe etc.</p>
    </div>
    <?php
      echo "<b>Wie ben ik en wat doe ik?</b><br />";
      echo "Ik ben Arjan de Coninck en ik ben 17 jaar. Ik volg momenteel een ICT-opleiding op 'Da Vinci college' in Gorinchem. Ik ben een applicatie-ontwikkelaar.<br />";
      echo "Ik werk in mijn vrije tijd bij General Group uit Gorinchem. Bij dit bedrijf ben ik een 'Software Developer'";
      echo "<br /> <br />";
      echo "<b>Interesse in wat mijn projecten zijn?</b><br />";
      echo "Als u interesse heeft in wat voor projecten ik heb gemaakt, <a href='projecten.php'>Klik dan hier!</a>";
      echo " Hier ziet u de projecten waarmee ik bezig ben en welke ik al heb afgerond.";
      echo "<br /> <br />";
      echo "<b>Wilt u contact met mij opnemen?</b><br />";
      echo "Bekijk dan <a href='contact.php'>deze pagina</a>. Hier kunt u een formulier invullen. <br />";
      echo "U kunt ook contact met mij opnemen door te bellen. Het telefoonnummer kunt u vinden onderaan elke pagina.";
      echo "<br /> \n";
      echo "<br /> \n";
      echo "<br /> \n";
    ?>
  </div>

  <?php
    include('layouts/footer.php');
  ?>
