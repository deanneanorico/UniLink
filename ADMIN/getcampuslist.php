<?php
  include "../db.php";
  $campus = array();

  $sql = "SELECT * FROM `campus`";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
    array_push($campus, $row['campus_name']);
  }

  echo json_encode($campus);
	exit();
?>