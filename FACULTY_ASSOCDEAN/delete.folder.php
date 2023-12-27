<?php 

include '../db.php';

$id = $_POST['id'];

$sql = "DELETE FROM create_folder WHERE create_folder_id = $id";
$conn->query($sql);

$sql = "DELETE FROM create_folder WHERE id = $id";
$conn->query($sql);
 ?>