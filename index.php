<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="language" content="NL" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="css/stylestyle.css"/>
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
      <section class="skewedBox">   
      <div class="container">   
      <header class="flex-container">  
        <a href="index.php">   
          <img src="img/logo.png" alt="logo" class="logo" /> 
        </a> 
        <nav id="item-navigatie">
          <ul>
            <li> <a href="factorizer.php">Factorizer</a> </li>  
            <li><a href="#">Spelletje </a></li>
            <li><a href="raden.php"> Raderen</a></li>
            <li class="oke">
              <a href="#"> Reeksen</a>
              <div class="dropdown-content2">
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
            <a href="login.php">Inloggen</a> 
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
            <section class="knopje">   
             <a href="login.php"> <button type="button" class="knop">Inloggen</button> </a>
            </section> 
      </header>  


      


      
      <section class="welkomtekst">
        <p>
          Welkom op MathMate, <br> 
           Get your daily dose of MathMate.
        </p>
      </section> 

      <section class="welkompaginatekst">
        <p>
          Math Mate is de meest geavanceerde bereken site, <br> 
          wij maken uw leven een stuk makkelijker. 
          
        </p>
      </section> 
       
      <section class="okedan2">
       <a href="uitlegpagina.php"> 
        <button class="knop2">Uitleg</button>   
      </a>
      </section>  

<section class="plaatje"> 
<img src="img/Calculator2.png" alt="plaatj van Calculator"> 
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
