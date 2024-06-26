<?php
// Start the session
session_start();

// Database connection parameters
$server = 'localhost';
$username = 'root'; // Replace with your actual database username
$password = ''; // Replace with your actual database password
$database = 'myfinalproject';

// Create a connection
$con = mysqli_connect($server, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "Connected successfully!";
    // Additional code for database operations goes here
}
?>
