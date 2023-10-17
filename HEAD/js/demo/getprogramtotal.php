<?php
	include '../../../db.php';

	$program = array();

	$sql = "SELECT `college`, COUNT(*) AS `total` FROM `activityform` GROUP BY `college`";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		array_push($program, $row['total']);
	}
	echo json_encode($program);
	exit();
?>