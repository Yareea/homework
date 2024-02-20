<?php
// Database connection parameters
$host = '192.168.11.112'; // Replace with your database host ex. localhost
$user = 'root'; // Replace with your database username ex. root
$password = 'P@ssw0rd'; // Replace with your database password ex. P@ssw0rd or leave it blank
$database = 'real_estate_db'; // Replace with your database name ex. db_name
$port = '3303'; // Replace with your database name ex. 3306

// Create a database connection
$conn = new mysqli($host, $user, $password, $database, $port);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If you need to allow public key retrieval, you can set it here
$conn->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false); // Disable SSL certificate verification

// Set charset to utf8mb4 to support a wide range of characters
$conn->set_charset("utf8mb4");
?>