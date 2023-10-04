<?php
// Database connection details
$dbHost = 'local';
$dbUser = '';
$dbPass = '';
$dbName = 'unilink';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected partner type from the client-side request
    $partnerType = $_POST['partnerType'];

    try {
        // Establish a database connection
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Perform a database query to fetch partners based on $partnerType
        // Modify this query based on your database structure
        $query = "SELECT id, name FROM partners WHERE type = :partnerType";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':partnerType', $partnerType, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch the partners as an associative array
        $partners = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Return the data as JSON
        echo json_encode($partners);
    } catch (PDOException $e) {
        // Handle database connection or query errors
        echo 'Error: ' . $e->getMessage();
    }
} else {
    // Handle invalid requests or provide an error message
    echo 'Invalid request';
}
?>
