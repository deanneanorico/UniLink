<?php
	include "../db.php";

	$id = $_GET['college'];
	$college = array();

	$sql = "SELECT cl.name, cp.campus_name FROM `college` AS cl INNER JOIN `campus` AS cp ON cl.campusID = cp.id WHERE campus_name = '$id'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		array_push($college, $row['name']);
	}

	echo json_encode($college);
	exit();
?>