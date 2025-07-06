<?php
// Create MySQLi connection
include('conn.php'); // $conn should be the mysqli connection

$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error executing query: " . mysqli_error($conn));
}

$filename = "participants.xls";

// Send headers to force download as Excel
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Expires: 0");

$sep = "\t";

// Output column headers
$fields = mysqli_fetch_fields($result);
foreach ($fields as $field) {
    echo $field->name . $sep;
}
echo "\n";

// Output each row
while ($row = mysqli_fetch_assoc($result)) {
    $line = '';
    foreach ($row as $value) {
        if (!isset($value)) {
            $line .= "NULL" . $sep;
        } elseif ($value != "") {
            $line .= str_replace(array("\t", "\n", "\r"), ' ', $value) . $sep;
        } else {
            $line .= "" . $sep;
        }
    }
    echo trim($line) . "\n";
}
exit;
?>