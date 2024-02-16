<?php
$title = "Feed back" ;
include '../outline/header.php';
include 'db.php'; 

// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM ProjectFeedback";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table name=readNart style='color: blue' class='table table-hover table-bordered'>
            <thead>
                <tr>
                    <th>Feedback_ID</th>
                    <th>Project_ID</th>
                    <th>User_Name</th>
                    <th>User_Email</th>
                    <th>progress</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='/Team_21/Dammika/Dread.php?id=$row[Feedback_ID]'Style=color:red>$row[Feedback_ID]</a></td>
                <td>{$row['Project_ID']}</td>
                <td>{$row['User_Name']}</td>
                <td>{$row['User_Email']}</td>
                <td>{$row['progress']}</td>
                <td>{$row['Comments']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();

?>
<?php include '../outline/footer.php';
?>