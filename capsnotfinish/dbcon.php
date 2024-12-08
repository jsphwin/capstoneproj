<?php
// Database configuration
$host = "localhost";       // Database host (e.g., localhost or IP address)
$db_name = "dbcon"; // Name of your database
$db_user = "root"; // Database username
$db_password = ""; // Database password

// Create a connection
$conn = new mysqli($host, $db_user, $db_password, $db_name);


// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
