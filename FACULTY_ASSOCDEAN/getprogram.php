<?php
	include "../db.php";

	$campus = $_GET['campus'];
	$college = $_GET['college'];
	$department = array();

	$sql = "SELECT pg.program, cp.campus_name, cl.name FROM `program` AS pg INNER JOIN `campus` AS cp ON pg.campus_id = cp.id INNER JOIN `college` AS cl ON pg.college_id = cl.collegeID WHERE `campus_name` = '$campus' AND `name` = '$college'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		array_push($department, $row['program']);
	}

	echo json_encode($department);
	exit();
?>