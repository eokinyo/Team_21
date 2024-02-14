<?php

// Localhost:81 

$servername = "php_24-db-1"; 
$username = "Group21";     
$password = "Group21";     
$dbname = "Group21";       

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
