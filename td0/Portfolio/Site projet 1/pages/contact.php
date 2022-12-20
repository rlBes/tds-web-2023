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

<?php $data = yaml_parse_file('DATA/contact.yaml');
  
  
echo '<div class="contact">
  <form action="send.php" method="post">';

echo '<label for="fname">'.$data['name'].'</label>
    <input type="text" id="fname" name="firstname" placeholder="Jean Neymar..">

    <label for="email">'.$data['email'].'</label>
    <input type="text" id="email" name="email" placeholder="JN@truc.fr..">

    <label for="object">'.$data['objet'].'</label>
    <input type="text" id="object" name="object" placeholder="Je conseil de changer..">

    <label for="message">'.$data['message'].'</label>
    <textarea id="message" name="message" placeholder="Je trouve ton site très beau.." style="height:200px"></textarea>

    <input type="submit">

</form>'
?>
</main>
<footer>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lf63ZMjAAAAAA4Urs9K6jVlpE1xiamEVxoOAjp7"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6Lf63ZMjAAAAAA4Urs9K6jVlpE1xiamEVxoOAjp7', {action: 'login'}).then(function(token) {
       ...
    });
});
</script>
</footer>

</body>