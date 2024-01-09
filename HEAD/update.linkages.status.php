<?php
	include 'db.php';

	$status = $_GET['status'];
	$id = $_GET['id'];

	$sql = "UPDATE `linkages` SET `status`='$status' WHERE id = $id";
	$conn->query($sql);

	header("location: ./linkages.php");
	exit();
?>