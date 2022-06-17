<?php
function sendEmail($toEmail,$fromEmail,$sujetEmail,$mesaageEmail)
{
$to = $toEmail;
$sunjet = $sujetEmail;
$message = $mesaageEmail;
$headers = 'From: ' .$fromEmail .'' . "\r\n" . 'Reply-To: ' . $fromEmail .'' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
mail($to, $sunjet, $message, $headers);

}