<?php

// Created Table for the Project feedback << (what to do with the data)

if (isset($_POST['submit'])) {

    // Retrieve data from the form and store it in variables
    
    $projectid = $_POST['projectid'];     // Project ID
    $name = $_POST['name'];     // User Name 
    $email = $_POST['email'];     // User E-mail 
    $progress = $_POST['progress'];       // Progress
    $comments = $_POST['comments']; // Comments

    // connect to the database server

    include 'db.php';

    // write SQL statement to insert data into the 'studentsinfo' table
    
    $sql = "INSERT INTO ProjectFeedback (Project_ID, User_Name, User_Email, progress, comments)
            VALUES ('$projectid', '$name', '$email', '$progress', '$comments')";

    // Execute the SQL query using the database connection

    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "Thank you for the Feedback";
        
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connections
    
    $conn->close();
}
?>















?>