<?php
// Establish a database connection (modify with your database credentials)
$mysqli = new mysqli("localhost", "root", "", "unilink");

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $title = $_POST["title"];
    $first_name = $_POST["first"];
    $mid_name = $_POST["middle"];
    $last_name = $_POST["last"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $campus = $_POST['campus'];
    $college = $_POST['department'];
    $password = $_POST["password"];
    $privelege = $_POST['privelege'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the users table
    $sql = "UPDATE `users` SET `title`=?,`first_name`=?,`mid_name`=?,`last_name`=?,`sex`=?,`email`=?,`campus`=?,`college_abbrev`=?,`pass`=?,`privelege`=? WHERE `id` = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssssssssss", $title, $first_name, $mid_name, $last_name, $sex, $email, $campus, $college, $hashed_password, $privelege, $id);
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
