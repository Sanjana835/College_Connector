<?php
// Include the database connection file
include 'db_connect.php';

// Test the database connection
if ($conn) {
    echo "<p>Connected successfully to the database.</p>";
} else {
    echo "<p>Connection failed: " . $conn->connect_error . "</p>";
}

// Include the header file
include 'includes/header.php';
?>
