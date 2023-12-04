<?php
	include '../../../db.php';
	session_start();

	$college = $_SESSION['collegeName'];
	$program = array("0","0","0","0","0","0","0","0","0","0","0","0");

	$sql = "SELECT MONTH(`start_date`) AS `month`, COUNT(`start_date`) AS `total` FROM `activityform` WHERE `college` = '$college' GROUP BY `month`";
	$result = $conn->query($sql);
	if($row = $result->fetch_assoc()) {
		$program[$row['month']-1] = $row['total'];
	}
	echo json_encode($program);
	exit();
?>