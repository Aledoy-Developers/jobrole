<?php 

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$organization = $_POST['organization'];
$position = $_POST['position'];


if(!$fullname || !$email || !$phone || !$organization || !$position)
{
    $msg = 'error';
    $comment = 'All fields are required';
    include('register.php');
    exit;
}


if (strlen($phone) != 11) 
{
    $phone = '';
    $msg = 'error';
    $comment = 'Please enter valid number';
    include('register.php');
    exit;
}


$conn = mysqli_connect('localhost', 'next_frontier', 'SM)1im7QpLDtjGOC', 'next_frontier');

if (!$conn) {
    echo 'Cannot connect to database server';
    exit;
}

$query = "insert into registation set fullname = '$fullname', email = '$email', phone = '$phone', organization = '$organization', position = '$position' ";

$result = mysqli_query($conn,$query);

$msg = 'success';
$fullname = '';
$email = '';
$phone = '';
$organization = '';
$position = '';
include('register.php');
exit;


?>
