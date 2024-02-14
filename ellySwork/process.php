<?php 
$title = "Your information";
include_once '../outline/header.php'; ?>
<?php
// What to do with the data.
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $occupation = $_POST['occupation'];
    $consent = $_POST['consent'];

// The data is now saved. We now connect to the database server
//Connect to the database server

include 'ellydb.php';

//Next, write sql statements to insert the data

$sql = "insert into signUpForm(fname, lname, email, occupation, consent)
        values('$fname', '$lname', '$email', '$occupation', '$consent')";

if ($conn->query($sql)===TRUE){
    echo "Thank you for signing up. I will get in touch with you with my latest piece of work. Cheers!";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//Closs the 
$conn->close();
}
?>
<?php include_once '../outline/footer.php'; ?>