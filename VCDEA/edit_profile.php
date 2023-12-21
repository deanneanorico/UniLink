<?php
  session_start();

$id = $_SESSION['id'];
  include '../db.php';

  $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
  $result = $conn->query($sql);
  $userRow = $result->fetch_assoc();
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
        <li class="nav-item">
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
                <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline custom-text-black">VCDEA | <?=$userRow['first_name']." ".$userRow['last_name']?></span>
                                <img class="img-profile rounded-circle"
                                    src="imgs/<?php if($userRow['profile_pic'] == '') {echo "BSU.png";} else {echo $userRow['profile_pic'];}?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="ui-profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
            </ul>
          </nav>
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <form action="edit.profile.php" method="post" enctype="multipart/form-data">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="dea_profile.php">Profile</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
              </ol>
            </nav>
          <!-- Profile Pic -->
          <div class="container mt-3">
            <div class="row">
          <!-- Profile Pic -->
          <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              Profile Picture
            </div>
            <div class="card-body text-center">
              <img id="profileImage" src="imgs/<?php if($userRow['profile_pic'] == '') {echo "BSU.png";} else {echo $userRow['profile_pic'];}?>" class="card-img-top mx-auto" style="max-width: 200px;" alt="Profile Image">
              <input type="file" name="image" id="fileInput" style="display: none;" accept="image/*">
              <label for="fileInput" class="btn btn-primary float-right bi bi-image ml-2">
                Change
              </label>
            </div>
          </div>
        </div>
          <!-- Recipient Cards -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
              Profile Details
              </div>
          <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="input1">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?=$userRow['title']?>">          
                        </div>
                       </div>
                       <div class="col-md-6">
                      <div class="form-group sex">
                        <label for="sex">Sex</label>
                        <select class="form-control" id="sex" name="sex">
                          <option value="Male" <?php if($userRow['sex'] == 'Male'){echo "selected";}?>>Male</option>
                          <option value="Female" <?php if($userRow['sex'] == 'Female'){echo "selected";}?>>Female</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="input2">First Name</label>
                        <input type="text" class="form-control" id="first" name="first" value="<?=$userRow['first_name']?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="input3">Middle Initial</label>
                        <input type="text" class="form-control" id="middle" name="middle" value="<?=$userRow['mid_name']?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="input4">Last Name</label>
                        <input type="text" class="form-control" id="last" name="last" value="<?=$userRow['last_name']?>">
                      </div>
                    </div>
                  <!-- Admin Checkbox  -->
                  </div>
            <button class="btn btn-primary float-right bi bi-floppy ml-2" type="submit">
          Update
          </button>
          </div>
          </div>
          </div>
          </div>
          </div>
        </div>
      </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Developed by Unilink 2023</span>
            </div>
          </div>
        </footer>
      </div>
        <!-- End of Footer -->
      </div>
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
  document.getElementById('fileInput').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        document.getElementById('profileImage').src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
</script>
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