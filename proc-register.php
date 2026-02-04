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

// Database connection
include('conn.php');

// Check for duplicate registration
$stmt = $conn->prepare("SELECT id FROM registration WHERE email = ? OR phone = ?");
$stmt->bind_param('ss', $email, $phone);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (empty($row['certified'])) {
        include('payment.php');
        exit;  
    }else{
        $msg = 'error';
        $comment = 'Sorry! It appears you already registered';
        include('register-form.php');
        exit;
    }
   
}

// Insert into database securely
$stmt = $conn->prepare("INSERT INTO registration (fullname, email, phone, organization, position, attend, category) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('sssssss', $fullname, $email, $phone, $organization, $position, $attend, $category);

$stmt->execute();

// Generate ticket ID
$ticket_id = date('mi') . rand(100, 999);


// Build email content

include('payment.php');
exit;
