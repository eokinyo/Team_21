<?php

// Localhost:81 

$servername = "web-dev-env-main-db-1"; 
$username = "Team_21";     
$password = "team21";     
$dbname = "Team_21";       

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
