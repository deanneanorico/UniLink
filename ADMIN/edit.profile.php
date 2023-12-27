<?php
  include 'db.php';
  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userID = $_SESSION['id'];

    if(!empty($_FILES['image']['name'])) {
      $targetDir = "../imgs/";
          $targetFile = $targetDir . basename($_FILES["image"]["name"]);
          $fileName = basename($_FILES["image"]["name"]);
          move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
          $sql = "UPDATE `users` SET profile_pic = '$fileName' WHERE id = $userID";
          if($conn->query($sql)) {
            header('location: ./a-profile.php');
        exit();
          }
    }
  }
?>