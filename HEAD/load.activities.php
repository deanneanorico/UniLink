<?php
	include 'db.php';

	$id = $_POST['id'];

	$data = array();

	$sql = "SELECT ly.* FROM linkages_implementation_plan AS lip INNER JOIN linkages_activity AS ly ON lip.id = ly.linkages_implementation_plan_id WHERE lip.linkages_id = $id";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$tmp['id'] = $row['id'];
		$tmp['linkages_implementation_plan_id'] = $row['linkages_implementation_plan_id'];
		$tmp['activity'] = $row['activity'];

		array_push($data, $tmp);
	}

	echo json_encode($data);
?>