<?php 


error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
//ini_set('display_errors', 1);
ini_set('display_errors', 0);


require_once('PHPMailer/PHPMailerAutoload.php');

// Collect POST data
$fullname     = $_POST['fullname'];
$email        = $_POST['email'];
$phone        = $_POST['phone'];
$organization = $_POST['organization'];
$position     = $_POST['position'];
$category       = $_POST['category'];
$attend       = $_POST['attend'];

// Validation
  if (!$fullname || !$email || !$phone || !$organization || !$position || !$attend || !$category) {
    $msg = 'error';
    $comment = 'All fields are required';
    include('register-form.php');
    exit;
}


if (strlen($phone) != 11) {
    $msg = 'error';
    $comment = 'Please enter a valid 11-digit phone number';
    include('register.php');
    exit;
}

if($category == 'no')
{
  $category = 'Standard Ticket - FREE';
}
else{
  
  $category = 'Premium Ticket - N15,000';
}

// Database connection
include('conn.php');


$res = mysqli_query($conn,"select * from registration where email = '$email' or phone = '$phone'");
$num = mysqli_num_rows($res);

if($num > 0)
{
  $msg = 'error';
    $comment = 'Sorry! It apears you already registered';
    include('register-form.php');
    exit;
}

// Insert into database
$query = "INSERT INTO registration SET fullname = '$fullname', email = '$email', phone = '$phone', organization = '$organization', position = '$position', attend = '$attend', category = '$category'";
$result = mysqli_query($conn, $query);

$ticket_id = date('mi').rand(100,999);

// Build email content
$subject = 'You registered for Next Frontier Conference 2025';
$body = "Dear $fullname,<br><br>

Thank you for registering for Next Frontier Conference 2025, proudly organized by Jobrole Consulting Limited.
<br><br>
📍 Venue: Landmark Towers, Lagos<br>
📅 Date: Saturday, September 20 2025<br>
🎟️ Ticket Category: $category<br>
🆔 Ticket ID: $ticket_id<br><br>

We look forward to igniting your potential and fueling your growth at Next Frontier Conference 2025.<br><br>

For questions ,feel free to reply to this email.<br><br>

Warm regards,<br>
The Jobrole Consulting Team<br>
info@jobroleng.com<br>
www.jobroleng.com<br>";

$mail = new PHPMailer();
// $mail->IsSMTP();
// $mail->Port = 587;
// $mail->SMTPAuth = true;
// $mail->Username='info@jobroleng.com';
// $mail->Password = 'bput password here';  //yahoo app password for noreply email 
// $mail->Host='smtppro.zoho.com';
// $mail->SMTPSecure = 'tls'; 
$mail->From = 'info@jobroleng.com';
$mail->FromName = "Next Frontier";
$mail->AddAddress($email);
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;

if(!$mail->send()) {
  // Optional: Log or display the error
  error_log('Mailer Error: ' . $mail->ErrorInfo);
  $msg = 'error';
  $comment = 'Unable to send confirmation email at the moment.';
  include('register-form.php');
  exit;
} else {
  $msg = 'success';
  include('thankyou.php');
  exit;
}


?>