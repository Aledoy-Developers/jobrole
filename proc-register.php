<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';  // Make sure PHPMailer is installed via Composer

// Collect POST data safely
$fullname     = trim($_POST['fullname'] ?? '');
$email        = trim($_POST['email'] ?? '');
$phone        = trim($_POST['phone'] ?? '');
$organization = trim($_POST['organization'] ?? '');
$position     = trim($_POST['position'] ?? '');
$category     = trim($_POST['category'] ?? '');
$attend       = trim($_POST['attend'] ?? '');
$pitch_session = $_POST['pitch_session'];


// Validation
if (!$fullname || !$email || !$phone || !$organization || !$position || !$attend || !$category) {
    $msg = 'error';
    $comment = 'All fields are required';
    include('register-form.php');
    exit;
}

if (!preg_match('/^\d{11}$/', $phone)) {
    $msg = 'error';
    $comment = 'Please enter a valid 11-digit phone number';
    include('register-form.php');
    exit;
}

// Ticket category
if ($category === 'no') {
    $category = 'Standard Ticket - FREE';
} else {
    $category = 'Premium Ticket - N15,000';
}

// Database connection
include('conn.php');

// Check for duplicate registration
$stmt = $conn->prepare("SELECT id FROM registration WHERE email = ? OR phone = ?");
$stmt->bind_param('ss', $email, $phone);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $msg = 'error';
    $comment = 'Sorry! It appears you already registered';
    include('register-form.php');
    exit;
}

// Insert into database securely
$stmt = $conn->prepare("INSERT INTO registration (fullname, email, phone, organization, position, attend, category) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('sssssss', $fullname, $email, $phone, $organization, $position, $attend, $category);
$stmt->execute();

// Generate ticket ID
$ticket_id = date('mi') . rand(100, 999);

if ($pitch_session == 'yes') {
    $pitch = '<a target="_blank" href="https://forms.gle/pJ91iC4osoreirLi8">Click this link Pitch deck session</a>';
}
// Build email content
$subject = 'You registered for Next Frontier Conference 2025';
$body = "
Dear {$fullname},<br><br>

Thank you for registering for <strong>Next Frontier Conference 2025</strong>, proudly organized by Jobrole Consulting Limited.<br><br>

📍 <strong>Venue:</strong> Landmark Towers, Lagos<br>
📅 <strong>Date:</strong> Saturday, September 20, 2025<br>
🎟️ <strong>Ticket Category:</strong> {$category}<br>
🆔 <strong>Ticket ID:</strong> #{$ticket_id}<br><br>
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

try {
    // SMTP Settings
       $mail->IsSMTP();    
    $mail->Port = 465;
    $mail->SMTPAuth = true;               
    //sendgrid
     $mail->Username='aledoysolutions231@gmail.com';
    $mail->Password = 'jhah axwo ykxl pbmx';  //yahoo app password for noreply email 
    $mail->Host='smtp.gmail.com';
    $mail->SMTPSecure = 'ssl'; 
    $mail->From = 'aledoysolutions231@gmail.com';
    $mail->FromName = "JOBROLE WRBSITE";

    // Email Headers
    $mail->setFrom('aledoysolutions231@gmail.com', 'Next Frontier');
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

    // $mail->send();

    $msg = 'success';
    include('thankyou.php');
    exit;

} catch (Exception $e) {
    error_log('Mailer Error: ' . $mail->ErrorInfo);
    $msg = 'error';
    $comment = 'Unable to send confirmation email at the moment.';
    include('register-form.php');
    exit;
}