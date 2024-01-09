<?php
  session_start();
  include 'db.php';

  if(!isset($_SESSION['id'])) {
    header("location: ../");
    exit();
  }

  if($_SESSION['privelege'] == "Faculty" || $_SESSION['privelege'] == "Associate Dean" || $_SESSION['privelege'] == "Dean") {
    header("location: ../faculty_assocdean");
    exit();
  } else if($_SESSION['privelege'] == "Head") {
    header("location: ../head");
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
    <title>UniLink - Admin</title>
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
        <li class="nav-item active">
          <a class="nav-link" href="main_user_management.php">
            <i class="bi bi-person-video3"></i>
            <span>Account Management</span>
          </a>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-university"></i>
            <span>University Setup</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="campus.php">Campus</a>
              <a class="collapse-item" href="college.php">College</a>
              <a class="collapse-item" href="program.php">Program</a>
            </div>
          </div>
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
              <?php
                      $id = $_SESSION['id'];
                      include '../db.php';
                      $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
                      $result = $conn->query($sql);
                      $row = $result->fetch_assoc();
                    ?>
              <span class="mr-2 d-none d-lg-inline custom-text-black">Admin | <?=$row['first_name']." ".$row['last_name']?></span>                   
              <img class="img-profile rounded-circle" src="../imgs/<?php if($row['profile_pic'] == '') {echo "BSU.png";} else {echo $row['profile_pic'];}?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="a-profile.php">
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
          <form action="create_account.php" method="post">
          <div class="container-fluid">
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="main_user_management.php">Account Management</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create User</li>
              </ol>
            </nav>
            <div class="d-flex justify-content-between align-items-center mb-2"></div>
            <div class="card">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="input1">Title</label>
                        <input type="text" class="form-control" id="title" name="title">          
                        </div>
                       </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="input2">First Name</label>
                        <input type="text" class="form-control" id="first" name="first">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="input3">Middle Initial</label>
                        <input type="text" class="form-control" id="middle" name="middle">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="input4">Last Name</label>
                        <input type="text" class="form-control" id="last" name="last">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group sex">
                        <label for="sex">Sex</label>
                        <select class="form-control" id="sex" name="sex">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="input6">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                      </div>
                    </div>
                  </div>
                  <!-- Admin Checkbox  -->
                  <div class="row" id="privelege_n_pass">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                          <input type="password" class="form-control" id="password" name="password" required>
                          <div class="input-group-append">
                            <span class="input-group-text" id="toggle-password">
                              <i class="fa fa-eye" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group sex">
                        <label for="sex">Privelege</label>
                        <select class="form-control" id="privelege" name="privelege" onchange="setCampusCollageDrop()">
                          <option value="Admin">Admin</option>
                          <option value="Associate Dean">Associate Dean</option>
                          <option value="Dean">Dean</option>
                          <option value="Head">Head</option>
                          <option value="VCDEA">VCDEA</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row" id="campus_n_college">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="campus">Campus</label>
                        <select class="form-control" id="campus" name="campus" onchange="setDepartment()">
                            <option selected>-- Select Campus --</option>
                            <?php
                              $sql = "SELECT * FROM `campus`";
                              $result = $conn->query($sql);
                              while($row = $result->fetch_assoc()){
                            ?>
                              <option value="<?=$row['campus_name']?>"><?=$row['campus_name']?></option>
                            <?php
                              }
                            ?>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                          <label for="college">College</label>
                          <select class="form-control" name="department" id="department" onchange="setProgram()" required>
                            <!-- LIST OF DEPARTMENTS/COLLEGES -->
                          </select>
                      </div>
                    </div>
                  </div>
                   <!-- Buttons -->
                   <div class="row">
                <div class="col-md-12">
                    <div class="form-group text-right mt-1">
                      <a href="main_user_management.php" class="btn btn-secondary">Close</a>
                      <input type="submit" name="submit" class="submit btn btn-primary" value="Save">
                    </div>
                </div>
            </div>
                </div>
            <!-- Content Row -->
            <div class="row">
              <!-- Content Column -->
<!--               <div class="col-lg-6 mb-4"></div>
              <div class="col-lg-6 mb-4"></div> -->
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
      </div>
    </form>
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
  setCampusCollageDrop();
  
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
        option.value = element['abbr'];
        option.innerHTML = element['name'];
        college.appendChild(option);
      });
    }
  }

  function setCampusCollageDrop() {
    var privelege = document.getElementById("privelege").value;

    if(privelege == "Head" || privelege == "VCDEA" || privelege == "Admin") {
      var campus = document.getElementById("campus");
      campus.innerHTML = "";
      var option = document.createElement("option");
      option.value = "none";
      option.innerHTML = "none";
      campus.appendChild(option);

      var college = document.getElementById("department");
      college.innerHTML = "";
      option = document.createElement("option");
      option.value = "none";
      option.innerHTML = "none";
      college.appendChild(option);

      document.getElementById("campus_n_college").style.display = "none";
    } else {
      var getCampus = new XMLHttpRequest();
      getCampus.open("GET", "getcampuslist.php");
      getCampus.send();
      getCampus.onload = function() {
        var campus = document.getElementById("campus");
        campus.innerHTML = "";
        var campus_array = JSON.parse(this.responseText);
        var option = document.createElement("option");
        option.value = "";
        option.innerHTML = "-- Select Campus --";
        campus.appendChild(option);
        campus_array.forEach(function(element) {
          option = document.createElement("option");
          option.value = element;
          option.innerHTML = element;
          campus.appendChild(option);
        });
        setDepartment();
      }
      document.getElementById("campus_n_college").style.display = "flex";
    }
  }
</script>
<script>
  document.getElementById("toggle-password").addEventListener("click", function () {
    var passwordInput = document.getElementById("password");
    var icon = this.querySelector("i");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    } else {
      passwordInput.type = "password";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    }
  });
</script>