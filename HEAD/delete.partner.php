<?php
	include 'db.php';

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$id = $_POST['id'];

		$sql = "DELETE FROM partners WHERE id = $id";
		$conn->query($sql);
		header("location: ./list_partner.php");
		exit();
	}
?>