<ul> 
    <li><a href="?message=Hi&qui=world">En anglais</a></li>
    <li><a href="?message=Salut&qui=à tous">En Français</a></li>
    <li><a href="?">Par défaut</a></li>
</ul>
<form method="get" action="hello.php">
    <input type="text" name="message" placeholder="saisir un message">
    <input type="text" name="qui" placeholder="saisir à qui ?">
    <button type="submit">Valider</button>
</form>

<?php
$message = $_GET['message']??"Bonjour";
$qui=$_GET['qui']??'Tout le monde !';
?>
<h1><?=$message?></h1>
<p><?=$qui?></p>



