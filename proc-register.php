<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);


// Database connection
include('conn.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once __DIR__ . '/vendor/autoload.php';  // Make sure PHPMailer is installed via Composer


// Collect POST data safely
$fullname     = $_POST['fullname'];
$email        = $_POST['email'];
$phone        = $_POST['phone'];
$organization = $_POST['organization'];
$position     = $_POST['position'];
$category  = $cat   = $_POST['category'];
$attend       = $_POST['attend'];
$pitch_session = $_POST['pitch_session'];
$no_att = $_POST['no_att'];

$token = date('mi') . rand(100, 999);

$y = $i+1;

if($no_att == 1)
    {
        $amount = '10,000';
        $final_amount = 10000;
    }
    elseif($no_att == 2)
        {   
        $amount = '25,000';
        $final_amount = 25000;
        }
    else{   
    $amount = '45,000';
    $final_amount = 45000;
    }

for($i=0; $i<$no_att; $i++)
    {
        // Validation
        if (!$fullname[$i] || !$email[$i] || !$phone[$i] || !$organization[$i] || !$position[$i] || !$attend || !$category) {
            $msg = 'error';
            $comment = 'All fields for attendee '.$y.' are required';
            include('register-form.php');
            exit;
        }

        // if (!preg_match('/^\d{11}$/', $phone[$i])) {
        //     $msg = 'error';
        //     $comment = 'Please enter a valid 11-digit phone number for  attendee '.$y;
        //     include('register-form.php');
        //     exit;
        // }

        // Insert into database securely
        $stmt = $conn->prepare("INSERT INTO registration (token, fullname, email, phone, organization, position, attend, category) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $token, $fullname[$i], $email[$i], $phone[$i], $organization[$i], $position[$i], $attend, $category);

        $stmt->execute();


}

// Build email content
header("Location: payment.php?e=".base64_encode($email[0])."&nm=".base64_encode($fullname[0])."&ph=".base64_encode($phone[0])."&am=".base64_encode($final_amount)."&token=".$token);
exit;
