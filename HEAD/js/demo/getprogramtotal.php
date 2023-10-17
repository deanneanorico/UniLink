<?php
	include '../../../db.php';

	$program = array();

	$sql = "SELECT cl.college_abbrev, COUNT(cl.college_abbrev) AS `total` FROM `activityform` AS af LEFT JOIN `college` AS cl ON af.college = cl.name GROUP BY cl.college_abbrev ORDER BY cl.college_abbrev";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		array_push($program, $row['total']);
	}
	echo json_encode($program);
	exit();
?>