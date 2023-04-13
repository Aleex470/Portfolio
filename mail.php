<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// Sujet du mail
$subject = "Contact depuis le portfolio - Objet automatique";

// Email de celui qui envoi le mail
$from = $_POST["mail"];

$body = $_POST["message"];


// Email du recipient --


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'ssl0.ovh.net'; //Adresse IP ou DNS du serveur SMTP
$mail->Port = 465; //Port TCP du serveur SMTP
$mail->SMTPAuth = 1; //Utiliser l'identification
$mail->CharSet = 'UTF-8';

if ($mail->SMTPAuth) {
    $mail->SMTPSecure = 'ssl'; //Protocole de sécurisation des échanges avec le SMTP
    $mail->Username = 'alexvisage2001@gmail.com'; //Adresse email à utiliser
    $mail->Password = 'Alexvis95470!'; //Mot de passe de l'adresse email à utiliser
}

$mail->From = trim('alexvisage2001@gmail.com'); //L'email à afficher pour l'envoi
$mail->FromName = trim($from); //L'alias de l'email de l'emetteur

$mail->AddAddress(trim($_POST["email_to"]));

$mail->Subject = $subject; //Le sujet du mail
$mail->WordWrap = 50; //Nombre de caracteres pour le retour a la ligne automatique
$mail->AltBody = $message; //Texte brut
$mail->IsHTML(false); //Préciser qu'il faut utiliser le texte brut
$mail->MsgHTML($message); //Forcer le contenu du body html pour ne pas avoir l'erreur "body is empty' même si on utilise l'email en contenu alternatif

if (!$mail->send()) {
    echo $mail->ErrorInfo;
} else {
    echo 'Message bien envoyé';
}
