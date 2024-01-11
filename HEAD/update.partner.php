<?php
	include 'db.php';

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$id = $_POST['id'];
		$partner = $_POST['partner'];
		$category = $_POST['category'];
		$college = $_POST['college'];
		$status = $_POST['status'];

		$sql = "UPDATE `partners` SET `category`='$category',`name`='$partner',`college_id`=$college,`status`='$status' WHERE id = $id";
		$conn->query($sql);
		header("location: ./list_partner.php");
		exit();
	}
?>