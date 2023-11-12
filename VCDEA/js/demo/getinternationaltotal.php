<?php
  include "../../db.php";

  $sql = "SELECT COUNT(*) AS `total` FROM `partners` WHERE `category` = 'International'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo $row['total'];
  exit();
?>