<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../db.php';

    if(isset($_POST['submit'])) {
      $activityform_id = $_POST['activityform_id'];
      $activityName = $_POST['activityName'];
      $sponsor = $_POST['sponsor'];
      $total_roles = $_POST['total_roles'] + 1;
      $start_date = $_POST['start_date'];
      $end_date = $_POST['end_date'];
      $objectives = $_POST['objectives'];
      $overview = $_POST['overview'];
      $id = array();

      $i = 0;
      while($i < $total_roles) {
        $sql = "SELECT UUID() AS id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        array_push($id, $row['id']);
        $i++;
      }

      $sql = "INSERT INTO `narrative_report`(`id`, `activityform_id`, `activity_name`, `sponsor`, `start_date`, `end_date`, `objectives`, `overview`) VALUES (?,?,?,?,?,?,?,?)";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./report.php?invalid=1"); // invalid = 1 may error sa sql statement
        exit();
      }

      mysqli_stmt_bind_param($stmt, "ssssssss", $id[0], $activityform_id, $activityName, $sponsor, $start_date, $end_date, $objectives, $overview);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);

      $i = 1;
      foreach($_POST['role_name'] as $role_name){
        $sql = "INSERT INTO `narrative_report_representative`(`id`, `narrative_report_id`, `role`) VALUES ('$id[$i]','$id[0]','$role_name')";
        $result = $conn->query($sql);
        $i++;
      }

      $i = 1;
      $k = 0;
      $j = 0;

      foreach($_POST['role_row'] as $role_row) {
        foreach($_POST['responsibilities_position'] as $responsibilities_position) {
          if($responsibilities_position == $role_row) {
            $responsibility = $_POST['responsibilities'][$k];
            $responsibilities_id = $_POST['responsibilities_id'][$k];

            if($responsibilities_id == "null") {
              $sql = "SELECT UUID() AS id";
              $result_id = $conn->query($sql);
              $result_id = $result_id->fetch_assoc();
              $sql = "INSERT INTO `narrative_report_responsibilities_list`(`id`, `narrative_report_representative_id`, `responsibility`) VALUES (?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ./");
                exit();
              }
              mysqli_stmt_bind_param($stmt, "sss", $result_id['id'], $id[$i], $responsibility);
              mysqli_stmt_execute($stmt);
              $k++;
            } else {
              $sql = "SELECT UUID() AS id";
              $result_id = $conn->query($sql);
              $result_id = $result_id->fetch_assoc();
              $sql = "INSERT INTO `narrative_report_responsibilities_list`(`id`, `narrative_report_representative_id`, `responsibilities_id`, `responsibility`) VALUES (?,?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ./");
                exit();
              }
              mysqli_stmt_bind_param($stmt, "ssss", $result_id['id'], $id[$i], $responsibilities_id, $responsibility);
              mysqli_stmt_execute($stmt);
              $k++;
            }
          }
        }

        foreach($_POST['roles_position'] as $roles_position) {
          if($roles_position == $role_row) {
            $name = $_POST['roles_name'][$j];
            $designation = $_POST['roles_description'][$j];
            $representative_roles_id = $_POST['representative_roles_id'][$j];

            if($representative_roles_id == "null") {
              $sql = "SELECT UUID() AS id";
              $result_id = $conn->query($sql);
              $result_id = $result_id->fetch_assoc();
              $sql = "INSERT INTO `narrative_report_representative_list`(`id`, `narrative_report_representative_id`, `name`, `designation`) VALUES (?,?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ./");
                exit();
              }
              mysqli_stmt_bind_param($stmt, "ssss", $result_id['id'], $id[$i], $name, $designation);
              mysqli_stmt_execute($stmt);
              $j++;
            } else {
              $sql = "SELECT UUID() AS id";
              $result_id = $conn->query($sql);
              $result_id = $result_id->fetch_assoc();
              $sql = "INSERT INTO `narrative_report_representative_list`(`id`, `narrative_report_representative_id`, `representative_roles_id`, `name`, `designation`) VALUES (?,?,?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ./");
                exit();
              }
              mysqli_stmt_bind_param($stmt, "sssss", $result_id['id'], $id[$i], $representative_roles_id, $name, $designation);
              mysqli_stmt_execute($stmt);
              $j++;
            }
          }
        }
        $i++;
      }
    }
    header("location: ./report_pdf.php?id=" . $id[0]);
    exit();
  }
?>