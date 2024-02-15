<?php
$servername = "php24-db-1"; 
$username = "root";   
$password = "password";  
$dbname = "studentsinfo";  

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>