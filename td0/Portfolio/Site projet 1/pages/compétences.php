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
    <table>

<?php
  $data = yaml_parse_file('DATA/compétences.yaml');
  echo '<caption><h1>'.$data['titre'].'</h1></caption>';
  echo '<thead> 
          <tr>
           <th>'.$data['Domaines'].'</th>
           <th>'.$data['Développement'].'</th>
           <th>'.$data['Réseau'].'</th>
           <th>'.$data['Langues'].'</th>
          </tr>
        </thead>

        <tbody> 
            <tr>
                <td></td>
                <td>'.$data['HTML'].'</td>
                <td>'.$data['Cisco Packet Tracer'].'</td>
                <td>'.$data['Anglais'].'</td>
            </tr>
            <tr>
                <td></td>
                <td>'.$data['CSS'].'</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>'.$data['PHP'].'</td>
                <td></td>
            </tr>
        </tbody>

        <tfoot> 
            <tr>
                <th>'.$data['Niveau'].'</th>
                <th>'.$data['NiveauDev'].'</th>
                <th>'.$data['NiveauRéseaux'].'</th>
                <th>'.$data['NiveauAnglais'].'</th>
            </tr>
        </tfoot>

     </table>'
?>  
  </main>
</body>