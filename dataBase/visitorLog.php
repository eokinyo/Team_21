<?php
include '../outline/header.php';
include 'db.php'; //it wont work yet since i cant connect to the database with my table, it works with root:password... (first we need to move everything to shell and then change file paths)

$sql = "SELECT * FROM TABLE_VISIT";

$result = $conn->query($sql);

function getClientIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$ip_address = getClientIP();


if ($result->num_rows > 0) {
    echo '<div class="container text-center">';
    while($row = $result->fetch_assoc()) {
        echo "Visit ID: " . $row["visit_id"] . " IP Address: " . $row["ip_address"] . " - Timestamp: " . $row["timestamp"] . "<br>";
    }
    echo '</div>';
    echo '<div class="container text-center">';
    echo "IP Address logged successfully";
} else {
    echo "0 results";
}

$sql = "INSERT INTO TABLE_VISIT (ip_address) VALUES ('$ip_address')";
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include '../outline/footer.php';

?>

