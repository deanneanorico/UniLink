<?php
	include '../../../db.php';

	$program = array();

	$sql = "SELECT DISTINCT cl.college_abbrev FROM `activityform` AS af INNER JOIN `college` AS CL on af.college = cl.name WHERE `college` = 'College of Informatics and Computing Sciences'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		array_push($program, $row['college_abbrev']);
	}
	echo json_encode($program);
	exit();
?>