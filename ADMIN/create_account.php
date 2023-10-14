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
    $first_name = $_POST["first"];
    $mid_name = $_POST["middle"];
    $last_name = $_POST["last"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $privelege = $_POST['privelege'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the users table
    $sql = "INSERT INTO users (title, first_name, mid_name, last_name, sex, email, pass, privelege)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssssss", $title, $first_name, $mid_name, $last_name, $sex, $email, $hashed_password, $privelege);
        if ($stmt->execute()) {
            header("location: ./main_user_management.php?success");
            exit();
        } else {
            header("location: ./user_management.php?invalid=1");
            exit();
        }
        $stmt->close();
    } else {
        header("location: ./user_management.php?invalid=2");
        exit();
    }

    // Close the database connection
    $mysqli->close();
}
?>
