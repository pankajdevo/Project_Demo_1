<?php
// Database credentials
$servername = "database-1.c5g00kig6lqe.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Admin2024";
$dbname = "Mychoise";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


echo "Database connection succesfully";
?>
