<?php 
   include 'config.php';
?>

<html>
    <head>
        <title>Login Facebook</title>
    </head>
    <body>
        <a href="https://www.facebook.com/v3.2/dialog/oauth?client_id=<?php echo FB_APP_ID ?>&redirect_uri=<?php echo FB_REDIRECT_URL ?>&state=localhost"
           ><button style="background:blue; color:white">Login With Facebook </button></a>
    </body>
</html>
