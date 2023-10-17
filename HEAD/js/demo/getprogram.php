<?php
	include '../../../db.php';

	$program = array();

	$sql = "SELECT cl.college_abbrev FROM `activityform` AS af INNER JOIN `college` AS cl ON af.college = cl.name";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		array_push($program, $row['college_abbrev']);
	}
	echo json_encode($program);
	exit();
?>