<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Unilink - Admin</title>
    <link rel="shortcut icon" type="image/png" href="../Unilink/BSU.png" alt="Logo" />
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  </head>
<style>


h1 {
  margin: 150px auto 30px auto;
  text-align: center;
  color: red;
}

.hi-slide {
  position: relative;
  width: 754px;
  height: 292px;
  margin: 115px auto 0;
}

.hi-slide .hi-next,
.hi-slide .hi-prev {
  position: absolute;
  top: 50%;
  width: 40px;
  height: 40px;
  margin-top: -20px;
  border-radius: 50px;

  line-height: 40px;
  text-align: center;
  cursor: pointer;
  background-color: #fff;
  color: black;
  transition: all 0.6s;
  font-size: 20px;
  font-weight: bold;
}

.hi-slide .hi-next:hover,
.hi-slide .hi-prev:hover {
  opacity: 1;
  background-color: #fff;
}

.hi-slide .hi-prev {
  left: -60px;
}

.hi-slide .hi-prev::before {
  content: "<";
}

.hi-slide .hi-next {
  right: -60px;
}

.hi-slide .hi-next::before {
  content: ">";
}

.hi-slide > ul {
  list-style: none;
  position: relative;
  width: 754px;
  height: 292px;
  margin: 0;
  padding: 0;
}

.hi-slide > ul > li {
  overflow: hidden;
  position: absolute;
  z-index: 0;
  left: 377px;
  top: 146px;
  width: 0;
  height: 0;
  margin: 0;
  padding: 0;
  border: 3px solid #fff;
  background-color: #333;
  cursor: pointer;
}

 .hi-slide > ul > li > img {
  width: 100%;
  height: 100%;
  background-position: center;
} 
</style>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <img src="../imgs/BSU.png" width="50" height="45">
          <div class="sidebar-brand-text mx-3">UNILINK</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
            <i class="fas fa-university"></i>
            <span>University Setup</span>
          </a>
          <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="office.php">Office</a>
              <a class="collapse-item" href="campus.php">Campus</a>
              <a class="collapse-item" href="college.php">College</a>
              <a class="collapse-item" href="program.php">Program</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_management.php">
            <i class="bi bi-person-video3"></i>
            <span> Account Management</span>
          </a>
        </li>

        <!-- Heading -->
        <!-- Nav Item - Pages Collapse Menu -->
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
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                  <img class="img-profile rounded-circle" src="imgs/undraw_profile_3.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="ui-profile.php">
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
          <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-5" style="width: auto;">
              <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="imgs/BSU.png">
                <div class="card-body text-center">
                  <h5 class="card-title">Batangas State University</h5>
                  <!-- <p class="card-text">
                    Quality Policy Batangas State University is committed to the continous improvement of its services to all customer to meet the challenges of a world class educational institution.
                  </p> -->
                </div>
              </div>
            </div>
              <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="imgs/BSU.png">
                <div class="card-body text-center">
                  <h5 class="card-title">External Affairs Office</h5>
                  <!-- <p class="card-text">
                    Quality Policy Batangas State University is committed to the continous improvement of its services to all customer to meet the challenges of a world class educational institution.
                  </p> -->
                </div>
              </div>

              </div>
              <div class="col-md-4">                
              </div>
            </div>
          </div>
            <!-- Page Heading -->
            <!-- Content Row -->
            <div class="row">
              <!-- Content Column -->
              <div class="col-lg-6 mb-4"></div>
              <div class="col-lg-6 mb-4"></div>
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
<?php
include 'footer.php';
?>
  </body>
</html>