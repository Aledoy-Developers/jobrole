<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';  // Make sure PHPMailer is installed via Composer

// Build email content
$subject = 'TEst Meila...';
$body = "TEst EMail ";

// ✅ Modern PHPMailer usage
$mail = new PHPMailer(true);

try {
    // SMTP Settings
     $mail->IsSMTP();    
    $mail->Port = 465;
    $mail->SMTPAuth = true;               
    //sendgrid
     $mail->Username='bcitteam01@gmail.com';
    $mail->Password = 'lfge itpk akiz zvic';  //yahoo app password for noreply email 
    $mail->Host='smtp.gmail.com';
    $mail->SMTPSecure = 'ssl'; 
    $mail->From = 'bcitteam01@gmail.com';
    $mail->FromName = "JOBROLE WRBSITE";

    // Email Headers
    $mail->setFrom('bcitteam01@gmail.com', 'Next Frontier');
    $mail->addAddress("luabikoye@gmail.com");

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
   echo "Message Sent";
    exit;

} catch (Exception $e) {
    error_log('Mailer Error: ' . $mail->ErrorInfo);
    $msg = 'error';
    $comment = 'Unable to send confirmation email at the moment.';
    include('register-form.php');
    exit;
}