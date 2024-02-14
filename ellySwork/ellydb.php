<?php 
$title = "User data";
include_once 'outline/header.php'; ?>
<?php
$servername = "web-dev-env-main-db-1";
$username = "team21";
$password = "@Jan302024";
$dbname = "team21";

//Create a database connection

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
?>
<?php include_once '../outline/footer.php'; ?>