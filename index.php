<?php
$servername = "mysql://mysql:3306/";
$username = "soa";
$password = "soa2018";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
