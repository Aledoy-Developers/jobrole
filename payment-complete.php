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

        $qr_code_url = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=".$ticket_id;

        $subject = 'You registered for Next Frontier Conference 2026';
        $body = "
<div style='background:#f5f5f5;padding:30px;font-family:Arial,Helvetica,sans-serif;'>

    <div style='max-width:600px;margin:auto;background:#ffffff;border-radius:6px;border:1px solid #e6e6e6;'>

        <div style='background:#1f3c88;color:#ffffff;padding:20px;text-align:center;font-size:22px;font-weight:bold;'>
            Next Frontier Conference 2026
        </div>

        <div style='padding:25px;font-size:14px;color:#333333;line-height:22px;'>

            Dear ".$row2['fullname'].",<br><br>

            Thank you for registering for <strong>Next Frontier Conference 2026</strong>, proudly organized by Jobrole Consulting Limited.<br><br>

            <strong>Event Details</strong><br>
            📍 <strong>Venue:</strong> AGIP Recital Hall, Muson Centre, Onikan, Lagos<br>
            📅 <strong>Date:</strong> Saturday, September 19, 2026<br>
            🆔 <strong>Ticket ID:</strong> #".$ticket_id."<br><br>

            <div style='text-align:center;margin-top:25px;margin-bottom:25px;'>

                <div style='font-size:16px;font-weight:bold;margin-bottom:10px;'>Your eTicket QR Code</div>

                <img src='".$qr_code_url."' alt='Ticket QR Code' style='width:200px;height:200px;border:1px solid #ddd;padding:10px;background:#ffffff;'>

                <div style='font-size:13px;color:#777;margin-top:10px;'>
                    Present this QR code at the event entrance for check-in.
                </div>

            </div>

            Please print this email or have it available on your mobile device when arriving at the venue.<br><br>

            We look forward to <strong>\"Building the Future\"</strong> without boundaries at the Next Frontier Conference 2026.<br><br>

            For any questions, feel free to reply to this email.<br><br>

            Warm regards,<br>
            <strong>The Jobrole Consulting Team</strong><br>
            info@jobroleng.com<br>
            <a href='https://www.jobroleng.com' style='color:#1f3c88;text-decoration:none;'>www.jobroleng.com</a>

        </div>

        <div style='background:#f0f0f0;padding:12px;text-align:center;font-size:12px;color:#666;'>
            © 2026 Jobrole Consulting Limited
        </div>

    </div>

</div>
";

             // ✅ Modern PHPMailer usage
        $mail = new PHPMailer(true);

        // SMTP Settings
        $mail->IsSMTP();
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username='nextfrontier.conference@jobroleng.com';
        $mail->Password = 'Aledoy@2024@@!!!!@#'; // $mail->Password = 'wntl yuzg lirk gvqf';  //oabikay
        $mail->Host='smtppro.zoho.com';
        $mail->SMTPSecure = 'ssl'; 
        $mail->From = 'nextfrontier.conference@jobroleng.com';
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
