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

  if($_SESSION['privelege'] == "Admin") {
    header("location: ../admin");
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
    <title>UniLink - Dean/Associate Dean</title>
    <link rel="shortcut icon" type="image/png" href="../imgs/BSU.png" alt="Logo" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
     <script>
      $(document).ready(function() {
         new DataTable('#partnerTable', {
            responsive: true
        });
      });
    </script>
    <style>
    .custom-text-black {
    color: black;
    font-size: 12;
    }
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
                <img src="..\imgs\BSU.png" width="50" height="45">
                <div class="sidebar-brand-text mx-3">UniLink</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ui-formsPreview.php">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Activity Management</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ui-announcement.php">
                    <i class="fas fa-fw fa-bullhorn"></i>
                    <span>Announcements</span></a>
                </li>
            <li class="nav-item">
              <a class="nav-link" href="docu_repo.php">
                <i class="bi bi-archive"></i>
                <span>Archive</span>
              </a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="partners.php">
                <i class="bi bi-card-list"></i>
                <span>Linkages</span></a>
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$userRow['first_name']." ".$userRow['last_name']?></span>
                      <img class="img-profile rounded-circle"
                          src="../imgs/<?php if($userRow['profile_pic'] == '') {echo "BSU.png";} else {echo $userRow['profile_pic'];}?>">
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
                    <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="h3 mb-0 text-gray-800">Partner List</h3>
                        <!-- Filter button with icon and label -->
                        <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Filter Options</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="form-control" name="category" required>
                                              <option value="local">Local</option>
                                              <option value="international">International</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" required>
                                              <option value="Successful Partner">Successful Partner</option>
                                              <option value="For Evaluation">For Evaluation</option>
                                              <option value="For Review Legal">For Review Legal</option>
                                              <option value="For Review Partner">For Review Partner</option>
                                              <option value="For Signing MOU/MOA">For Signing MOU/MOA</option>
                                              <option value="For Notary Signing">For Notary Signing</option>
                                              <option value="Inactive">Inactive</option>
                                            </select>
                                      </div>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" onclick="applyFilter()">Filter</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Button to trigger the modal -->
                        <button class="btn btn-primary rounded-fill" data-toggle="modal" data-target="#filterModal">
                          <i class="fas fa-filter"></i> Filter
                        </button>
                      </div>
                      <div class="card">
                        <div class="card-body">
                            <div class="table">
                             <table id="partnerTable" style="width: 100%;" class="display" data-ordering="true" data-paging="true" data-searching="true">
                                <thead style='text-align: center;'>
                                    <tr>
                                        <th>No.</th>
                                        <th>Partner Name</th>
                                        <th>Category</th>
                                        <th>College</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $collegeAbbrev = $_SESSION['college'];
                                    $sql = "SELECT p.*, c.name AS college_name FROM partners AS p INNER JOIN college AS c ON p.college_id = c.collegeID WHERE c.college_abbrev = '$collegeAbbrev'";
                                    $result = $conn->query($sql);
                                    $count = 1;
                                    while($row = $result->fetch_assoc()) {
                                  ?>
                                    <tr style="center">
                                      <td style='text-align: center;'><?=$count?></td>
                                      <td style='text-align: center;'><?=$row['name']?></td>
                                      <td style='text-align: center;'><?=$row['category']?></td>
                                      <td style='text-align: center;'><?=$row['college_name']?></td>
                                      <td style='text-align: center;'><?=$row['status']?></td>
                                      <td style='text-align: center; display: flex; justify-content: center;'>
                                        <a href='ui-formsPreview.php' title='View Activity'>
                                            <span class='bi bi-three-dots'></span>
                                        </a>
                                    </td>
                                      </tr>
                                  <?php
                                      $count++;
                                    }
                                  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
</div>
                <!-- /.container-fluid -->
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
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
        <script>
  function applyFilter() {
    const selectedOption = document.getElementById('selectOption').value;
    // alert(`Filter Applied: ${selectedOption}`);
    // Add your logic to perform filtering or other actions here
  }
</script>
</body>
</html>
