<?php
	include 'db.php';

	$id = $_POST['id'];

	$data = array();

	$sql = "SELECT * FROM linkages_timing WHERE linkages_id = $id";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$tmp['id'] = $row['id'];
		$tmp['linkages_id'] = $row['linkages_id'];
		$tmp['timing'] = $row['timing'];

		array_push($data, $tmp);
	}

	echo json_encode($data);
?>