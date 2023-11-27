<?php

include 'db.php';

$id = $_GET["id"];
$activity_representatives_id = array();
$narrative_array = array();
$narrative_representative_id = array();

$sql = "SELECT * FROM `activity_representatives` WHERE `activityform_id` LIKE '$id'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    array_push($activity_representatives_id, $row['id']);
}

foreach ($activity_representatives_id as $value) {
    $sql = "DELETE FROM `representatives` WHERE `activity_representatives_id` LIKE '$value'";
    $conn->query($sql);
    $sql = "DELETE FROM `activity_representatives_responsibilities` WHERE `activity_representatives_id` LIKE '$value'";
    $conn->query($sql); 
}
$sql = "DELETE FROM `activity_representatives` WHERE `activityform_id` LIKE '$id'";
$conn->query($sql);

$sql = "DELETE FROM `budget` WHERE `activityform_id` LIKE '$id'";
$conn->query($sql);

$sql = "SELECT * FROM `narrative_report` WHERE `activityform_id` LIKE '$id'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	array_push($narrative_array, $row['id']);
}

foreach($narrative_array as $value) {
	$sql = "SELECT * FROM `narrative_report_representative` WHERE `narrative_report_id` LIKE '$value'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
		$narrative_report_representative_id = $row['id'];
		$sql = "DELETE FROM `narrative_report_representative_list` WHERE `narrative_report_representative_id` = '$narrative_report_representative_id'";
		$conn->query($sql);

		$sql = "DELETE FROM `narrative_report_responsibilities_list` WHERE `narrative_report_representative_id` = '$narrative_report_representative_id'";
		$conn->query($sql);
	}

	$sql = "DELETE FROM `narrative_report_representative` WHERE `narrative_report_id` LIKE '$value'";
	$conn->query($sql);
}

$sql = "DELETE FROM `narrative_report` WHERE `activityform_id` LIKE '$id'";
$conn->query($sql);

$sql = "DELETE FROM `activityform` WHERE `id` LIKE '$id'";
$conn->query($sql);

header("Location: ui-formsPreview.php?sm=1");
exit();

mysqli_close($conn);