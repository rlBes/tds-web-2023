<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST[''];
    $to = "rl.besnouin@sts-sio-caen.info";
    $objet = $_POST['objet'];
    $message = "PHP Mail fonctionne parfaitement";
    $headers = "De :" . $from;
    mail($to,$objet,$message, $headers);
    echo "L'email a été envoyé.";
    header("Location : successSend.php");
    ?>