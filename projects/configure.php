<?php
$servername = "localhost"; // Change this to your MySQL server's hostname or IP address
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "project"; // Change this to the name of your MySQL database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection when you're done

?>
