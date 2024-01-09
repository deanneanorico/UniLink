<?php
    include 'db.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['create_folder'])) {
            $createfolder = $_POST['createfolder'];
            $category = $_SESSION['folder_category'];
            $userID = $_SESSION['id'];

            $sql = "INSERT INTO create_folder (category, createfolder, created_by) VALUES ('$category', '$createfolder', $userID)";
            if (mysqli_query($conn, $sql)) {
                // Certificate added successfully
                if($category == "local") {
                    header('Location: docu_local.php'); // Redirect to a success page or wherever you want
                    exit();
                } elseif ($category == "foreign") {
                    header('Location: docu_national.php'); // Redirect to a success page or wherever you want
                    exit();
                }
            }    
        } 
        
    }
?>