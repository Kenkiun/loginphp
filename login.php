<?php

$username = $_POST['username'];
$password = $_POST['password'];
$message = $_POST['message'];

if(!$username AND !$password AND !$message) {
  header('Location: index.php');
  return false;
} else {
  inlcude('lib/template.php');

  include "class.pfpmailer.php";
  include "class.smtp.php";

  $email_user = "";
  $email_password = 'our password';
  $the_subject = "Message recieved from the web";
  $address_to = 'mail where we want to send the form';
  $form_name = 'Programing course';
  $phpmailer = newPHPMailer();
  $phpmailer->Username = $email_user;
  $phpmailer->Password = $email_password;
  $phpmailer->SMTPSecure = 'ssl';
  $phpmailer->Port = 465;
  $phpmailer->isSMTP();
  $phpmailer->SMTPAuth = true;
  $phpmailer->setFrom($phpmailer->Username,$from_name);
  $phpmailer->AddAddress($address_to);
  $phpmailer->fromName = 'Programing Online';
  $phpmailer->Subject = $the_subject;
  $phpmailer->Body .= $mensage_mail;
  $phpmailer->IsHTML(true);

  if(!phpmailer->Send()) {
    header("Location: contact.php?msg-off");
  } else {
    header("Location: contact.php?msg=ok");
  }
}


?>