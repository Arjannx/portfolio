  <?php
    include('layouts/header.php');
    include('includes/config.php');
    include('layouts/menu.php');
  ?>

  <div class="container">
    <div class="jumbotron">
      <h1>Contact</h1>
      <p>Hier kun je contact opnemen met mij doormiddel van een mail te sturen.</p>
    </div>
    <form method="post" action="formulierverzenden.php">
      <ul>
        Voornaam * <?php echo "<br />"; ?>
        <input class="text" type="text" name="voornaam" />
        <?php echo "<br /> <br />"; ?>
        Achternaam * <?php echo "<br />"; ?>
        <input class="text" type="text" name="achternaam" />
        <?php echo "<br /> <br />"; ?>
        <?php
          if($_SESSION['username']){
            $_POST['email'] == $_SESSION['email'];
          }
          else{?>
            E-mail * <?php echo "<br />"; ?>
            <input class="text" type="text" name="email" />
            <?php echo "<br /> <br />";
          }?>
        Bericht *
        <?php echo " <br />"; ?>
        <textarea cols="50" rows="12" name="bericht"></textarea>
        <?php echo "<br /> <br />"; ?>
        <input type="reset" value="Begin opnieuw" /> <input type="submit" name="versturen" value="Verstuur bericht" />
      </ul>
      <p>Alle velden gemarkeerd met een * zijn verplicht.</p>
    </form>
  </div>

  <?php
    include('layouts/footer.php');
  ?>
