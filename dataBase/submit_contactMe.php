<?php
include '../outline/header.php';
if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
// connect to database server
include 'db.php';
//write sql statements to insert data
$sql = "insert into contactMe(first_name, last_name, email, message)
        values ('$first_name', '$last_name', '$email', '$message')";
if ($conn->query($sql)===TRUE){
    echo "<div class='col-md-12 text-center'>Thank you for contacting me! <br>
    <a href='/Team_21/index.php'>Go back</a>";
}else {
    echo"Error: " .$sql . "<br>" . $conn->error;
}
//close connection
$conn->close();
}

?>