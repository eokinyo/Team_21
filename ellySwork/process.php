<?php
// What to do with the data.
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $interest = $_POST['interest'];
    $frequency = $_POST['frequency'];
    $location = $_POST['location'];
    $occupation = $_POST['occupation'];
    $suggestions = $_POST['suggestions'];
    $consent = $_POST['consent'];
    $language = $_POST['language'];
    $groupid = $_POST['groupid'];

// The data is now saved. We now connect to the database server
//Connect to the database server

include 'ellydb.php';

//Next, write sql statements to insert the data

$sql = "insert into studentsinfo(fname, lname, email, interest, frequency, location, occupation, suggestions, consent, language)
        values('$fname', '$lname', '$email', '$interest', '$frequency', '$location', '$occupation', '$suggestions', '$consent', '$language')";

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