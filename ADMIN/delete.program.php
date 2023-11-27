<?php 
include 'includes/db.php';

$id = $_GET['id'];
      
$sql = "DELETE FROM program WHERE id='$id'";
$conn->query($sql);
?>