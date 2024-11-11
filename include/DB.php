<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "Agency";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
if ($conn->connect_error) {
    // Redirect to 404 error page if database connection fails
    header("Location: error-404.php");
    exit();
}
?>