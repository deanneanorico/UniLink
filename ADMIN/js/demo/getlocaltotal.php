<?php
  include "../../db.php";

  $total = array();

  $sql = "SELECT `category`, COUNT(*) as `total` FROM `partners` GROUP BY `category`";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    array_push($total, $row['total']);
  }
  echo json_encode($total);
  exit();
?>