<?php
// db.php - Database connection file

$servername = "localhost";
$username = "root";  // Default MySQL username for XAMPP
$password = "";      // Default MySQL password for XAMPP
$dbname = "index";   // Your database name (created earlier)

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
