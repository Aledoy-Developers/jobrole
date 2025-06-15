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
$attend       = $_POST['attend'];

// Validation
if (!$fullname || !$email || !$phone || !$organization || !$position || !$attend) {
    $msg = 'error';
    $comment = 'All fields are required';
    include('register.php');
    exit;
}

if (strlen($phone) != 11) {
    $msg = 'error';
    $comment = 'Please enter a valid 11-digit phone number';
    include('register.php');
    exit;
}

// Database connection
include('conn.php');

// Insert into database
$query = "INSERT INTO registration SET fullname = '$fullname', email = '$email', phone = '$phone', organization = '$organization', position = '$position', attend = '$attend'";
$result = mysqli_query($conn, $query);

// Build email content
$subject = $fullname.' registers for '.$program;
$body = '
<table cellpadding="0" cellspacing="0" width="100%" style="font-family: Arial, sans-serif; color: #333;">
<tr>
<td align="center">
<table width="600" cellpadding="20" cellspacing="0" style="border: 1px solid #ddd; background-color: #fff;">
<tr>
<td>
<p><strong>Name:</strong> ' . $fullname . '</p>
<p><strong>Email:</strong> ' . $email . '</p>
<p><strong>Phone:</strong> ' . $phone . '</p>
<p><strong>Program:</strong> ' . $organization . '</p>
<p><strong>Skill:</strong> ' . $position . ' </p>
<p><strong>Attend:</strong> ' . $attend . ' </p>
</td>
</tr>
</table>
</td>
</tr>
</table>
';

$mail = new PHPMailer();
// $mail->IsSMTP();
// $mail->Port = 587;
// $mail->SMTPAuth = true;
// $mail->Username = 'noreply@ecardnaija.com';
// $mail->Password = 'Aledoy@2025';
// $mail->Host = 'mail.ecardnaija.com';
// $mail->SMTPSecure = 'tls';
$mail->From = "noreply@ecardnaija.com";
$mail->FromName = "Next Frontier";
$mail->AddAddress('luabikoye@yahoo.com');
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->send();



if (!$mail->send()) {
   $info = 'error';
   $correction = 'Could Not Send Mail';
   include('register.php');
   exit;
}

$msg = 'success';
include('thankyou.php');
exit;

?>