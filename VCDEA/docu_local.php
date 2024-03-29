<?php
  session_start();

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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
      $(document).ready(function() {
         new DataTable('#fileTable', {
            responsive: true
        });
      });
    </script>
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
        <li class="nav-item active">
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-speedometer"></i>
                    <span>Status</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="activities.php">Activity</a>
                        <a class="collapse-item" href="linkages.php">Linkages</a>
                        <a class="collapse-item" href="list_partner.php">Partner List</a>
                    </div>
                </div>
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
              <!-- Nav Item - Alerts -->
              <div class="topbar-divider d-none d-sm-block"></div>
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
                    <span class="mr-2 d-none d-lg-inline custom-text-black">VCDEA | <?=$row['first_name']." ".$row['last_name']?></span>
                  <img class="img-profile rounded-circle" src="../imgs/<?php if($row['profile_pic'] == '') {echo "#";} else {echo $row['profile_pic'];}?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="ea_profile.php">
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
                    <!-- Back button with icon and label -->
                    <a href="#" class="btn btn" style="color:black;" onclick="goBack()">
                        <i class="bi bi-arrow-left"></i> Back
                    </a>
      <form class="d-none d-sm-inline-block form-inline ml-auto mr-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" id="search-input" class="form-control bg-light border-1 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" id="search-button" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>
                    <!-- Filter button with icon and label -->
                    <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form method="post" action="local.folder.query.php">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Filter by:</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <input type="hidden" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id']; } else { echo "null"; } ?>">
                        <label for="college">College</label>
                        <select class="form-control" name="college">
                          <?php
                            $sql = "SELECT DISTINCT college_abbrev FROM `college`";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){
                          ?>
                              <option value="<?=$row['college_abbrev']?>"><?=$row['college_abbrev']?></option>
                          <?php    
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button class="btn btn-primary" type="submit">Filter</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Button to trigger the modal -->
            <button class="btn btn-primary rounded-fill mr-2" data-toggle="modal" data-target="#filterModal">
             <i class="fas fa-filter"></i> Filter
            </button>
                    </div>
                </div>
                <script>
                    // JavaScript function to go back to the previous page
                    function goBack() {
                        window.history.back();
                    }
                </script>
          <?php
          if(isset($_GET['id'])) {
              $folderID = $_GET['id'];
              if(isset($_GET['college'])) {
                $college = $_GET['college'];
                $sql = "SELECT cf.* FROM create_folder AS cf INNER JOIN users AS u ON cf.created_by = u.id WHERE category = 'local' AND create_folder_id = $folderID AND u.college_abbrev = '$college' ORDER BY id DESC";
              } else {
                $sql = "SELECT * FROM create_folder WHERE category = 'local' AND create_folder_id = $folderID ORDER BY id DESC";
              }
          } else {
            if(isset($_GET['college'])) {
              $college = $_GET['college'];
              $sql = "SELECT cf.* FROM create_folder AS cf INNER JOIN users AS u ON cf.created_by = u.id WHERE category = 'local' AND create_folder_id IS NULL AND u.college_abbrev = '$college' ORDER BY id DESC";
            } else {
              $sql = "SELECT * FROM create_folder WHERE category = 'local' AND create_folder_id IS NULL ORDER BY id DESC";
            }
          }
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              echo '<div class="folder-container" style="display: flex; flex-wrap: wrap;">'; // Start a flex container
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-md-2">
              <div class="folder text-center d-flex align-items-center flex-column" oncontextmenu="showContextMenu(event, <?php echo $row['id']; ?>)">
                  <a href="docu_local.php?id=<?=$row['id']?><?php if(isset($_GET['college'])){ echo "&college=".$_GET['college']; } ?>">
                      <img src="../imgs/bsu_folder.png" style="width:130px">  
                  </a>
                  <div class="card-footer" style="width: 90px; max-height: 50px; overflow: hidden; padding: 03px 08px 45px 05px; text-align: center; font-size: 12;"><?php echo $row["createfolder"] ?></div>
              </div>
          </div>

          <?php
              }
              echo '</div>'; // End the flex container
          }
          ?>
          <?php 
                    if(isset($_GET['id'])) {
                ?>
                <div class="card">
                    <div class="card-body">
                        <div class="table">
                         <table id="fileTable" style="width: 100%;" class="display" data-ordering="true" data-paging="true" data-searching="true">
                            <thead style='text-align: center;'>
                                <tr>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style='text-align: center;'>
                                <?php
                                    $folderID = $_GET['id'];
                                    $sql = "SELECT * FROM uploads WHERE create_folder_id = $folderID";
                                    $uploadsResult = $conn->query($sql);
                                    while($uploadsRow = $uploadsResult->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?=$uploadsRow['path']?></td>
                                    <td style='text-align: center;'>
                                <a href="../uploads/<?=$uploadsRow['path']?>" target="_blank">
                                    <span class="bi bi-envelope-paper text-secondary" title="View"></span>
                                </a>
                                <a href="delete.local.file.php?id=<?=$uploadsRow['id']?>">
                                    <span class="bi bi-trash text-danger" title="Delete"></span>
                                </a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <?php
                    }
                ?>
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