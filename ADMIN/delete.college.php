<?php 
include 'includes/db.php';

$id = $_GET['id'];
      
$query = "SELECT * FROM college WHERE collegeID=$id";
$result = $conn->query($query);

if($row = $result->fetch_assoc()) {
	$sql = "DELETE FROM program WHERE college_id=$id";
	$conn->query($sql);

	$sql = "DELETE FROM college WHERE collegeID=$id";
	$conn->query($sql);
}
?>