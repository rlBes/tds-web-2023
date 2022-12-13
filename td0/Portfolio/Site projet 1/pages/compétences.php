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
    <table>

<?php
  $data = yaml_parse_file('DATA/compétences.yaml');
  echo '<h2>'.$data['titre'].'</h2>';
?>
        <caption><h1>Compétences</h1></caption>
     
        <thead> <!-- En-tête du tableau -->
            <tr>
                <th>Domaines :</th>
                <th>Développement</th>
                <th>Réseau</th>
                <th>Langues</th>
            </tr>
        </thead>
         
        <tbody> <!-- Corps du tableau -->
            <tr>
                <td></td>
                <td>HTML</td>
                <td>Cisco Packet Tracer</td>
                <td>Anglais</td>
            </tr>
            <tr>
                <td></td>
                <td>CSS</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>PHP</td>
                <td></td>
            </tr>
        </tbody>

        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Niveau dans le domaine :</th>
                <th>*</th>
                <th>*</th>
                <th>B2</th>
            </tr>
        </tfoot>

     </table>

  </main>
</body>