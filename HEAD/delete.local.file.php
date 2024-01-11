<?php
	include 'db.php';
	session_start();

	$id = $_GET['id'];
	$folderID = $_SESSION['folder_id'];

	$sql = "DELETE FROM uploads WHERE id = $id";
	$conn->query($sql);

	header("location: ./docu_local.php?id=".$folderID);
?>