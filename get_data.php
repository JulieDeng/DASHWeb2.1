<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "sampleDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM testTable";
$result = $conn->query($sql);

echo "var markers = [";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "[".$row['latitude'].",".$row['longitude']."]".",";
    }
} else {
    echo "0 results";
}
echo "];";

$conn->close();
?>