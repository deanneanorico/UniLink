<?php
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    include 'db.php';

    if(isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $sql = "SELECT * FROM `users` WHERE `email` = ?";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./index.php?invalid=1");
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($result)) {
        $password_hashed = $row['pass'];
        $verify = password_verify($password, $password_hashed);

        if($verify) {
          session_start();
          $_SESSION['id'] = $row['id'];
          $_SESSION['privelege'] = $row['privelege'];

          if($row['privelege'] == "Faculty" || $row['privelege'] == "Associate Dean" || $row['privelege'] == "Dean") {
            header("location: ./faculty_assocdean");
            exit();
          } else if($row['privelege'] == "Admin") {
            header("location: ./admin");
            exit();
          } else if($row['privelege'] == "Head") {
            header("location: ./head");
            exit();
          }
        } else {
          header("location: ./index.php?invalid=3");
        }
      } else {
        header("location: ./index.php?invalid=2");
        exit();
      }
    }
  }
?>