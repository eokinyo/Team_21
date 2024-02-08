<?php
$title = "Read Your Data";
include 'ellydb.php';
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
                    <th>Interests</th>
                    <th>Preferred Frequency</th>
                    <th>Location</th>
                    <th>Occupation</th>
                    <th>Suggestions</th>
                    <th>Consent</th>
                    <th>Language of contact</th>
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
                <td>{$row['interests']}</td>
                <td>{$row['frequency']}</td>
                <td>{$row['location']}</td>
                <td>{$row['occupation']}</td>
                <td>{$row['suggestions']}</td>
                <td>{$row['consent']}</td>
                <td>{$row['language']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "There are no records to be displayed.";
}
// close the connection when done
$conn->close();
?>