<?php
include 'includes/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM `users` WHERE `id` = $id";
$result = $conn->query($sql);

?>