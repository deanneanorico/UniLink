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
        while($i < $total_roles) {
          $sql = "INSERT INTO `activity_representatives`(`id`, `activityform_id`) VALUES ('$id[$i]','$id[0]')";
          $result = $conn->query($sql);
          $i++;
        }
        $same = $_POST['roles_position'][0];
        $k = 0;
        
        $i = 1;
        foreach($_POST['roles_position'] as $value) {
          $name = $_POST['roles_name'][$k];
          $designation = $_POST['roles_description'][$k];
          if($same != $value) {
            $same = $value;
            $i++;
          }
          $sql = "INSERT INTO `representatives`(`activity_representatives_id`, `name`, `designation`) VALUES (?,?,?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../");
            exit();
          }
          mysqli_stmt_bind_param($stmt, "sss", $id[$i], $name, $designation);
          mysqli_stmt_execute($stmt);
          $k++;
        }

        $same = $_POST['responsibilities_position'][0];
        $i = 1;
        $k = 0;

        foreach($_POST['responsibilities_position'] as $value) {
          $responsibility = $_POST['responsibilities'][$k];
          if($same != $value) {
            $same = $value;
            $i++;
          }
          $sql = "INSERT INTO `activity_representatives_responsibilities`(`activity_representatives_id`, `responsibility`) VALUES (?,?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../");
            exit();
          }
          mysqli_stmt_bind_param($stmt, "ss", $id[$i], $responsibility);
          mysqli_stmt_execute($stmt);
          $k++;
        }

        $i = 0;
        foreach ($_POST['item_name'] as $item_name) {
            $quantity = $_POST['quantity'][$i];
            $cost = $_POST['cost'][$i];
            $sql = "INSERT INTO `budget`(`activityform_id`, `item_description`, `quantity`, `unit_cost`) VALUES (?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "ssss", $id[0], $item_name, $quantity, $cost);
            mysqli_stmt_execute($stmt);
            $i++;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Error: 'program' field cannot be empty.";
    }
}

// Check if the form was successfully submitted and then redirect to ui-formsPreview.php
if ($formSubmitted) {
    header("Location: ui-formsPreview.php");
    exit(); // Ensure that no more content is sent after the redirection
}

$conn->close();
?>

