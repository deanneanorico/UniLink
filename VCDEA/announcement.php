<?php
  session_start();
    $id = $_SESSION['id'];
    include '../db.php';

    $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
  if(!isset($_SESSION['id'])) {
    header("location: ../");
    exit();
  }

  if($_SESSION['privelege'] == "Faculty" || $_SESSION['privelege'] == "Associate Dean" || $_SESSION['privelege'] == "Dean") {
    header("location: ../faculty_assocdean");
    exit();
  } else if($_SESSION['privelege'] == "Admin") {
    header("location: ../admin");
    exit();
  }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UniLink - VCDEA</title>
    <link rel="shortcut icon" type="image/png" href="../imgs/BSU.png" alt="Logo" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    .custom-text-black {
    color: black;
    font-size: 12;
    }
    </style>
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <img src="../imgs/BSU.png" width="50" height="45">
          <div class="sidebar-brand-text mx-3">UniLink</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="announcement_table.php">
            <i class="bi bi-megaphone"></i>
            <span>Announcements</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="status.php">
            <i class="bi bi-speedometer"></i>
            <span>Status</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="docu_repo.php">
            <i class="bi bi-archive"></i>
            <span>Archive</span>
          </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline custom-text-black">VCDEA | <?=$row['first_name']." ".$row['last_name']?></span>
                  <img class="img-profile rounded-circle" src="imgs/<?php if($row['profile_pic'] == '') {echo "#";} else {echo $row['profile_pic'];}?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="dea_profile.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
<div class="container-fluid">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="announcement_table.php">Announcement</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create Announcement</li>
              </ol>
            </nav>
          <!-- Announcement Cards -->
          <div class="container mt-3">
    <!-- Announcement Card - Left Side -->
    <form method="post" action="add.announcement.php">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Announcement
            </div>
            <div class="card-body">
              <label for="content">Subject</label>
              <textarea class="form-control" id="content" rows="1" name="subject" required></textarea>
              <div></div>
              <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="6" name="content" required></textarea>
              </div>
              <label for="Date">Date</label>
              <input type="date" id="date" name="date" class="form-control" required>
            </div>
          </div>
        </div>
        <!-- Recipient Card - Right Side -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Recipient
            </div>
            <div class="card-body">
              <!-- "Select All" Checkbox -->
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="selectAllCheckbox">
                <label class="form-check-label" for="selectAllCheckbox">Select All</label>
              </div>
              <!-- Add your recipient checkboxes here -->
              <div class="form-check">
            <input type="checkbox" name="college[]" class="form-check-input college-checkbox" id="cicsCheckbox" value="CICS">
            <label class="form-check-label" for="cicsCheckbox">College of Informatics and Computing Sciences</label>
          </div>
          <div class="form-check">
            <input type="checkbox" name="college[]" class="form-check-input college-checkbox" id="cabeiCheckbox" value="CABEIHM">
                <label class="form-check-label" for="cabeiCheckbox">College of Accountancy, Business, Economics, International Hospitality Management</label>
              </div>
              <div class="form-check">
            <input type="checkbox" name="college[]" class="form-check-input college-checkbox" id="casCheckbox" value="CAS">
                <label class="form-check-label" for="casCheckbox">College of Arts and Sciences</label>
              </div>
              <div class="form-check">
                <input type="checkbox" name="college[]" class="form-check-input college-checkbox" id="cteCheckbox" value="CTE">
                <label class="form-check-label" for="cteCheckbox">College of Teacher Education</label>
              </div>
              <div class="form-check">
                <input type="checkbox" name="college[]" class="form-check-input college-checkbox" id="conahsCheckbox" value="CONAHS">
                <label class="form-check-label" for="conahsCheckbox">College of Nursing and Allied Health Sciences</label>
              </div>
              <!-- Announce Button -->
              <button class="btn btn-primary float-right bi bi-megaphone ml-2" type="submit" onclick="announce()">
                Announce
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
          </div>
        </div>
        <!-- End of Main Content -->
      </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Developed by Unilink 2023</span>
            </div>
          </div>
        </footer>
      
        <!-- End of Footer -->
    
      <!-- End of Content Wrapper -->

    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

  </body>
</html>
<script>
  function setDepartment() {
    var campus = document.getElementById("campus").value;

    var getCollege = new XMLHttpRequest();
    getCollege.open("GET", "getcampus.php?college=" + campus);
    getCollege.send();
    getCollege.onload = function() {
      var college = document.getElementById("department");
      college.innerHTML = "";
      var college_array = JSON.parse(this.responseText);
      college_array.forEach(function(element) {
        var option = document.createElement("option");
        option.value = element;
        option.innerHTML = element;
        college.appendChild(option);
      });
    }
  }
</script>
<script>
  // JavaScript to handle "Select All" functionality
  document.getElementById("selectAllCheckbox").addEventListener("change", function () {
    var checkboxes = document.getElementsByClassName("college-checkbox");

    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = this.checked;
    }
  });

  // Function to handle the Announce button click
  function announce() {
    // Get selected colleges and perform the announcement logic
    var selectedColleges = [];

    var checkboxes = document.getElementsByClassName("college-checkbox");
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        selectedColleges.push(checkboxes[i].value);
      }
    }

    // Perform the announcement logic with the selectedColleges array
    // You can add your announcement code here
    console.log("Selected Colleges: ", selectedColleges);
  }
</script>
