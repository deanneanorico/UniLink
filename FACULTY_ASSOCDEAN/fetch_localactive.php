<?php
// Database connection code goes here (configure your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unilink"; // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();

$college = $_SESSION['college'];


// Query the localactive table to fetch the data
$option = $_GET['option'];
$sql = "SELECT p.id, p.name FROM partners AS p INNER JOIN college AS c ON p.college_id = c.collegeID WHERE `category` = '$option' AND college_abbrev = '$college'";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            'id' => $row['id'],
            'partnerName' => $row['name'],
            // Add more columns as needed
        ];
    }
}

$conn->close();

// Return the data as JSON
// header('Content-Type: application/json');
echo json_encode($data);
?>
