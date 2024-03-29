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
    <title>UniLink - Head</title>
    <link rel="shortcut icon" type="image/png" href="../imgs/BSU.png" alt="Logo" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="..\ckeditor\ckeditor.js"></script>
    <style>
    .custom-text-black {
    color: black;
    font-size: 12;
    }
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-bullseye"></i>
                    <span>Linkages</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="linkages.php">Proposal</a>
                        <a class="collapse-item" href="list_partner.php">List</a>
                    </div>
                </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="activities.php">
            <i class="bi bi-activity"></i>
            <span>Activities</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="announcement_table.php">
            <i class="bi bi-megaphone"></i>
            <span>Announcements</span>
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
                    <span class="mr-2 d-none d-lg-inline custom-text-black">Head | <?=$row['first_name']." ".$row['last_name']?></span>
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
          <form method="post" action="add.linkages.php" id="updateForm">
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="linkages.php">Linkages Proposal</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Proposal Form</li>
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
              <label for="partnerTitle">Partnership and/or Linkage Title</label>
              <input type="text" class="form-control outline" id="partnerTitle" name="partnerTitle" required>
            </div>
            <div class="form-group">
              <label>Partnership and/or Linkage Category</label>
              <div class="form-check form-inline">
              <label class="radio-inline mr-4" for="local-radio">
              <input type="radio" name="partnerType" id="local-radio" value="Local" onchange="localRadio()" required>Local </label>
            <label class="radio-inline" for="international-radio">
              <input type="radio" name="partnerType" id="international-radio" value="International" onchange="internationalRadio()" required>International </label>
              </div>
            </div>
            <div class="form-group">
            <label for="overview">Overview/Objectives of the Partnership and/or Linkage</label>
            <div>
              <textarea class="form-control" id="editor" name="overview" rows="8" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="fit">Strategic Fit</label>
            <div>
              <textarea class="form-control" id="editor1" name="fit" rows="6" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="outcome">Intended Outcome</label>
            <div>
              <textarea class="form-control" id="editor2" name="intendedOutcome" rows="3" required></textarea>
            </div>
          </div>
          <div class="text-right mt-4">
          <button type="button" class="btn btn-primary" id="nextStep1">Next</button>
        </div>
            </div>
            <div id="step2" style="display: none;">
              <div class="form-group">
            <label for="scope">Scope of the Partnership and/or Linkage</label>
            <div>
              <textarea class="form-control" id="editor3" name="scope" rows="8" required></textarea>
            </div>
          </div>
          <div class="justify-content-between">
          <div class="input-group contacts-search mb-2" style="display: flex; justify-content: space-between;">
            <label>Officials/Department/Personnel/Stakeholders Involved</label>
           <!--  <button style="margin-right: 30px;" type="button" onclick="addRoles()" class="btn btn-primary shadow btn-circle btn-sm">
              <i class="fas fa-plus"></i>
            </button> -->
          </div>
          <div id="involve">
                        <table class="table header-border table-responsive-sm">
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                          </div>
                          <thead>
                            <tr>
                              <th class="col-md-5" style="text-align: left; font-size: 15px;">Personnel/Stakeholders</th>
                              <th class="col-md-6" style="text-align: left; font-size: 15px;">Officials/Department</th>
                              <th class="col-md-2" style="padding-left: 0px; font-size: 15px;">
                                <button id="add-button-1" style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary btn-circle btn-sm">
                                  <i class="fas fa-plus" style="color: #1dbf1d"></i>
                                </button>
                              </th>
                            </tr>
                          </thead>
                          <tbody id="area-1">
                            <!-- INPUT FIELDS -->
                          </tbody>
                        </table>
                      </div>
        </div>
        <!-- dalawa, names tapos campus -->
        <div class="form-group">
            <label for="acd">Arrangement and Correlative Duties</label>
            <div>
              <textarea class="form-control" id="editor4" name="acd" rows="3" required></textarea>
            </div>
          </div>
          <div class="text-right mt-4">
          <button type="button" class="btn btn-secondary" id="prevStep2">Previous</button>
          <button type="button" class="btn btn-primary" id="nextStep2">Next</button>
        </div>
            </div>
            <div id="step3" style="display: none;">
              <div class="input-group contacts-search mb-2" style="display: flex; justify-content: space-between;">
            <label>Resources Needed</label>
            <button style="margin-right: 30px;" type="button" id="add-button-2" class="btn btn-primary shadow btn-circle btn-sm">
              <i class="fas fa-plus"></i>
            </button>
          </div>
          <div id="involve">
            <table class="table header-border table-responsive-sm">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                <th class="col-md-11">
                  <input class="form-control" id="role_description_1" type="text" value="Activities" name="role_name[]" readonly>
                </th>
              
              </div>
              <tbody id="area-2">
                <!-- INPUT FIELDS -->
              </tbody>
            </table>
          </div>
          <div class="input-group contacts-search mb-2" style="display: flex; justify-content: space-between;">
            <label>Implementation Plan</label>
            <div>
              <button style="margin-right: 5px;" type="button" class="btn btn-danger shadow btn-circle btn-sm" onclick="removeItem3()">
                <i class="fas fa-minus"></i>
              </button>
              <button style="margin-right: 30px;" type="button" id="add-button-3" class="btn btn-primary shadow btn-circle btn-sm">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div id="area-3">
            <div id="item-3-1">
              <input id="year-total-1" type="hidden" name="year-total[]" value="0">
              <input id="activity-total-1" type="hidden" name="activity-total[]" value="0">
              <table class="table header-border table-responsive-sm">
                <thead>
                  <tr>
                    <th class="col-md-11" style="text-align: left; font-size: 15px;">Year</th>
                    <th class="col-md-1" style="padding-left: 0px;">
                      <button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary btn-circle btn-sm" onclick="addYear(1)">
                        <i class="fas fa-plus" style="color: #1dbf1d"></i>
                      </button>
                    </th>
                  </tr>
                </thead>
                <tbody id="year-1">
                  
                </tbody>
              </table>
             
              <table class="table">
                <thead>
                  <tr>
                    <th class="col-md-11" style="text-align: left; font-size: 15px;">Activities</th>
                    <th class="col-md-1" style="padding-left: 0px;">
                      <button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary btn-circle btn-sm" onclick="addActivity(1)">
                        <i class="fas fa-plus" style="color: #1dbf1d"></i>
                      </button>
                    </th>
                  </tr>
                </thead>
                <tbody id="activity-1">

                </tbody>
              </table>
            </div>
          </div>
          <div class="text-right mt-4">
          <button type="button" class="btn btn-secondary" id="prevStep3">Previous</button>
          <button type="button" class="btn btn-primary" id="nextStep3">Next</button>
        </div>
            </div>
            <div id="step4" style="display: none;">
              <div class="form-group">
            <label for="risk">Risk Management</label>
            <div>
              <textarea class="form-control" id="editor5" name="risk" rows="3" required></textarea>
            </div>
          </div>
         <div class="form-group">
            <label for="mom">Monitoring and Evaluation Mechanics/Plan</label>
            <div>
              <textarea class="form-control" id="editor6" name="mom" rows="4" required></textarea>
            </div>
          </div>
          <div class="text-right mt-4">
          <button type="button" class="btn btn-secondary" id="prevStep4">Previous</button>
          <button type="button" class="btn btn-primary" id="nextStep4">Next</button>
        </div>
            </div>
            <div id="step5" style="display: none;">
              <div class="input-group contacts-search mb-2" style="display: flex; justify-content: space-between;">
            <label>Communication Plan</label>
            <!-- <button style="margin-right: 30px;" type="button" onclick="addRoles()" class="btn btn-primary shadow btn-circle btn-sm">
              <i class="fas fa-plus"></i>
            </button> -->
          </div>
          <div id="role1">
                        <table class="table header-border table-responsive-sm">
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="md-1" style="padding-right: 30px;">
                            </div>
                          </div>
                          <thead>
                            <tr>
                              <th class="col-md-11" style="text-align: left; font-size: 15px;">Program / Activity / Projects</th>
                              <th class="col-md-1" style="padding-left: 0px;">
                                <button id="program-activity-projects" style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary btn-circle btn-sm">
                                  <i class="fas fa-plus" style="color: #1dbf1d"></i>
                                </button>
                              </th>
                            </tr>
                          </thead>
                          <tbody id="program-activity-projects-body">
                            
                          </tbody>
                        </table>
                       
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="col-md-11" style="text-align: left; font-size: 15px;">Strategy/Medium</th>
                              <th class="col-md-1" style="padding-left: 0px;">
                                <button id="strategy-medium" style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary btn-circle btn-sm">
                                  <i class="fas fa-plus" style="color: #1dbf1d"></i>
                                </button>
                              </th>
                            </tr>
                          </thead>
                          <tbody id="strategy-medium-body">
                            <!-- Added Responsibility of Leader -->
                          </tbody>
                        </table>
                        <table class="table header-border table-responsive-sm">
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="md-1" style="padding-right: 30px;">
                            </div>
                          </div>
                          <thead>
                            <tr>
                              <th class="col-md-11" style="text-align: left; font-size: 15px;">Target Audience</th>
                              <th class="col-md-1" style="padding-left: 0px;">
                                <button id="target-audience" style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary btn-circle btn-sm">
                                  <i class="fas fa-plus" style="color: #1dbf1d"></i>
                                </button>
                              </th>
                            </tr>
                          </thead>
                          <tbody id="target-audience-body">
                            
                          </tbody>
                        </table>
                        <table class="table header-border table-responsive-sm">
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="md-1" style="padding-right: 30px;">
                            </div>
                          </div>
                          <thead>
                            <tr>
                              <th class="col-md-11" style="text-align: left; font-size: 15px;">Timing/Frequency</th>
                              <th class="col-md-1" style="padding-left: 0px;">
                                <button id="timing-frequency" style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary btn-circle btn-sm">
                                  <i class="fas fa-plus" style="color: #1dbf1d"></i>
                                </button>
                              </th>
                            </tr>
                          </thead>
                          <tbody id="timing-frequency-body">
                            
                          </tbody>
                        </table>
                        <table class="table header-border table-responsive-sm">
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="md-1" style="padding-right: 30px;">
                            </div>
                          </div>
                          <thead>
                            <tr>
                              <th class="col-md-11" style="text-align: left; font-size: 15px;">Outcomes</th>
                              <th class="col-md-1" style="padding-left: 0px;">
                                <button id="outcomes" style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary btn-circle btn-sm">
                                  <i class="fas fa-plus" style="color: #1dbf1d"></i>
                                </button>
                              </th>
                            </tr>
                          </thead>
                          <tbody id="outcomes-body">
                            
                          </tbody>
                        </table>
                      </div>
          <!-- Program / Activity / Projects -->
          <!-- Strategy/Medium -->
          <!-- Target Audience -->
          <!-- Timing/Frequency -->
          <!-- Outcomes -->
          <div class="text-right mt-4">
          <button type="button" class="btn btn-secondary" id="prevStep5">Previous</button>
          <input type="submit" name="btnsubmit" onclick="showAlert()" class="submit btn btn-primary" value="Submit">
          </form>
        </div>
            </div>
        <!-- done here -->
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
    <script src="js/linkages_form.js"></script>
    <script>
  CKEDITOR.replace( 'editor' );
  CKEDITOR.replace( 'editor1' );
  CKEDITOR.replace( 'editor2' );
  CKEDITOR.replace( 'editor3' );
  CKEDITOR.replace( 'editor4' );
  CKEDITOR.replace( 'editor5' );
  CKEDITOR.replace( 'editor6' );
  </script>
  </body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const progress = document.querySelector(".progress-bar");
        const nextStep1Button = document.getElementById("nextStep1");
        const prevStep2Button = document.getElementById("prevStep2");
        const nextStep2Button = document.getElementById("nextStep2");
        const prevStep3Button = document.getElementById("prevStep3");
        const nextStep3Button = document.getElementById("nextStep3");
        const prevStep4Button = document.getElementById("prevStep4");
        const nextStep4Button = document.getElementById("nextStep4");
        const prevStep5Button = document.getElementById("prevStep5");
        const submitButton = document.querySelector("input[type='submit']");

        let currentStep = 1;
        const totalSteps = 5;

        // Function to update the progress bar
        function updateProgressBar() {
            const progressPercentage = (currentStep - 1) / (totalSteps - 1) * 100;
            progress.style.width = `${progressPercentage}%`;
        }

        // Function to validate required fields
        function validateStep(stepId) {
            const step = document.getElementById(stepId);
            const inputs = step.querySelectorAll("input[required], select[required], textarea[required]");

            for (const input of inputs) {
                if (!input.value.trim()) {
                    return false;
                }
            }

            return true;
        }

        // Next button click event handlers
        nextStep1Button.addEventListener("click", function() {
            if (validateStep("step1")) {
                currentStep = 2;
                updateProgressBar();
                document.getElementById("step1").style.display = "none";
                document.getElementById("step2").style.display = "block";
            } else {
                alert("Please fill in all required fields.");
            }
        });
        nextStep2Button.addEventListener("click", function() {
            if (validateStep("step2")) {
                currentStep = 3;
                updateProgressBar();
                document.getElementById("step2").style.display = "none";
                document.getElementById("step3").style.display = "block";
            } else {
                alert("Please fill in all required fields.");
            }
        });
        nextStep3Button.addEventListener("click", function() {
            if (validateStep("step3")) {
                currentStep = 4;
                updateProgressBar();
                step3.style.display = "none";
                step4.style.display = "block";
            } else {
                alert("Please fill in all required fields.");
            }
        });
        nextStep3Button.addEventListener("click", function() {
            if (validateStep("step3")) {
                currentStep = 4;
                updateProgressBar();
                step3.style.display = "none";
                step4.style.display = "block";
            } else {
                alert("Please fill in all required fields.");
            }
        });
        nextStep4Button.addEventListener("click", function() {
            if (validateStep("step4")) {
                currentStep = 5;
                updateProgressBar();
                step4.style.display = "none";
                step5.style.display = "block";
            } else {
                alert("Please fill in all required fields.");
            }
        });


        // Previous button click event handlers
        prevStep2Button.addEventListener("click", function() {
            currentStep = 1;
            updateProgressBar();
            document.getElementById("step2").style.display = "none";
            document.getElementById("step1").style.display = "block";
        });

        prevStep3Button.addEventListener("click", function() {
            currentStep = 2;
            updateProgressBar();
            document.getElementById("step3").style.display = "none";
            document.getElementById("step2").style.display = "block";
        });

        prevStep4Button.addEventListener("click", function() {
            currentStep = 3;
            updateProgressBar();
            document.getElementById("step4").style.display = "none";
            document.getElementById("step3").style.display = "block";
        });

        prevStep5Button.addEventListener("click", function() {
            currentStep = 4;
            updateProgressBar();
            document.getElementById("step5").style.display = "none";
            document.getElementById("step4").style.display = "block";
        });

        // Prevent form submission on Enter key
        document.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
            }
        });

        // Submit button click event handler
        submitButton.addEventListener("click", function(event) {
            if (!validateStep("step5")) {
                event.preventDefault();
                alert("Please fill in all required fields.");
            }
            // Handle form submission logic here for step 4.
        });
    });
    </script>
</html>