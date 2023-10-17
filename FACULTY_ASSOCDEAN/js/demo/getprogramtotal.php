<?php
	include '../../../db.php';

	$program = array();

	$sql = "SELECT MONTH(`start_date`) AS `month`, COUNT(`start_date`) AS `total` FROM `activityform` GROUP BY `month`";
	$result = $conn->query($sql);
	$month = 1;
	while($row = $result->fetch_assoc()) {
		while($month <= 12){
			if($row['month'] == $month) {
				array_push($program, $row['total']);
			} else {
				array_push($program, "0");
			}
			$month++;
		}
		$month = 1;
	}
	echo json_encode($program);
	exit();
?>