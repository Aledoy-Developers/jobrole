<?php
declare(strict_types=1);

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', '0');

ob_start(); 

date_default_timezone_set('Africa/Lagos');

// Database credentials
$db_host = 'localhost';
$db_user = 'jobrfnso_frontier';
$db_pass = '1im7QpLDtjGOC';
$db_name = 'jobrfnso_frontier';

// Create MySQLi connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    // Log error for admin
    error_log("DB Connection failed: " . $conn->connect_error);
    die('Cannot connect to database server. Please try again later.');
}

// Optional: Set charset explicitly for proper encoding
$conn->set_charset('utf8mb4');
?>