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
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <script>
      $(document).ready(function() {
          $('#announcementTable').DataTable();
      });
    </script>
    <style>
    .custom-text-black {
    color: black;
    font-size: 12;
    }
    /*.form-control.announcement {
    width: 80%; /* Adjust the width as needed */
    margin: 20px auto; /* Center the container */
    border: 1px solid #ccc; /* Add a border for better visibility */
    padding: 10px;
    box-sizing: border-box;
}*/
.announcement-header {
    text-align: left;
    margin-bottom: 10px;
}
.announcement-content {
    text-align: center;
    margin-bottom: 20px;
}
.announcement-footer {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
}
.user-info {
    display: flex;
    align-items: center;
}
.user-info img {
    width: 30px; /* Adjust the size of the profile picture */
    height: 30px;
    border-radius: 50%; /* Make it circular */
    margin-right: 10px;
}
.date {
    text-align: right;
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
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="h3 mb-0 text-gray-800">Announcements</h3>
                        <div class="d-flex">
                            <a class="btn btn-primary rounded-fill" href="announcement.php" role="button">
                                <i class="fas fa-plus"></i> Announcement
                            </a>
                        </div>
                    </div>
                    <div class="card">
                      <div class="form-control">
                        <?php
                                  $sql = "SELECT * FROM announcement";
                                  $result = $conn->query($sql);
                                  while($announcementRow = $result->fetch_assoc()) 
                                ?>
                          <div class="announcement-header">
                              <label><?=$announcementRow['subject']?></label>
                          </div>
                          <div class="announcement-content">
                              <p><?=$announcementRow['content']?></p>
                          </div>
                          <div class="announcement-footer">
                              <div class="user-info">
                      <img class="img-profile rounded-circle" src="imgs/<?php if($row['profile_pic'] == '') {echo "#";} else {echo $row['profile_pic'];}?>">            
                      <span><?=$row['first_name']." ".$row['last_name']?></span>
                              </div>
                              <div class="date">
                                  <?=$announcementRow['date_added']?>
                              </div>
                          </div>
                      </div>

                            <!-- <div class="table">
                             <table id="announcementTable" style="width: 100%;" class="display" data-ordering="true" data-paging="true" data-searching="true">
                                <thead style='text-align: center;'>
                                    <tr>
                                        <th >No.</th>
                                        <th style="width: 22%;">Subject</th>
                                        <th style="width: 14%">Date Posted</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody style='text-align: center;'>
                                <?php
                                  $count = 1;
                                  $sql = "SELECT * FROM announcement";
                                  $result = $conn->query($sql);
                                  while($announcementRow = $result->fetch_assoc()) {
                                ?>
                                  <tr>
                                    <td><?=$count?></td>
                                    <td><?=$announcementRow['subject']?></td>
                                    <td><?=$announcementRow['content']?></td>
                                    <td><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#announcement<?=$announcementRow['id']?>"><i class="bi bi-arrows-fullscreen"></i></button></td>
                                  </tr>

                                  <div class="modal fade" id="announcement<?=$announcementRow['id']?>" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Announcement</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="col">
                                              <label for="view-subject<?=$announcementRow['id']?>">Subject: </label>
                                              <input type="text" id="view-subject<?=$announcementRow['id']?>" class="form-control" value="<?=$announcementRow['subject']?>" readonly>
                                            </div>
                                          </div>

                                          <div class="row mt-3">
                                            <div class="col">
                                              <label for="view-content<?=$announcementRow['id']?>">Content:</label>
                                              <textarea class="form-control" id="view-content<?=$announcementRow['id']?>" readonly><?=$announcementRow['content']?></textarea>                                             
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php
                                    $count++;
                                  }
                                ?>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                </div>
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
