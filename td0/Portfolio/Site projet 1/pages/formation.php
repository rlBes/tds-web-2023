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
<?php
  $data = yaml_parse_file('DATA/formation.yaml');
  
echo '<section class="section intro">
        <div class="container">
          <h1>'.$data['titre'].'</h1>
        </div>
      </section>';

echo '<section class="timeline">
  <ol>

    <li></li>
   
    <li>
      <div>
        <time>'.$data['2017-2018'].'</time> 
        <b>'.$data['Seconde'].'</b>
      </div>
    </li>

    <li>
      <div>
        <time>'.$data['2018-2019'].'</time> 
        <b>'.$data['Première'].'</b>
      </div>
    </li>

    <li>
      <div>
        <time>'.$data['2019-2020'].'</time> 
        <b>'.$data['Terminal STMG'].'</b>
      </div>
    </li>

    <li>
      <div>
        <time>'.$data['2020-2021'].'</time> 
        <b>'.$data['BTS NDRC'].'</b>
      </div>
    </li>

    <li>
      <div>
        <time>'.$data['2022-2024'].'</time> 
        <b>'.$data['BTS SIO'].'</b>
      </div>
    </li>
    
    <li></li>
    <li></li>
    <li></li>
  </ol>
  </div>
</section>'
?>
</main>

<footer>
    <a href="DATA/CV_RL-Besnouin.pdf" target="_blank">CV Roger-Louis Besnouin</a>
</footer>

</body>