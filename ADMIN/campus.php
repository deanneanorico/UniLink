<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Unilink - Admin</title>
    <link rel="shortcut icon" type="image/png" href="../Unilink/BSU.png" alt="Logo" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="ckeditor/build/ckeditor.js"></script>
    <!-- Sweet Alert -->
    <script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <body id="page-top"> 
    <?php 
      session_start();
      include 'db.php';

      if(isset($_POST['addcampus']))
      {    
          $campus_name = $_POST['campus_name'];
          $address = $_POST['address'];

          $sql = "INSERT INTO campus (campus_name, address) VALUES (?, ?)";
          $stmt = mysqli_prepare($conn, $sql);

          if ($stmt) {
              mysqli_stmt_bind_param($stmt, "ss", $campus_name, $address);
              if (mysqli_stmt_execute($stmt)) {
                  header('location: ./campus.php');
              } else {
                  // Insert failed
              }
              mysqli_stmt_close($stmt);
          }
                  
      }

      else if(isset($_GET['id']))
      {
        $id = $_GET['id'];
      
        $query = "DELETE FROM campus WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
          echo '
        
            <script type="text/javascript">
          swal({
          title: "Deleted Successfully",
          icon: "success",
          button: "Close",
          });
          setTimeout(function(){location.reload(1)},3000000);
          </script>';
          header('location: ./campus.php');

        }
        else
        {
          echo '
    
        <script type="text/javascript">
          swal({
          title: "Delete Failed",
          icon: "warning",
          button: "Close",
          });
          setTimeout(function(){location.reload(1)},3000000);
          </script>';
        }
      } else if(isset($_POST['updateCampus'])) {
        $id = $_POST['upid'];
        $campus_name = $_POST['upCampus'];
        $address = $_POST['upAddress'];

        $sql = "UPDATE `campus` SET `campus_name`= ?,`address`= ? WHERE `id` = ?";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $campus_name, $address, $id);
            if (mysqli_stmt_execute($stmt)) {
                // Insert successful
            } else {
                // Insert failed
            }
            mysqli_stmt_close($stmt);
        }
      }
            
    ?>
    <!-- Success Alert
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert" style="display: none;"><strong>Success!</strong> Campus added successfully. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
    // Error Alert
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorAlert" style="display: none;"><strong>Error!</strong> Failed to add campus. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> -->
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.php">
          <img src="..\imgs\BSU.png" width="50" height="45">
          <div class="sidebar-brand-text mx-3">UNILINK</div>
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
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item active">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-university"></i>
            <span>University Setup</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="univ.php">Office</a>
              <a class="collapse-item" href="campus.php">Campus</a>
              <a class="collapse-item" href="college.php">College</a>
              <a class="collapse-item" href="program.php">Program</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="announcement.php">
            <i class="bi bi-megaphone"></i>
            <span>Announcement</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_management.php">
            <i class="bi bi-person-video3"></i>
            <span> Account Management</span>
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
            <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <div class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                  <img class="img-profile rounded-circle" src="imgs/undraw_profile_3.svg">
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
          <div class="container-fluid">
            <!-- Button for creating a campus -->
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h3 class="h3 mb-0 text-gray-800">Campus</h3>
              <div class="d-flex">
                <a class="btn btn-primary rounded-fill" data-toggle="modal" data-target="#addcampus">
                  <i class="fas fa-plus"></i> Add Campus </a>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="table">
                  <table id="myTable" class="table display" data-ordering="true" data-paging="true" data-searching="true">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Campus</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody> 
                    <?php
                      $query = "SELECT * FROM campus";
                      $sql = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($sql)) { 
                    ?> 
                      <tr>
                        <td> <?php echo $row["id"]; ?> </td>
                        <td> <?php echo $row["campus_name"]; ?> </td>
                        <td> <?php echo $row["address"]; ?> </td>
                        <td>
                          <a class="editCampus" data-toggle="modal" data-target="#editCampusModal" id="editCampus" onclick="setData(`<?=$row['id']?>`, `<?=$row['campus_name']?>`, `<?=$row['address']?>`)">
                            <i class='fas fa-edit text-success'></i>
                          </a>
                          <a href="campus.php?id=<?php echo $row['id']; ?>" onClick="return confirm('Are you sure you want to delete?')" name="delcampus">
                            <i class="fas fa-trash text-danger"></i>
                          </a>
                        </td>
                      </tr> 
                    <?php 
                      } 
                    ?> 
                    </tbody>
                    <!-- <tfoot></tfoot> -->
                  </table>
                </div>
              </div>
              <div class="modal fade" id="addcampus" tabindex="-1" role="dialog" aria-labelledby="addmodallabel" aria-hidden="true">
                <!-- Modal content goes here -->
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addmodallabel">Add Campus</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Form Fields -->
                    <form action="#" method="post">
                      <!-- Replace "insert_campus.php" with the actual path to your server-side script -->
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="campus_name">Campus</label>
                          <input type="text" name="campus_name" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" name="address" class="form-control" placeholder="" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="addcampus">Add</button>
                      </div>
                    </form>
                    <!-- Form ends -->
                  </div>
                </div>
              </div>
              <div class="modal fade" id="editCampusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Campus</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                    </div>
                    <form action="#" method="POST" id="updateCampusModal">
                      <div class="modal-body">
                        <input type="hidden" name="upid" id="upid" class="form-control" placeholder="" required>
                        <div class="form-group">
                          <label for="campus_name">Campus</label>
                          <input type="text" name="upCampus" id="upCampus" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" name="upAddress" id="upAddress" class="form-control" placeholder="" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="updateCampus">Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Begin Page Content -->
          <!-- /.container-fluid -->
          <!-- End of Main Content -->
          <!-- Footer -->
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
    </div>
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
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
     <script type="text/javascript">
      $(function() {
        //Take the data from the TR during the event button
        $('table').on('click', 'a.editCampus', function(ele) {
          //the 
          < tr > variable is use to set the parentNode from "ele
          var tr = ele.target.parentNode.parentNode;
          //I get the value from the cells (td) using the parentNode (var tr)
          var id = tr.cells[0].textContent;
          var campus_name = tr.cells[1].textContent;
          var address = tr.cells[2].textContent;
          //Prefill the fields with the gathered information
          $('h5.modal-title').html('Edit Campus');
          $('#upid').val(id);
          $('#upCampus').val(campus_name);
          $('#upAddress').val(address);
          //If you need to update the form data and change the button link
          $("form#updateCampusModal").attr('action', window.location.href);
          $("a#updateCampus").attr('href', window.location.href);
        });
      });
    </script> 
    <?php
    // include 'footer.php';
    ?> <script>
      function setData(q, w, r) {
        document.getElementById('upid').value = q;
        document.getElementById('upCampus').value = w;
        document.getElementById('upAddress').value = r;
      }
    </script>
  </body>
</html>