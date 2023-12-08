<?php
	include 'db.php';
	session_start();

	$email = $_SESSION['emailRecovery'];
	$password = $_POST['newPass'];
	$password = password_hash($password, PASSWORD_DEFAULT);

	$sql = "UPDATE users SET pass = '$password' WHERE email = '$email'";
	if($conn->query($sql)) {
		header('location: ./index.php');
		exit();
	}
?>