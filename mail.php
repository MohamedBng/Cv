<?php
$sujet= $_POST['sujet'];
$destinataire= 'mohamed.bengrich@outlook.fr';
$mail = $_POST['mail'];
$confirmationMail = $_POST['confirmationMail'];
$nom = $_POST['nom'];

$entete  = 'MIME-Version: 1.0' . "\r\n";
$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$entete .= 'From: ' . $mail . "\r\n";

$message = '<p><b>Nom : </b>' . $_POST['nom'] . '<br>
            <b>Message : </b>' . $_POST['message'] . '</p>';
             
 if (!empty($sujet) and !empty($message) and !empty($mail) and !empty($nom)) {
  if ($mail===$confirmationMail) {
     $maill= mail($destinataire, $sujet, $message, $entete);
  }
           
        }

?>