<?php
  session_start();

  if(!isset($_SESSION['id'])) {
    header("location: ../");
    exit();
  }

  if($_SESSION['privelege'] == "Faculty" || $_SESSION['privelege'] == "Associate Dean" || $_SESSION['privelege'] == "Dean") {
    header("location: ../faculty_assocdean");
    exit();
  } else if($_SESSION['privelege'] == "Admin") {
    header("location: ../admin");
    exit();
  }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File/Folder Upload Toggle</title>
    <style>
        .toggle-button {
            display: inline-block;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        #file-upload, #folder-upload {
            display: none;
        }
    </style>
</head>
<body>

<button class="toggle-button" onclick="toggleUploadType()">File Upload</button>

<div id="file-upload">
    <!-- Include file upload input here -->
    <input type="file" id="fileInput" />
    <!-- Add additional file upload-related elements as needed -->
</div>

<div id="folder-upload">
    <!-- Include folder upload input or related elements here -->
    <input type="text" placeholder="Enter folder name" id="folderInput" />
    <!-- Add additional folder upload-related elements as needed -->
</div>

<script>
    function toggleUploadType() {
        var button = document.querySelector('.toggle-button');
        var fileUploadDiv = document.getElementById('file-upload');
        var folderUploadDiv = document.getElementById('folder-upload');

        if (button.textContent === 'File Upload') {
            button.textContent = 'Folder Upload';
            fileUploadDiv.style.display = 'block';
            folderUploadDiv.style.display = 'none';
        } else {
            button.textContent = 'File Upload';
            fileUploadDiv.style.display = 'none';
            folderUploadDiv.style.display = 'block';
        }
    }
</script>

</body>
</html>
