<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your MySQL username, typically 'root'
$password = ""; // Replace with your MySQL password, typically empty for local setup
$dbname = "school_management"; // Replace with the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
