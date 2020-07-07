<?php
session_start();
if(isset($_SESSION["loggedIn"])){
if($_SESSION["loggedIn"] == True){
    header("Location: index.php");
}
}

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="css/stylestyle.css">
</head> 
<body>
<section class="skewedBox">
    <div class="container">
    <h1>je moet ingelogd zijn om de bereken pagina's te bekijken</h1>  
    <section>  
    <article class="loggin">  
    <form action="login1.php" method="POST" class="form2">
       <p> Email</p>   <input type="email" name="email" id="email">  
       <p>  Wachtwoord</p>  <input type="password" name="wachtwoord" id="wachtwoord"><br><br>
        <input type="submit" value="inloggen">

    </form>
    <div class="link2">
    <a href="aanmeldform.php"><p>Nog geen account? Klik hier</p></a>
    <a href="index.php"><p>Naar de homepage gaan? Klik hier</p></a>
    </div> 
</article>  
</section> 
    </div>   
</section>

</body>
</html>