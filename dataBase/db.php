<?php
$servername = "localhost";
$username = "bbcap23_21";
$password ="HAMhcY9i";
$dbname ="wp_bbcap23_21";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>