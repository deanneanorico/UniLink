<?php
	include 'db.php';

	$id = $_POST['id'];

	$data = array();

	$sql = "SELECT * FROM linkages_audience WHERE linkages_id = $id";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$tmp['id'] = $row['id'];
		$tmp['linkages_id'] = $row['linkages_id'];
		$tmp['audience'] = $row['audience'];

		array_push($data, $tmp);
	}

	echo json_encode($data);
?>