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
$token = $_GET['token'];

$transaction_date = date('y-m-d');

        


$query = "update registration set certified = '$reference' where token = '$token'";
$result = mysqli_query($conn,$query);


$select = "SELECT * FROM registration where token = '$token'";
$result2 = mysqli_query($conn,$select);
$num2 = mysqli_num_rows($result2);

for($i=0; $i<$num2; $i++)
    {
        $row2 = mysqli_fetch_array($result2);

        $category = $row2['category'];
        $ticket_id = $row2['id'].$row2['certified'];

        // if ($pitch_session == 'yes') {
        //     $pitch = '<a target="_blank" href="https://forms.gle/pJ91iC4osoreirLi8">Click this link to submit your prosposal for the pitch deck session</a>';
        // }

        $subject = 'You registered for Next Frontier Conference 2026';
        $body = "Dear ".$row2['fullname'].",<br><br>

        Thank you for registering for <strong>Next Frontier Conference 2026</strong>, proudly organized by Jobrole Consulting Limited.<br><br>

        📍 <strong>Venue:</strong> AGIP Recital Hall, Muson Centre, Onikan, Lagos<br>
        📅 <strong>Date:</strong> Saturday, September 19, 2026<br>
        🆔 <strong>Ticket ID:</strong> #".$ticket_id."<br><br>


        We look forward to \"Building the Future\" without boundaries at the Next Frontier Conference 2026.<br><br>

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
        $mail->Username='notification@jobroleng.com';
        $mail->Password = 'LXgrl?qnDt5f~C9E'; // $mail->Password = 'wntl yuzg lirk gvqf';  //oabikay
        $mail->Host='mail.jobroleng.com';
        $mail->SMTPSecure = 'ssl'; 
        $mail->From = 'notification@jobroleng.com';
        $mail->FromName = 'Next Frontier Conference 2026';

        // Email Headers
        $mail->addAddress($row2['email']);
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
    
    }


$msg = 'success';
include('thankyou.php');
exit;
