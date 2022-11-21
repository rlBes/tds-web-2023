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
        <a href="accueil.html">Accueil</a>
        <a href="a-propos.html">A propos</a>
        <a href="compétences.html">Compétences</a>
        <a href="éxpérience.html">Expériences</a>
        <a href="formation.html">Formation</a>
        <a href="contact.html">Contactez-nous</a>
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

<div class="contact">
  <form action="send.php" method="post">

    <label for="fname">Nom</label>
    <input type="text" id="fname" name="firstname" placeholder="Jean Neymar..">

    <label for="lname">E-Mail</label>
    <input type="text" id="email" name="email" placeholder="JN@truc.fr..">

    <label for="lname">Objet du message</label>
    <input type="text" id="lname" name="lastname" placseholder="Je conseil de changer..">

    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Je trouve ton site très beau.." style="height:200px"></textarea>

    <button type="submit">Submit</button>

</form>

</main>


</body>