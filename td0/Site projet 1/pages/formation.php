<!DOCTYPE html>
<html>
  <head>
     <title>site présentation</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width,
          initial-scale=1">
          <link rel="stylesheet" href="css/projet.css">
          <link rel="stylesheet" href="css/bg.css">
    </head>
<body>
  <main>
      <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="accueil.php">Accueil</a>
        <a href="a-propos.php">A propos</a>
        <a href="compétences.php">Compétences</a>
        <a href="éxpérience.php">Expériences</a>
        <a href="formation.php">Formation</a>
        <a href="contact.php">Contactez-nous</a>
      </div>
    
    <div id="main">
      <button class="openbtn" onclick="openNav()">☰</button>  
    </div>
    
    <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
    </script>
  
</header>

<main>
<section class="section intro">
  <div class="container">
    <h1>FORMATIONS</h1>
  </div>
</section>

<section class="timeline">
  <ol>

    <li></li>
   
    <li>
      <div>
        <time>2017 – 2018</time> 
        <b>Seconde Générale | Mezeray | Argentan</b>
      </div>
    </li>

    <li>
      <div>
        <time>2018 – 2019</time> 
        <b>Première STMG | Mezeray | Argentan</b>
      </div>
    </li>

    <li>
      <div>
        <time>2019 – 2020</time> 
        <b>Bac STMG | Saint François Sales | Alençon</b>
      </div>
    </li>

    <li>
      <div>
        <time>2020 – 2021</time> 
        <b>BTS NDRC | E2SE | Caen</b>
      </div>
    </li>

    <li>
      <div>
        <time>2022 - 2024</time> 
        <b>BTS SIO option SISR | Sainte-Ursule | Caen</b>
      </div>
    </li>
    
    <li></li>
    <li></li>
    <li></li>
  </ol>
  </div>
</section>
</main>

<footer>
    <a href="CV_RL-Besnouin.pdf" target="_blank">CV Roger-Louis Besnouin</a>
</footer>

</body>