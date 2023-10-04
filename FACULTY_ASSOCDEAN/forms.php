<?php
// Database connection code goes here (configure your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unilink";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize a variable to track whether the form has been submitted successfully
$formSubmitted = false;

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $activity_title = $_POST["activityName"];
    $campus = $_POST['campus'];
    $college = $_POST["department"];
    $program = $_POST["program"];
    $program = isset($_POST["program"]) ? $_POST["program"] : '';
    $partner = $_POST["partner"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $total_roles = $_POST['total_roles'] + 1;
    $rationale = $_POST["rationale"];
    $objectives = $_POST["objectives"];
    $budget_source = $_POST["budget"];
    $id = array();

    if(isset($_POST['submit'])) {
      $i = 0;
      while($i < $total_roles) {
          $sql = "SELECT UUID() AS id";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          array_push($id, $row['id']);
          $i++;
      }

      // Check if the "partnerType" field is set and not empty
      if (isset($_POST["partnerType"]) && !empty($_POST["partnerType"])) {
          $partner_type = $_POST["partnerType"];
      } else {
          // Handle the case where "partnerType" is not set or empty
          $partner_type = ""; // You can set a default value or handle the error as needed
      }

      // Check if the "program" field is not empty
      if (!empty($program)) {
          // Insert the data into the database
          $sql = "INSERT INTO `activityform`(`id`, `activity_title`, `campus`, `college`, `program`, `partner_type`, `partner`, `start_date`, `end_date`, `rationale`, `objective`, `budget`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";


          // Prepare the SQL statement using a prepared statement
          $stmt = $conn->prepare($sql);

          // Bind parameters to the prepared statement
          $stmt->bind_param("ssssssssssss", $id[0], $activity_title, $campus, $college, $program, $partner_type, $partner, $start_date, $end_date, $rationale, $objectives, $budget_source);


          if ($stmt->execute()) {
              $formSubmitted = true; // Set the flag to true if the form submission was successful
          } else {
              echo "Error: " . $stmt->error;
          }

          $i = 1;
          $total_roles;
          foreach($_POST['role_name'] as $role_name){
            $sql = "INSERT INTO `activity_representatives`(`id`, `activityform_id`, `role`) VALUES ('$id[$i]','$id[0]','$role_name')";
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
                  $sql = "INSERT INTO `activity_representatives_responsibilities`(`activity_representatives_id`, `responsibility`) VALUES (?,?)";
                  $stmt = mysqli_stmt_init($conn);
                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../");
                    exit();
                  }
                  mysqli_stmt_bind_param($stmt, "ss", $id[$i], $responsibility);
                  mysqli_stmt_execute($stmt);
                  $k++;
                } else {
                  $sql = "INSERT INTO `activity_representatives_responsibilities`(`activity_representatives_id`, `responsibilities_id`, `responsibility`) VALUES (?,?,?)";
                  $stmt = mysqli_stmt_init($conn);
                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../");
                    exit();
                  }
                  mysqli_stmt_bind_param($stmt, "sss", $id[$i], $responsibilities_id, $responsibility);
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
                  $sql = "INSERT INTO `representatives`(`activity_representatives_id`, `name`, `designation`) VALUES (?,?,?)";
                  $stmt = mysqli_stmt_init($conn);
                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../");
                    exit();
                  }
                  mysqli_stmt_bind_param($stmt, "sss", $id[$i], $name, $designation);
                  mysqli_stmt_execute($stmt);
                  $j++;
                } else {
                  $sql = "INSERT INTO `representatives`(`activity_representatives_id`, `representative_roles_id`, `name`, `designation`) VALUES (?,?,?,?)";
                  $stmt = mysqli_stmt_init($conn);
                  if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../");
                    exit();
                  }
                  mysqli_stmt_bind_param($stmt, "ssss", $id[$i], $representative_roles_id, $name, $designation);
                  mysqli_stmt_execute($stmt);
                  $j++;
                }
              }
            }
            $i++;
          }

          $i = 0;
          foreach ($_POST['item_name'] as $item_name) {
              $quantity = $_POST['quantity'][$i];
              $cost = $_POST['cost'][$i];
              $sql = "INSERT INTO `budget`(`activityform_id`, `item_description`, `quantity`, `unit_cost`, `total`) VALUES (?,?,?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                  header("location: ../");
                  exit();
              }
              $total = $cost * $quanity;
              mysqli_stmt_bind_param($stmt, "sssss", $id[0], $item_name, $quantity, $cost, $total);
              mysqli_stmt_execute($stmt);
              $i++;
          }

          // Close the prepared statement
          $stmt->close();
      } else {
          echo "Error: 'program' field cannot be empty.";
      }
    } 
    else if(isset($_POST['edit'])) {
      if (isset($_POST["partnerType"]) && !empty($_POST["partnerType"])) {
        $partner_type = $_POST["partnerType"];
      } else {
          // Handle the case where "partnerType" is not set or empty
        $partner_type = ""; // You can set a default value or handle the error as needed
      }

      $total_roles--;

      $form_id = $_POST['id'];

      array_push($id, $form_id);

      $i = 0;
      while($i < $total_roles) {
        $sql = "SELECT UUID() AS id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        array_push($id, $row['id']);
        $i++;
      }
      $sql = "UPDATE `activityform` SET `activity_title`=?,`campus`=?,`college`=?,`program`=?,`partner_type`=?,`partner`=?,`start_date`=?,`end_date`=?,`rationale`=?,`objective`=?,`budget`=? WHERE `id`=?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location: ui-formsEdit.php");
          exit();
      }

      mysqli_stmt_bind_param($stmt, "ssssssssssss", $activity_title, $campus, $college, $program, $partner_type, $partner, $start_date, $end_date, $rationale, $objectives, $budget_source, $id[0]);
      mysqli_stmt_execute($stmt);

      // DELETING

      $activity_representatives_id = array();

      $sql = "SELECT * FROM `activity_representatives` WHERE `activityform_id` LIKE '$id[0]'";
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
      $sql = "DELETE FROM `activity_representatives` WHERE `activityform_id` LIKE '$id[0]'";
      $conn->query($sql);
  
      $sql = "DELETE FROM `budget` WHERE `activityform_id` LIKE '$id[0]'";
      $conn->query($sql);

      // INSERTING
      $i = 1;
      $k = 0;
      $j = 0;

      foreach($_POST['role_row'] as $role_row) {
        foreach($_POST['responsibilities_position'] as $responsibilities_position) {
          if($responsibilities_position == $role_row) {
            $responsibility = $_POST['responsibilities'][$k];
            $responsibilities_id = $_POST['responsibilities_id'][$k];

            if($responsibilities_id == "null") {
              $sql = "INSERT INTO `activity_representatives_responsibilities`(`activity_representatives_id`, `responsibility`) VALUES (?,?)";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../");
                exit();
              }
              mysqli_stmt_bind_param($stmt, "ss", $id[$i], $responsibility);
              mysqli_stmt_execute($stmt);
              $k++;
            } else {
              $sql = "INSERT INTO `activity_representatives_responsibilities`(`activity_representatives_id`, `responsibilities_id`, `responsibility`) VALUES (?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../");
                exit();
              }
              mysqli_stmt_bind_param($stmt, "sss", $id[$i], $responsibilities_id, $responsibility);
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
              $sql = "INSERT INTO `representatives`(`activity_representatives_id`, `name`, `designation`) VALUES (?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../");
                exit();
              }
              mysqli_stmt_bind_param($stmt, "sss", $id[$i], $name, $designation);
              mysqli_stmt_execute($stmt);
              $j++;
            } else {
              $sql = "INSERT INTO `representatives`(`activity_representatives_id`, `representative_roles_id`, `name`, `designation`) VALUES (?,?,?,?)";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../");
                exit();
              }
              mysqli_stmt_bind_param($stmt, "ssss", $id[$i], $representative_roles_id, $name, $designation);
              mysqli_stmt_execute($stmt);
              $j++;
            }
          }
        }
        $i++;
      }

      $i = 0;
      foreach ($_POST['item_name'] as $item_name) {
          $quantity = $_POST['quantity'][$i];
          $cost = $_POST['cost'][$i];
          $sql = "INSERT INTO `budget`(`activityform_id`, `item_description`, `quantity`, `unit_cost`, `total`) VALUES (?,?,?,?,?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("location: ../");
              exit();
          }
          $total = $cost * $quanity;
          mysqli_stmt_bind_param($stmt, "sssss", $id[0], $item_name, $quantity, $cost, $total);
          mysqli_stmt_execute($stmt);
          $i++;
      }

      header("location: ./ui-formsPreview.php?query=success");
    }
}

// Check if the form was successfully submitted and then redirect to ui-formsPreview.php
if ($formSubmitted) {
    header("Location: ui-formsPreview.php");
    exit(); // Ensure that no more content is sent after the redirection
}

$conn->close();
?>

