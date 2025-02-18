<?php
$servername = "localhost";
$username = "root";  // Default username for XAMPP MySQL
$password = "";      // Default password is empty
$dbname = "collage_connect";  // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
