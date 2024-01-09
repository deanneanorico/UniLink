<?php
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		include 'db.php';

		$partner = $_POST['partner'];
		$category = $_POST['category'];
		$college = $_POST['college'];
		$status = $_POST['status'];

		$sql = "INSERT INTO `partners`(`category`, `name`, `college_id`, `status`) VALUES ('$category','$partner',$college,'$status')";
		$conn->query($sql);
		header("location: ./list_partner.php");
		exit();
	}
?>