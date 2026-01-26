<?php

ob_start();
session_start();
include('conn.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

$reference = $_GET['reference'];
$email = base64_decode($_GET['em']);

$name = base64_decode($_GET['name']);
$phone = base64_decode($_GET['p']);
$pitch_session = base64_decode($_GET['s']);

$transaction_date = date('y-m-d');


$query = $conn->prepare("UPDATE registration SET certified = ? where email = ? and fullname = ? and phone = ?");
$query->execute([$reference, $email, $name, $phone]);

$select = $conn->prepare("SELECT * FROM registration where email = ? and fullname = ? and phone = ?");
$select->execute([$email, $name, $phone]);
$result = $select->get_result();
$row = $result->fetch_assoc();
$category = $row['category'];
$ticket_id = $row['ticked_id'];




if ($pitch_session == 'yes') {
    $pitch = '<a target="_blank" href="https://forms.gle/pJ91iC4osoreirLi8">Click this link to submit your prosposal for the pitch deck session</a>';
}

$subject = 'You registered for Next Frontier Conference 2026';
$body = "
Dear {$name},<br><br>

Thank you for registering for <strong>Next Frontier Conference 2026</strong>, proudly organized by Jobrole Consulting Limited.<br><br>

📍 <strong>Venue:</strong> AGIP Recital Hall, Muson Centre, Onikan, Lagos<br>
📅 <strong>Date:</strong> Saturday, September 19, 2026<br>
🆔 <strong>Ticket ID:</strong> #{$reference}<br><br>
$pitch <br><br>


We look forward to igniting your potential and fueling your growth at Next Frontier Conference 2025.<br><br>

For any questions, feel free to reply to this email.<br><br>

Warm regards,<br>
<strong>The Jobrole Consulting Team</strong><br>
info@jobroleng.com<br>
<a href='https://www.jobroleng.com'>www.jobroleng.com</a><br>
";

// ✅ Modern PHPMailer usage
$mail = new PHPMailer(true);

// SMTP Settings
$mail->IsSMTP();
$mail->Port = 465;
$mail->SMTPAuth = true;
//sendgrid
$mail->Username = 'aledoysolutions2@gmail.com';
$mail->Password = 'zuvw gzmb ljea kcga';  //yahoo app password for noreply email 
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = 'ssl';
$mail->From = 'aledoysolutions2@gmail.com';
$mail->FromName = "JOBROLE WRBSITE";

// Email Headers
$mail->setFrom('aledoysolutions2@gmail.com', 'Next Frontier');
$mail->addAddress("$email");
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
