<?php
	include 'db.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$subject = $_POST['subject'];
		$content = $_POST['content'];
		$date = $_POST['date'];
		$colleges = $_POST['college'];

		$sql = "INSERT INTO announcement (subject, content, date_added) VALUES ('$subject', '$content', '$date')";
		$conn->query($sql);
		$announcementID = $conn->insert_id;

		foreach($colleges AS $college) {
			$sql = "INSERT INTO announcement_recipents (announcement_id, college) VALUES ($announcementID, '$college')";
			$conn->query($sql);
		}

		header("location: ./announcement_table.php");
		exit();
	}
?>