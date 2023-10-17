<?php
	include '../../../db.php';

	$program = array("0");

	$sql = "SELECT MONTH(`start_date`) AS `month`, COUNT(`start_date`) AS `total` FROM `activityform` WHERE `college` = 'College of Informatics and Computing Sciences' GROUP BY `month`";
	$result = $conn->query($sql);
	$month = 1;
	$row = $result->fetch_assoc();
	while($month <= 12){
		if(isset($row['month'])){
			if($row['month'] == $month) {
				array_push($program, $row['total']);
				$row = $result->fetch_assoc();
			} else {
				array_push($program, "0");
			}
		} else {
			array_push($program, "0");
		}
		$month++;
	}
	echo json_encode($program);
	exit();
?>