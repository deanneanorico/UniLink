<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unilink";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the selected end_date year from the GET request
if (isset($_GET['end_date'])) {
    $selectedEndDate = $_GET['end_date'];

    // Modify the query to filter by the selected end_date year
    $sql = "SELECT college, COUNT(*) AS total_count FROM activityform WHERE YEAR(end_date) = $selectedEndDate GROUP BY college";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        echo json_encode($data);
    } else {
        echo "No data found";
    }
} else {
    echo "End Date Year not selected"; // You can provide a default message if no year is selected
}

$conn->close();
?>
