<?php 
$title = "User input data";
include_once '../outline/header.php';

include_once 'ellydb.php';
// SQL query to retrieve data from the 'signUpForm' table
$sql = "SELECT * FROM signUpForm";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Occupation</th>
                    <th>Consent</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['email']}</td>
                <td>{$row['occupation']}</td>
                <td>{$row['consent']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "There are no records to be displayed.";
}
// close the connection when done
$conn->close();

include_once '../outline/footer.php'; ?>