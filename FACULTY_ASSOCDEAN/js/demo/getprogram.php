<?php
	include '../../../db.php';

	$program = array();

	$sql = "SELECT DISTINCT `college` FROM `activityform` WHERE `college` = 'CICS'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		array_push($program, $row['college']);
	}
	echo json_encode($program);
	exit();
?>