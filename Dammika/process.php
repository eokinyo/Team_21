<?

// what to do with the data

if (isset($_POST['submit'])) {

    // Retrieve data from the form and store it in variables
    
    $Projectid = $_POST['Projectid'];     // Project ID
    $Username = $_POST['Username'];     // User Name
    $Comments = $_POST['Comments'];       // Comments
    $Status = $_POST['Status']; // Status

    // connect to the database server

    include 'db.php';

    // write SQL statement to insert data into the 'studentsinfo' table
    
    $sql = "INSERT INTO ProjectFeedback_Team21 (	ProjectID, UserName, Status, Comments)
            VALUES ('$ProjectID', '$Username', '$Comments', '$Status')";

    // Execute the SQL query using the database connection

    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "Your data was recorded";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    
    $conn->close();
}
?>















?>