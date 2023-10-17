<?php
  session_start();
  include "../db.php";

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
    <title>UniLink - Faculty/Associate Dean</title>
    <link rel="shortcut icon" type="image/png" href="../imgs/BSU.png" alt="Logo" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
      /* Custom styles for the progress bar */
      .progress {
        height: 10px;
        /* Set the desired height */
        margin-bottom: 10px;
        /* Add some space below the progress bar */
      }

      .progress-bar {
        height: 100%;
        /* Make sure the progress bar fills the container height */
      }

      .ck-editor__editable {
        min-height: 200px;
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
          <img src="../imgs/BSU.png" height="45" width="50">
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
          <a class="nav-link" href="ui-formsPreview.php">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Activity Management</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ui-announcement.php">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Announcements</span>
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
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
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

                      $sql = "SELECT * FROM `users`";
                      $result = $conn->query($sql);
                      $row = $result->fetch_assoc();
                  ?>
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$row['first_name']." ".$row['last_name']?></span>
                  <img class="img-profile rounded-circle" src="imgs/undraw_profile.svg">
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
          <form method="post" action="forms.php" id="inputForm">
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Narrative Report</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Narrative Form</li>
              </ol>
            </nav>
            <div class="progress">
              <div class="progress-bar progress-bar active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2"></div>
            <div class="card">
              <div class="card-body">
                  <div id="step1">
                    <div class="form-group">
                      <label for="activityName">Activity Title</label>
                      <input type="text" class="form-control outline" id="activityName" name="activityName" />
                    </div>
                    <div class="form-group">
                      <label for="objectives">Sponsor</label>
                      <textarea class="form-control" id="editor" name="sponsor" rows="6"></textarea>
                    </div>
                    <div class="text-right mt-4">
                      <button type="button" class="btn btn-primary" id="nextStep1">Next</button>
                    </div>
                  </div>
                  <div id="step2" style="display: none;">
                  <div class="justify-content-between">
                      <div class="input-group contacts-search mb-4" style="display: flex; justify-content: space-between;">
                        <label>Roles</label>
                        <button style="margin-right: 30px;" type="button" onclick="addRoles()" class="btn btn-primary shadow btn-circle btn-sm">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <input type="hidden" name="total_roles" id="total_roles" value="2" style="" readonly>
                    </div>
                    <hr>
                    <!-- table Project Leader -->
                    <div class="table table-responsive">
                        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Add </h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="card-body">
                                  <div class="table-responsive">
                                    <table id="example6" class="table header-border table-responsive-sm">
                                      <thead>
                                        <tr>
                                          <th class="col-md-5" style="text-align: left;">Name</th>
                                          <th class="col-md-6" style="text-align: left;">Designation</th>
                                          <th class="col-md-2" style="text-align: right;">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody id="tbody_roles1"></tbody>
                                        <!-- List Responsibility of Leader -->
                                     </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> 
                      <div id="role1">
                        <table class="table header-border table-responsive-sm">
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="col-md-11">
                              <input type="text" value="1" name="role_row[]" style="display: none">
                              <input class="form-control" id="role_description_1" type="text" value="Project Leader/s" name="role_name[]" readonly>
                            </div>
                            <div class="md-1" style="padding-right: 30px;">
                              <button type="button" name="addRole" onclick="removeRole(1)" class="btn btn-danger shadow btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                              </button>
                            </div>
                          </div>
                          <thead>
                            <tr>
                              <th class="col-md-5" style="text-align: left;">Name</th>
                              <th class="col-md-6" style="text-align: left;">Designation</th>
                              <th class="col-md-2" style="padding-left: 0px;">
                                <button type="button" name="addRole" class="btn btn-primary shadow btn-circle btn-sm" data-toggle="modal" data-target="#modal1" onclick="setSelectRole(1)">
                                  <i class="fas fa-user-plus"></i>
                                </button>
                                <button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary btn-circle btn-sm" onclick="addCustomMember(1)">
                                  <i class="fas fa-plus" style="color: #1dbf1d"></i>
                                </button>
                              </th>
                            </tr>
                          </thead>
                          <tbody id="member1"></tbody>
                        </table>
                       
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="col-md-11" style="text-align: left;">Responsibility</th>
                              <th class="col-md-1" style="padding-left: 0px;">
                                <button type="button" name="addRole" class="btn btn-primary shadow btn-circle btn-sm" data-toggle="modal" data-target="#responsibilty_modal1" onclick="openModal(1)">
                                  <i class="fas fa-plus"></i>
                                </button>
                                <div class="modal fade" id="responsibilty_modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" style="font-size:20px">Add Project Leader/s Responsibility</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="card-body">
                                          <div class="table-responsive">
                                            <table id="example6" class="table header-border table-responsive-sm">
                                              <thead>
                                                <tr>
                                                  <th class="col-md-5" style="text-align: left;">Role</th>
                                                  <th class="col-md-6" style="text-align: left;">Resposibility</th>
                                                  <th class="col-md-2" style="text-align: right;">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody id="responsibility_list_1">
                                                <!-- List Responsibility of Leader -->
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary btn-circle btn-sm" onclick="addCustomResponsibility(1)">
                                  <i class="fas fa-plus" style="color: #1dbf1d"></i>
                                </button>
                              </th>
                            </tr>
                          </thead>
                          <tbody id="added_responsibility_list_1">
                            <!-- Added Responsibility of Leader -->
                          </tbody>
                        </table>
                      </div>
                      <div id="role2">
                        <table class="table header-border table-responsive-sm">
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="col-md-11">
                              <input type="text" value="2" name="role_row[]" style="display: none">
                              <input class="form-control" type="text" id="role_description_2" value="Project Member/s" name="role_name[]" readonly>
                            </div>
                            <div class="md-1" style="padding-right: 30px;">
                              <button type="button" name="addRole" onclick="removeRole(2)" class="btn btn-danger shadow btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                              </button>
                            </div>
                          </div>
                          <thead>
                            <tr>
                              <th class="col-md-5" style="text-align: left;">Name</th>
                              <th class="col-md-6" style="text-align: left;">Designation</th>
                              <th class="col-md-2" style="padding-left: 0px;">
                                <button type="button" name="addRole" class="btn btn-primary shadow btn-circle btn-sm" data-toggle="modal" data-target="#modal1" onclick="setSelectRole(2)">                                  <i class="fas fa-user-plus"></i>
                                </button>
                                <button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-circle btn-sm" onclick="addCustomMember(2)">
                                  <i class="fas fa-plus" style="color: #1dbf1d"></i>
                                </button>
                              </th>
                            </tr>
                          </thead>
                          <tbody id="member2"></tbody>
                        </table>
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="col-md-11" style="text-align: left;">Responsibility</th>
                              <th class="col-md-1" style="padding-left: 0px;">
                                <button type="button" name="addRole" class="btn btn-primary shadow btn-circle btn-sm" data-toggle="modal" onclick="openModal(2)" data-target="#responsibility_modal_2">
                                  <i class="fas fa-plus"></i>
                                </button>
                                <div class="modal fade" id="responsibility_modal_2" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" style="font-size:23px">Add Project Member/s Responsibility</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                      </div>
                                      <div class="modal-body" style="padding: 0.875rem">
                                        <div class="card-body">
                                          <div class="table-responsive">
                                            <table class="table header-border table-responsive-sm">
                                              <thead>
                                                <tr>
                                                  <th class="col-md-4" style="text-align: left;">Role</th>
                                                  <th class="col-md-7" style="text-align: left;">Resposibility</th>
                                                  <th class="col-md-2" style="text-align: right;">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody id="responsibility_list_2">
                                                <!-- List Responsibility of Leader -->
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-circle btn-sm" onclick="addCustomResponsibility(2)">
                                  <i class="fas fa-plus" style="color: #1dbf1d"></i>
                                </button>
                              </th>
                            </tr>
                          </thead>
                          <tbody id="added_responsibility_list_2">
                            <!-- Added Responsibility of Leader -->
                          </tbody>
                        </table>
                    </div>
                    <hr>

                    <div id="table_roles"></div>
                    <div id="role_modal"></div>
                    <div id="responsibility_modal"></div>
                    <div class="text-right mt-4">
                      <button type="button" class="btn btn-secondary" id="prevStep2">Previous</button>
                      <button type="button" class="btn btn-primary" id="nextStep2">Next</button>
                    </div>
                  </div>
                </div>
                  <div id="step3" style="display: none;">
                    <div class="form-group">
                      <label for="rationale">Participants</label>
                        <textarea class="form-control" id="editor1" name="rationale" rows="3"></textarea>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="startDate">Start Date</label>
                          <input type="date" id="date" name="start_date" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="endDate">End Date</label>
                          <input type="date" id="date" name="end_date" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="text-right mt-4">
                      <button type="button" class="btn btn-secondary" id="prevStep3">Previous</button>
                      <button type="button" class="btn btn-primary" id="nextStep3">Next</button>
                    </div>
                  </div>
                  <div id="step4" style="display: none;">
                  <div class="form-group">
                      <label for="objectives">Objectives</label>
                        <textarea class="form-control" id="editor2" name="objectives" rows="1"></textarea>
                    </div>
                    <div class="text-right mt-4">
                      <button type="button" class="btn btn-secondary" id="prevStep4">Previous</button>
                      <button type="button" class="btn btn-primary" id="nextStep4">Next</button>
                    </div>
                  </div>
                  <div id="step5" style="display: none;">
                    <div class="form-group">
                      <label for="overview">Overview of the Activity</label>
                      <textarea class="form-control" id="editor3" name="overview" rows="6"></textarea>
                    </div>
                    <div class="text-right mt-4">
                      <button type="button" class="btn btn-secondary" id="prevStep5">Previous</button>
                      <button type="button" class="btn btn-primary" id="nextStep5">Next</button>
                    </div>
                  </div>
                  <div id="step6" style="display: none;">
                   <div class="form-group">
                  
                    <div class="text-right mt-4">
                      <button type="button" class="btn btn-secondary" id="prevStep6">Previous</button>
                      <input type="submit" name="submit" class="submit btn btn-primary" value="Download PDF">
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
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

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
<?php
    include 'footer.php';
?>
<script src="footer.js"></script>
<script src="generate_report.js"></script>
<script>
  setProgram();

  function setProgram() {
    var campus = document.getElementById("campus").value;
    var college = document.getElementById("department").value;
    console.log(campus);
    console.log(college);

    var getProgram = new XMLHttpRequest();
    getProgram.open("GET", "getprogram.php?campus=" + campus + "&college=" + college);
    getProgram.send();
    getProgram.onload = function() {
      var college = document.getElementById("program");
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