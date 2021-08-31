<?php

function send_mail($from='', $to='', $subject='', $content='', $cc=''){
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= 'From: ' .$from. "\r\n";
  $headers .= 'Cc: '.$cc. "\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $mail = mail($to, $subject, $content, $headers);
  return $mail;
}

// extract($_POST);

$from = htmlspecialchars($_POST['fr']);
// $to = htmlspecialchars($_POST['t']);
$subject = htmlspecialchars($_POST['sub']);
$txt = htmlspecialchars($_POST['text']);

$content = 'Message From: '.$_POST['name']."\r\n";
$content .= $txt;

$first_mail = send_mail($from, 'olaitan6201@gmail.com', $subject, $content, '');
$second_mail = send_mail($from, 'olaitan.habeeb.001@gmail.com', $subject, $content, '');
return true;
// header('location: ../');
?>