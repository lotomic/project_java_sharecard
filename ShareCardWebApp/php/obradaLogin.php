<?php
session_start();
include('_connection.php');

if(isset($_POST['loginn'])){


    $var =$_POST["login_name"];
    $pass = $_POST["login_pass"];
 
    }
    if(count($_SESSION["error"])>0){
	header('Location: ../index.php');
	exit;
}
   $upit = mysql_query("SELECT * FROM members WHERE email ='$var'");
   $num = mysql_num_rows($upit);


   		while($row=mysql_fetch_array($upit)){
			$email=$row['email'];
			$pass1=$row['password'];
		}
   if($var == $email && $pass == $pass1){
       if(isset($_POST['check'])){
           setcookie("email",$var,time()+604800);
       }else{
           setcookie("email",$var,time()-604800);
       }

       $_SESSION["email"]=$var;
       header('Location: pocetna.php');
       exit;

   }else{
        header('Location: ../index.php');
        $_SESSION["error"]["login_pass"]="Kriva lozinka ili email adresa";

   }


if(count($_SESSION["error"])>0){
	header('Location: ../index.php');
	exit;
}

?>
