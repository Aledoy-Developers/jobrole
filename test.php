<?php

ob_start();
session_start();
include('conn.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';


$subject = 'You registered for Next Frontier Conference 2026';
$body = "Testing email <br><br>

Warm regards,<br>
<strong>The Jobrole Consulting Team</strong><br>
info@jobroleng.com<br>
<a href='https://www.jobroleng.com'>www.jobroleng.com</a><br>
";

// ✅ Modern PHPMailer usage
$mail = new PHPMailer(true);

// SMTP Settings
// $mail->IsSMTP();
// $mail->Port = 465;
// $mail->SMTPAuth = true;
//sendgrid
// $mail->Username = 'aledoysolutions2@gmail.com';
// $mail->Password = 'zuvw gzmb ljea kcga';  //yahoo app password for noreply email 
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPSecure = 'ssl';
// $mail->From = 'aledoysolutions2@gmail.com';
$mail->FromName = "JOBROLE WRBSITE";

// Email Headers
$mail->setFrom('noreply@jobroleng.com', 'Next Frontier');
$mail->addAddress('luabikoye@yahoo.com');
$mail->addReplyTo('info@jobroleng.com', 'Jobrole Consulting');

// Content
$mail->isHTML(true);
$mail->CharSet = 'UTF-8';
$mail->Subject = $subject;
$mail->Body    = $body;

// Optional Debugging
// $mail->SMTPDebug = 2; 
// $mail->Debugoutput = 'html';

$mail->send();

$msg = 'success';
include('thankyou.php');
exit;
