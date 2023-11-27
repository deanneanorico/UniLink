<?php
	include "../db.php";

	$id = $_GET['college'];
	$college = array();

	$sql = "SELECT cl.name, cp.campus_name, cl.college_abbrev FROM `college` AS cl INNER JOIN `campus` AS cp ON cl.campusID = cp.id WHERE campus_name = '$id'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$collegeRow['name'] = $row['name'];
		$collegeRow['abbr'] = $row['college_abbrev'];
		array_push($college, $collegeRow);
	}

	echo json_encode($college);
	exit();
?>