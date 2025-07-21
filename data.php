<?php
declare(strict_types=1);

require_once 'conn.php';  // Uses the improved mysqli connection

echo '<h2>Registered Users - <a href="export.php">Export to Ms Excel</a></h2>';

// Query the database
$sql = "SELECT * FROM registration ORDER BY id DESC";
$result = $conn->query($sql);

if (!$result) {
    // Log the error, but show a friendly message
    error_log("DB Query Error: " . $conn->error);
    echo "<p>Unable to retrieve registrations at the moment.</p>";
    exit;
}

$total = $result->num_rows;
echo '<h3>Total Record(s): ' . $total . '</h3>';

// Display records
if ($total > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div style="margin-bottom:15px;">';
        echo '<strong>Date:</strong> ' . date('D d M Y h:i:s', strtotime($row['date_created'])) . '<br>';
        echo '<strong>Full name:</strong> ' . htmlspecialchars($row['fullname']) . '<br>';
        echo '<strong>Email:</strong> ' . htmlspecialchars($row['email']) . '<br>';
        echo '<strong>Phone:</strong> ' . htmlspecialchars($row['phone']) . '<br>';
        echo '<strong>Organization:</strong> ' . htmlspecialchars($row['organization']) . '<br>';
        echo '<strong>Position:</strong> ' . htmlspecialchars($row['position']) . '<br>';
        echo '<strong>Attendance:</strong> ' . htmlspecialchars($row['attend']) . '<br>';
        echo '<strong>Category:</strong> ' . htmlspecialchars($row['category']) . '<br>';
        echo '<hr>';
        echo '</div>';
    }
} else {
    echo "<p>No registrations found.</p>";
}

// Free the result set
$result->free();
?>
