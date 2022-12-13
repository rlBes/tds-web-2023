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

<?php $data = yaml_parse_file('DATA/contact.yaml');
  
  
echo '<div class="contact">
  <form action="send.php" method="post">';

echo '<label for="fname">'.$data['Nom'].'</label>
    <input type="text" id="fname" name="firstname" placeholder="Jean Neymar..">

    <label for="email">'.$data['Email'].'</label>
    <input type="text" id="email" name="email" placeholder="JN@truc.fr..">

    <label for="object">'.$data['Objet'].'</label>
    <input type="text" id="object" name="object" placeholder="Je conseil de changer..">

    <label for="message">'.$data['Message'].'</label>
    <textarea id="message" name="message" placeholder="Je trouve ton site très beau.." style="height:200px"></textarea>

    <input type="submit">

</form>'

?>
</main>


</body>