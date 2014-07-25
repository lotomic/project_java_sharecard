<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
        <script type="text/javascript" src="js/jquery-1.8.0.js"></script>
   
        <title>ShareCard</title>
        
    </head>

    <body>
       
        
        <div class="slika">
        
            <img alt="pocetna" src="resources/slike/logo.png">
            </div>
            <div class="login">
                <form  id="login_forma" enctype="multipart/form-data" method="post" name="login_forma" action="php/obradaLogin.php">
                    <h1 class="naslov">Welcome!</h1>
                    <input type="text" required="required" name="login_name" id="login_name" class="login_name" value="<?php if(isset($_COOKIE["email"])){ echo htmlentities($_COOKIE["email"]);}?>" placeholder="example@gmail.com"/>
                  
                    <p class="error">
                    </p>
                    <input type="password" required="required"  value="" name="login_pass" id="login_pass" class="login_pass" placeholder="Password"/><br>
                     <p class="error">
                    <?php
                       if(isset($_SESSION["error"]["login_pass"])){
                           echo $_SESSION["error"]["login_pass"];
                       } 
                    ?>
                    </p>
                    <input type="checkbox" name="check" id="check">Remember me</input><br>
                    <input type="submit" id="loginn" value="Sing in" name="loginn" class="gumb"/><br>
                </form>
              
                       
             <br><span id="forgot" class="link">Forgot password?</span>
			 <script type="text/javascript">
			    $("#forgot").click(function () {
					$("#zaboravljen").toggle("slow");
					});
			 </script>
							
			<ul id="zaboravljen" >				
			    <li>
			        <form name="lostpass" action="" method="post" >                            
			            <input name="re_email" required="required" type="text" id="email" class="forgot_pass" placeholder="example@gmail.com" size="22" ><br>
			            <input type="submit" name="lostpass" id="lostpass" value="Send" class="gumb">
			        </form>
			    </li> 
			</ul>	
                <div id="linkovi">
                        <label>Dont have ShareCard account?<a href="php/registracija.php" class="link"> Registration</a></label><br>
                    <label><a href="php/vise.php" class="link">Learn more about ShareCard</a></label>
                </div>
            </div>
        <div class="pocetna_slika" id="slika">
            <img id="slikica" src="resources/slike/pocetna_slika_2.png" alt="apstract art :)"/>
        </div>
    </body>
</html>
<?php
    if(isset($_SESSION["error"])){
        unset($_SESSION["error"]);
    }
include('php/_footer.php');
?>