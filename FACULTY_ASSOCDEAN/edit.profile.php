<?php
	include 'db.php';
	session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$userID = $_SESSION['id'];
		$title = $_POST['title'];
		$firstName = $_POST['first'];
		$middleInitial = $_POST['middle'];
		$lastName = $_POST['last'];
		$sex = $_POST['sex'];

		if(!empty($_FILES['image']['name'])) {
			$targetDir = "./imgs/";
	        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
	        $fileName = basename($_FILES["image"]["name"]);
	        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
	        $sql = "UPDATE `users` SET `title`='$title',`first_name`='$firstName',`mid_name`='$middleInitial',`last_name`='$lastName',`sex`='$sex', profile_pic = '$fileName' WHERE id = $userID";
	        if($conn->query($sql)) {
	        	header('location: ./ui_edit_profile.php');
				exit();
	        }
		} else {
			$sql = "UPDATE `users` SET `title`='$title',`first_name`='$firstName',`mid_name`='$middleInitial',`last_name`='$lastName',`sex`='$sex' WHERE id = $userID";
			if($conn->query($sql)) {
				header('location: ./ui_edit_profile.php');
				exit();
			}
		}
	}
?>