<?php
$email = $_POST["absender"];
$message = $_POST["nachricht"];
$subject = $_POST["betreff"];

$recipient = "fabian@scherp.de";
$from = "From: Vorname Nachname<" . $email . ">";
$from .= "Content-type: text/html\r\n";

if (($message != "") && ($subject != "") && ($recipient != "")){
    echo "Successfully send";
    mail($recipient, $subject, $message, $email);
} else {
    echo "The textarea with the name \"Ihre Nachricht\" is empty";
}