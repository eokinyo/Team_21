<?php
$title = "Read Data" ;
include '../outline/header.php';
include 'db.php';

// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM contactMe";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table name=readNart style='color: blue' class='table table-hover table-bordered'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='/Team_21/index.php?id=$row[id]'Style=color:red>$row[id]</a></td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['message']}</td>
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


