<?php 
include 'includes/db.php';

$id = $_GET['id'];
      
$query = "SELECT * FROM campus WHERE id='$id'";
$result = $conn->query($query);

if($row = $result->fetch_assoc()) {
	$sql = "DELETE FROM program WHERE campus_id='$id'";
	$conn->query($sql);

	$sql = "DELETE FROM college WHERE campusID='$id'";
	$conn->query($sql);

	$sql = "DELETE FROM campus WHERE id='$id'";
	$conn->query($sql);
}
?>