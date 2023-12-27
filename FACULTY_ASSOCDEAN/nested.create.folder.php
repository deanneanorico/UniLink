<?php
    include 'db.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['create_folder'])) {
            $createfolder = $_POST['createfolder'];
            $category = $_SESSION['folder_category'];
            $folderID = $_SESSION['folder_id'];

            $sql = "INSERT INTO create_folder (create_folder_id, category, createfolder) VALUES ($folderID, '$category', '$createfolder')";
            if (mysqli_query($conn, $sql)) {
                // Certificate added successfully
                if($category == "local") {
                    header('Location: docu_local.php?id='.$folderID); // Redirect to a success page or wherever you want
                    exit();
                } elseif ($category == "foreign") {
                    header('Location: docu_national.php?id='.$folderID); // Redirect to a success page or wherever you want
                    exit();
                }
            }    
        } 
        
    }
?>