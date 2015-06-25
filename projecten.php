  <?php
    include('layouts/header.php');
    include('includes/config.php');
    include('layouts/menu.php');
  ?>

  <div class="container">
    <div class="jumbotron">
      <h1>Mijn projecten</h1>
      <p>Hieronder staan de projecten die ik al heb afgerond en welke programmeertalen ik beheers.</p>
    </div>

    <?php
      echo "<b>Afgeronde projecten:</b><br />";

      $stmt = $db->prepare('select * from projecten');
      $stmt->execute();
      $projects = $stmt->fetchAll();
    ?>
    <ul>
      <?php
      foreach($projects as $project)
      {
      ?>
        <li><b><?php echo $project['titel']." "; ?></b><a class='example-image-link' href='<?php echo $project['image']; ?>' data-lightbox='<?php echo $project['titel']; ?>'>Klik hier voor een screenshot.</a></li>
        <!-- <p>Ik heb een scripts gemaakt voor het downloaden van prijslijsten en het automatisch importeren van producten in webwinkels. Dit was in PHP/MySQL.</p> -->
        <p><?php echo $project['beschrijving']; ?></p>
      <?php
      }
      ?>
    </ul>

    <?php
    $_SESSION['username'] = strtolower($_SESSION['username']);
    if($_SESSION['username'] == "admin"){
      if(!empty($_POST['titel']) && !empty($_POST['beschrijving'])){

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        $imageFileType = strtolower($imageFileType);

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $stmt = $db->prepare('insert into projecten(titel, beschrijving, image) values(:titel,:beschrijving,:image)');
        $stmt->execute(array(
            ':titel' => $_POST['titel'],
            ':beschrijving' => $_POST['beschrijving'],
            ':image' => 'images/' . $_FILES['image']['name']
          ));
      }
    ?>

    <form method="post" enctype="multipart/form-data">
      <?php echo "<b>Voeg een project toe: <br /> </b>" ?>
      <?php echo "Titel:<br /> " ?>
      <input type="text" name="titel"/>
      <?php echo "<br /> Beschrijving:<br /> " ?>
      <input type="text" name="beschrijving"/>
      <?php echo "<br />Image:<br /> " ?>
      <input type="file" name="image"/>
      <?php echo "<br />" ?>
      <input type="submit" name="submit"/>
    </form>
    <?php
    }
      echo "<br />";
      echo "<b>Programmeertalen waarmee ik gewerkt heb:</b><br />";
    ?>
      <ul>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>jQuery</li>
        <li>Javascript</li>
        <li>Bootstrap</li>
        <li>Prestashop 1.5 (Voor webshops)</li>
        <li>Yii Framework</li>
      </ul>

    <?php
      echo "<br />";
      echo "<b>Wilt u dat ik iets voor u maak?</b><br />";
      echo "Als u wilt dat ik voor u een project maak, vul dan zeker even het contact formulier in of neem contact op via de telefoon. <br />";
      echo "Het telefoonnummer staat onderaan elke pagina! Het contactformulier kunt u <a href='contact.php'>HIER</a> vinden.";
      echo "<br /> <br />";
      echo "<br /> \n";

    ?>
  </div>

  <?php
    include('layouts/footer.php');
  ?>
