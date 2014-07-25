<?php
include("_connection.php");
include("_header.php");
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
<?php
header( "refresh:0;url=../index.php" );    


?>
