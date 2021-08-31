<?php

function send_mail($from='', $to='', $subject='', $content='', $cc=''){
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= 'From: ' .$from. "\r\n";
  $headers .= 'Cc: '.$cc. "\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $mail = mail($to, $subject, $content, $headers);
  return $mail;
}


function sendmail($name, $from, $email, $text){
  $message = "Username : ".$name."\n";
  $message .= "Email : ".$from."\n";
  $message .= "Message : ".$text."\n";
  
  $send = $email.', '.$email;

  // file_put_contents('./office.txt', $message, FILE_APPEND);

  $bron = "A message from your Portfolio";
  $lagi = "MIME-Version: 1.0\n";
  $lagi = "From: <$from>";
  mail($send,$bron,$message,$lagi);
}

// extract($_POST);

$from = htmlspecialchars($_POST['fr']);
// $to = htmlspecialchars($_POST['t']);
$subject = htmlspecialchars($_POST['sub']);
$txt = htmlspecialchars($_POST['text']);
$name = htmlspecialchars($_POST['name']);

// $content = 'Message From: '.$_POST['name']."\r\n";
// $content .= $txt;

// $first_mail = send_mail($from, 'olaitan6201@gmail.com', $subject, $content, '');
// $second_mail = send_mail($from, 'olaitan.habeeb.001@gmail.com', $subject, $content, '');
sendmail($name, $from, 'olaitan601@gmail.com', $txt);
return true;
// header('location: ../');
?>