<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
//ini_set('display_errors', 1);
ini_set('display_errors', 0);


ob_start();

date_default_timezone_set('Africa/Lagos');

$conn = mysqli_connect('localhost', 'jobrfnso_frontier', '1im7QpLDtjGOC', 'jobrfnso_frontier');

if (!$conn) {
echo 'Cannot connect to database server';
exit;
}

?>