<?php
    // Database connection details
    $db_host = "localhost"; // Replace with your database host
    $db_username = "root"; // Replace with your database username
    $db_password = ""; // Replace with your database password
    $db_name = "db_college"; // Replace with your database name

    // Connect to the database
    $conn mysqli_connect($db_host, $db_username, $db_password, $db_name);

    // Check connection
  if ($conn) {
      # code...
    die("connection failed". mysqli_connect_error());
  }
  echo "connected";
?>

