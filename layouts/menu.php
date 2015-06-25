<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a href="projecten.php">Projecten</a></li>
                <li><a href="overmij.php">Over mij</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                if($_SESSION['username']){
                  ?>
                  <li><a href="logout.php">Logout</a></li>
                  <?php
                }
              ?>
              </ul>
            </div>
      </div>
    </nav>
