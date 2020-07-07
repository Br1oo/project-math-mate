<!-- 
<?php 
session_start();
if(!isset($_SESSION["loggedIn"])){

    header("Location: login.php");
}

?> 
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="language" content="NL" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="css/stylestyle.css" /> 
  <script src="javascript/tafelvan.js"></script>
  <title>Mathmate</title>
</head>
 <script>  
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script> 

<body>
  <main> 
    <section class="skewedBox2">   
    <div class="container2">   
    <header class="flex-container">  
      <a href="index.php">   
        <img src="img/logo.png" alt="logo" class="logo" /> 
      </a> 
      <nav id="item-navigatie">
        <ul>
          <li> <a href="factorizer.php">Factorizer</a> </li>  
          <li><a href="#">Spelletje </a></li>
          <li><a href="raden.php"> Raderen</a></li>
          <li><a href="uitlegpagina.php"> Uitleg</a></li>
          <li class="oke">
            <a href="#"> Reeksen</a>
            <div class="dropdown-content">
              <a href="Tafel van.php">Tafel van</a>
              <a href="breuken.php">Breuken</a>
              <a href="fibonatchi.php">Fibonatchi</a>
              <a href="machten.php">Machten</a>
              <a href="kwadraad.php">Kwadraad</a> 
              <a href="priem.php">Priem getallen</a> 
            </div>
          </li> 
        </ul>  
      </nav>    
      <section>  
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="Index.php">Home</a>  
          <a href="factorizer.php">Factorizer</a>
          <a href="raden.php">Raderen</a>
          <a href="#">Spelletje</a> 
          <a href="Tafel van.php">Tafel van</a>
          <a href="breuken.php">Breuken</a>
          <a href="fibonatchi.php">Fibonatchi</a>
          <a href="machten.php">Machten</a>
          <a href="kwadraad.php">Kwadraad</a> 
          <a href="priem.php">Priem getallen</a> 
          </div>  
          <span class="menuknop" onclick="openNav()">&#9776;</span>
          </section>  
    </header>  
      
    <p class="text"> Tafel van </p>
 
     <section> 
      <input type="text" class="invoerveld" placeholder="Invoer" id="getal1">       <br> 
   </section>  
   <section> 
    <button class="Rekenen"  onclick="Tafels()"> Bereken </button> <br>  
       <button class="Wissen" onclick="wissen()"> Clear </button>  <br>  
     </section> 
   <section>   
      <input type="text" class="invoerveld" placeholder="Invoer" id="getal2">    <br>   
    </section> 
 
     <section>  
        <div  class="Outputveld" id="output">   </div>
      </section>
   
  
</div>
</section>
  </main>
    
  <footer>
    <div class="footertje"> 
    <article class="textbox1">
    <p> Social media <br></p>
    <p> <img src="img/instagram.png" class="icons"alt="Icons"> Instagram<br> </p>
    <p> <img src="img/facebook.png" class="icons" alt="Icons"> Facebook <br></p>
    <p> <img src="img/snapchat.png" class="icons" alt="Icons"> Snapchat <br></p>
    <p> <img src="img/linkedin.png" class="icons" alt="Icons">  Linkndin<br></p> 
    </article>   
    <article class="textbox2"> 
    <p> Informatie<br></p>
    <p> Home<br> </p>
    <p> Spelletje <br></p>
    <p> Reeksen<br></p>
    <p> Contact<br></p>
    </article>  
    <div class="textbox3">  
    <p> Contact Us<br></p>
    <p> Telefoon: 0895628<br> </p> 
    <p> Mail: example@gmail.com<br> </p> 
    </div> 
    <article class="textbox4"> 
        <p> Adres<br></p>
        <p> Betaplein 18<br> </p>
        <p> 2328KS<br> </p> 
        <p> Lammenschansweg<br> </p> 
        </article> 
    </div>
    </footer>  

  
</body>

</html>