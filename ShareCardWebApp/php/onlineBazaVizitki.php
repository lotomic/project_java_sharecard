<?php
include("_connection.php");
include ("_header.php");
$upit = mysql_query("SELECT * FROM sharecard");
 if(isset($_GET["r"])){
    $id_korisnika = mysql_real_escape_string($_GET["r"]);
    $card = mysql_query("SELECT * FROM sharecard WHERE shareCardId ='$id_korisnika'");   

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Online shared sards</title>
    </head>
    <body><br><br><br><br><br>
        <h1>Shared Card</h1>
        <?php
       
        while ($row=mysql_fetch_array($card)){
        $shareCardId=$row["shareCardId"];
        $timeline=$row["timeline_timelineId"];
        $slika=$row["photo"];
        echo "<div class='podaci'>Name: ".$name=$row["name"]."<br>";
        echo "Surname: ".$surname=$row["surname"]."<br>";
        echo "Phone: ".$phone=$row["phone"]."<br>";
        echo "Adress: ".$address=$row["address"]."<br>";
        echo "Email: ".$email=$row["email"]."<br>";
        echo "My Timeline: <a href ='onlineBazaVizitki.php?d=".$timeline."'/>My Timeline</a></div><br>";
        }
        echo"
        <div class='vizitka'>
            <img src='../resources/slike/Vizit_jaandric.png' alt='vizit''/>
        </div>
        ";
?>

<?php
 }else if(isset($_GET["d"])){
     echo "

     <div class='rasume'>
        <img src='../resources/slike/rasume.png' alt='rasume'/>

     </div>
     ";
 }else{
?>
        <form method="get" enctype="multipart/form-data" name="baza_forma">
        <br><br><br>
     <div class="slika4">
     <img src="../resources/slike/slika4.png" alt="slika4">
     </div>
        <table class="tablica">
            <thead>

              <tr >
                  <th colspan="6">
                   <h2>All Shared Cards</h2>
                  </th>
              </tr>
              <tr>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Details</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        while ($row=mysql_fetch_array($upit)){
                           $shareCardId=$row["shareCardId"];
                           echo "<tr><td>".$name=$row["name"]."</td>";
                           echo "<td>".$surname=$row["surname"]."</td>";
                           echo "<td>".$phone=$row["phone"]."</td>";
                           echo "<td>".$address=$row["address"]."</td>";
                           echo "<td>".$email=$row["email"]."</td>";
                           
                           echo "<td><a class='gumb' href='onlineBazaVizitki.php?r=".$shareCardId."'>See card</a></td></tr>";
                        }
                    ?>
                </tr>
            </tbody>
            <tfoot></tfoot>
        </table>
            
        </form>
    </body>
</html>
<?php
}
    if(isset($_POST["pregled"])){
        $nesto = "marko";
        echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>".$nesto;
    }
    include("_footer.php");
?>