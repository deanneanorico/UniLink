<?php
// Establish a database connection (modify with your database credentials)
$mysqli = new mysqli("localhost", "root", "", "unilink");

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $first_name = $_POST["first_name"];
    $mid_name = $_POST["mid_name"];
    $last_name = $_POST["last_name"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $is_admin = isset($_POST["is_admin"]) ? 1 : 0;

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the users table
    $sql = "INSERT INTO users (title, first_name, mid_name, last_name, sex, email, pass, is_admin)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssssssi", $title, $first_name, $mid_name, $last_name, $sex, $email, $hashed_password, $is_admin);
        if ($stmt->execute()) {
            echo "Account created successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
}
?>
