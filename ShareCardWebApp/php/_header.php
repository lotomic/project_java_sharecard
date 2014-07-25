<?php
session_start();
    if(isset($_SESSION["email"])){
        $korisnik=$_SESSION['email'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../resources/css/style.css">
        <title>Home</title>
    </head>
    <body>
          <div class="zaglavlje2">
           <a href="pocetna.php" class="naslovi"><img class="slika3" src="../resources/slike/ic_launcher.png" alt="back" width="40" height="40" >Welcome to ShareCard</a>
            <a href="onlineBazaVizitki.php" class="naslovi">Online Baza vizitki</a>
              <label> </label>
              <label > You are logd in as: <?php echo $korisnik; ?><br></label>
            <div class="">
            <a class="logout" href="logout.php">Log out</a>
        </div>
          </div>
        
    </body>
</html>
