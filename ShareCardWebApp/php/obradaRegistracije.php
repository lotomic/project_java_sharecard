<?php
session_start();
include('_connection.php');
 
if(isset($_POST["submitt"])){

   $email   = mysql_real_escape_string($_POST["email_reg"]);
   $pass    = mysql_real_escape_string($_POST["pass"]);
   $repass  = mysql_real_escape_string($_POST["repass"]);
   $_SESSION["tmp"]["email_reg"]=$email;
   $upit = mysql_query("SELECT email FROM members");

   while($row=mysql_fetch_array($upit)){
       $mil = $row["email"];
       if($email == $mil){
            $_SESSION["error"]["email_reg"]="Email već postoji";
        
         }
   }
   if($pass == $repass){
       $insert = "INSERT INTO members (password,email) VALUES ('$pass','$email')";
       $izvrsi = mysql_query($insert);

      
       header("Location: pocetna.php");

   
   }else{
       $_SESSION["error"]["repass"]="Lozinke se ne podudaraju";
   }
}
if(isset($_SESSION["error"])){
    header("Location: registracija.php");

}

?>
