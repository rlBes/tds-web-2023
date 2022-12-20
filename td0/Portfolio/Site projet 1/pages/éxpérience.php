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
        <a href="index.php">Accueil</a>
        <a href="a-propos.php">A propos</a>
        <a href="compétences.php">Compétences</a>
        <a href="éxpérience.php">Expériences</a>
        <a href="formation.php">Formation</a>
        <a href="contact.php">Contactez-nous</a>
        <a href="https://www.linkedin.com/in/roger-louis-besnouin-b51014211/" target="_blank"><img id="linkedin" src="img/linkedin.png"></a>
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
$data = yaml_parse_file('DATA/éxperience.yaml');

echo '<hr noshade="noshade">
<ul class="exp">
<p>
<b>'.$data['métier1'].'<br>'
.$data['InfoMétier1'].'<br></b>
<hr noshade="noshade">
<li>'.$data['tacheslivreur1'].'</li>
<li>'.$data['tacheslivreur2'].'</li>
<li>'.$data['tacheslivreur3'].'</li>
<li>'.$data['tacheslivreur4'].'</li>
</p>
<hr noshade="noshade">
<p>
<b>'.$data['métier2'].'<br>'
.$data['InfoMétier2'].'<br></b>
<li>'.$data['tachesAgent1'].'</li>
<li>'.$data['tachesAgent2'].'</li>
<li>'.$data['tachesAgent3'].'</li>
<li>'.$data['tachesAgent4'].'</li>
<li>'.$data['tachesAgent5'].'</li>
</p>
<hr noshade="noshade">
<p>
<b>'.$data['métier3'].'<br>'
.$data['InfoMétier3'].'<br></b>
<li>'.$data['tachesResponsable1'].'</li>
<li>'.$data['tachesResponsable2'].'</li>
<li>'.$data['tachesResponsable3'].'</li>
<li>'.$data['tachesResponsable4'].'</li>
<li>'.$data['tachesResponsable5'].'</li>
<li>'.$data['tachesResponsable6'].'</li>
</p>
<hr noshade="noshade">
<p>
<b>'.$data['métier4'].'<br>'
.$data['InfoMétier4'].'<br></b>
<li>'.$data['tachesAssistant1'].'</li>
<li>'.$data['tachesAssistant2'].'</li>

</p>
    </ul>
    <hr noshade="noshade">'
?>

</main>

<footer>
<a href="DATA/CV_RL-Besnouin.pdf" target="_blank">CV Roger-Louis Besnouin</a>
</footer>


</body>