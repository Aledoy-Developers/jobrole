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

// Insert into database
$query = "INSERT INTO registration SET fullname = '$fullname', email = '$email', phone = '$phone', organization = '$organization', position = '$position', attend = '$attend', category = '$category', certified = '$certified'";
$result = mysqli_query($conn, $query);

// $ticket_id = date('mi').rand(100,999);

// // Build email content
// $subject = 'You registered for Next Frontier Conference 2025';
// $body = "Dear $fullname,<br><br>

// Thank you for registering for Next Frontier Conference 2025, proudly organized by Jobrole Consulting Limited.
// <br><br>
// 📍 Venue: Landmark Towers, Lagos<br>
// 📅 Date: Saturday, September 20 2025<br>
// 🎟️ Ticket Category: $category<br>
// 🆔 Ticket ID: $ticket_id<br><br>

// We look forward to igniting your potential and fueling your growth at Next Frontier Conference 2025.<br><br>

// For questions ,feel free to reply to this email.<br><br>

// Warm regards,<br>
// The Jobrole Consulting Team<br>
// info@jobroleconsulting.com<br>
// www.jobroleconsulting.com<br>";

// $mail = new PHPMailer();
// $mail->IsSMTP();
// $mail->Port = 465;
// $mail->SMTPAuth = true;
// $mail->Username='info@jobroleng.com';
// $mail->Password = 'NewAledoy@123123';  //yahoo app password for noreply email 
// $mail->Host='smtppro.zoho.com';
// $mail->SMTPSecure = 'ssl'; 
// $mail->From = 'info@jobroleng.com';
// $mail->FromName = "Next Frontier";
// $mail->AddAddress($email);
// $mail->CharSet = 'UTF-8';
// $mail->IsHTML(true);
// $mail->Subject = $subject;
// $mail->Body = $body;
// $mail->send();

$msg = 'success';
include('thankyou.php');
exit;

?>