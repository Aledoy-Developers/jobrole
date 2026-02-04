<?php
declare(strict_types=1);

require_once 'conn.php'; // Uses improved mysqli OOP connection

$sql = "SELECT * FROM registration ORDER BY id DESC";
$result = $conn->query($sql);

if (!$result) {
    error_log("Export query failed: " . $conn->error);
    die("❌ Error retrieving data for export.");
}

$filename = "participants_" . date('Y-m-d_H-i') . ".xls";

// Send headers for Excel download
header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Pragma: no-cache");
header("Expires: 0");

$sep = "\t"; // tab separator

// ✅ Output column headers
$fields = $result->fetch_fields();
foreach ($fields as $field) {
    echo $field->name . $sep;
}
echo "\n";

// ✅ Output each row
while ($row = $result->fetch_assoc()) {
    $lineData = [];
    foreach ($row as $value) {
        if (!isset($value)) {
            $lineData[] = "NULL";
        } else {
            // Clean tabs & newlines to avoid breaking Excel cells
            $cleanValue = str_replace(["\t", "\r", "\n"], ' ', $value);
            $lineData[] = $cleanValue;
        }
    }
    echo implode($sep, $lineData) . "\n";
}

// Free result set
$result->free();
exit;