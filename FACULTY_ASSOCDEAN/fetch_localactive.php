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

// Query the localactive table to fetch the data
$option = $_GET['option'];
$sql = "SELECT * FROM partners WHERE `category` LIKE '$option'";
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
