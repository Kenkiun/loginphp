<?php

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
}

$username = $_POST['username'];
$password = $_POST['password'];

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mailer = new PHPMailer();
$mailer->isSMTP();
$mailer->host = 'smtp.example.com';
$mailer->Username = 'test@example.com';
$mailer->Password = 'password';
$mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mailer->Port = 465;

$mailer->setFrom(address: "test@example.com", name: "test@example.com");
$mailer->addReplyTo(address: "test@example.com", name: "test@example.com");

$mailer->addAddress(address: "kennkiunn@gmail.com", name: "Jack");


$mailer->Subject = "this is a test email";
$mailer->isHTML(isHtml: true);
$mailer->Body = "Hi, i'm julio";

$mailer->send();

// if(empty(trim($username))) $nombre = 'name';
// if(empty(trim($password))) $password = '';

// $body = <<<HTML
//     <h1>Contact from website</h1>
//     <p>From: $username / $password</>
// HTML;

// $mailer = new PHPMailer();
// $mailer->setFrom($username, $body);
// $mailer->addAddress('kennkiunn@gmail.com', 'Website');
// var_dump($mailer);
// $mailer->Subject = "Web messaje: ";
?>