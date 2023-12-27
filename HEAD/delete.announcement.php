<?php
	include 'db.php';

	$id = $_POST['id'];

	$sql = "DELETE FROM announcement_recipents WHERE announcement_id = $id";
	$conn->query($sql);

	$sql = "DELETE FROM announcement WHERE id = $id";
	$conn->query($sql);

	exit();
?>