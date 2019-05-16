<?php
$email=$_POST["absender"];
$message=$_POST["nachricht"];

$empfaenger = "fabian@scherp.de";
$from = "From: Vorname Nachname<".$email.">";
$betreff = "Kontaktanfrage";

$return=mail($empfaenger, $betreff, $message, $email);

if ($return){
    echo "Mail successfully sended";
}else{
    echo "Error 404";
}
