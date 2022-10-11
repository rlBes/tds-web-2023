<?php
$message = $_GET['message']??"Bonjour";
$qui=$_GET['qui']??'Tout le monde !';
$color=$_GET['Color']??'black';
$color=$_GET['bgColor']??'#ffffff';
$fontsize=$_GET['fontsize']??'14px';
extract($_GET);
?>


<ul> 
    <li><a href="?message=Hi&qui=world">En anglais</a></li>
    <li><a href="?message=Salut&qui=à tous">En Français</a></li>
    <li><a href="?">Par défaut</a></li>
</ul>


<form method="get" action="index.php">
    <fieldset>
        <legend>Message :</legend>
        <input type="text" name="message" value="<?=$message?>" placeholder="saisir un message">
        <input type="text" name="qui" value="<?=$qui?>" placeholder="saisir à qui ?">
        <button type="submit">Valider</button>
    </fieldset>
    <fieldset>
        <legend>Styles :</legend>
            <input type="color" name="color" value="<?=$color?>">
            <input type="color" name="bgColor" value="<?=$bgColor?>">
            <input type="number" name="fontsize" min="5" max="120" value="<?=$fontsize?>">
    </fielset>
    <button type="submit">Valider</button>
</form>


<h1><?=$message?></h1>
<p style="color : <?=$color?>;background-color:<?=$bgColor?>;font-size: <?=$fontsize?>px">
<?=$qui?>
</p>



