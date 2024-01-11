<?php
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		include 'db.php';
		session_start();

		$folderID = $_SESSION['folder_id'];

		$dir = "../uploads/";

		$time = microtime(true);
		$milliseconds = round($time * 1000);

		$file = $dir.$milliseconds.basename($_FILES["file"]["name"]);

		move_uploaded_file($_FILES["file"]["tmp_name"], $file);

		$sql = "INSERT INTO `uploads`(`create_folder_id`, `path`) VALUES (?, ?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ./docu_local.php?error");
			exit();
		}

		mysqli_stmt_bind_param($stmt, "ss", $folderID, $file);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		header("location: ./docu_local.php?id=".$folderID);
	}
?>