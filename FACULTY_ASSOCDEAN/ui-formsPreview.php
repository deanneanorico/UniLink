<?php
  session_start();
  include 'db.php';

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
<!DOCTYPE html>
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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- DATATABLES -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"> -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script>
        $(document).ready(function() {
            $('#activityTable').DataTable();
        });
    </script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <img src="..\imgs\BSU.png" height="45" width="50">
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
            <li class="nav-item active">
                <a class="nav-link" href="ui-formsPreview.php">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Activity Management</span></a>
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
                                <?php
                                    $id = $_SESSION['id'];

                                    $sql = "SELECT * FROM `users`";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                ?>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$row['first_name']." ".$row['last_name']?></span>
                                <img class="img-profile rounded-circle"
                                    src="imgs/undraw_profile.svg">
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
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="h3 mb-0 text-gray-800">Activity Management</h3>
                        <div class="d-flex">
                            <a class="btn btn-primary rounded-fill" href="ui-forms.php" role="button">
                                <i class="fas fa-plus"></i> Create Activity
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="table">
                             <table id="activityTable" class="display" data-ordering="true" data-paging="true" data-searching="true">
                                <thead style='text-align: center;'>
                                    <tr>
                                        <th >No.</th>
                                        <th style="width: 20%">Activity Title</th>
                                        <!-- <th>Partner</th> -->
                                        <th style="width: 22%;">Partner Name</th>
                                        <th style="width: 14%">Duration</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               <tbody>
                        <?php
                        // SQL query to retrieve data
                        $college = $_SESSION['college'];

                        $sql = "SELECT * FROM `activityform` WHERE `college` = '$college'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            $i = 1;
                            while ($row = $result->fetch_assoc()) {
                                // Calculate the status based on conditions
                                $status = '';
                                $start_date = strtotime($row['start_date']);
                                $end_date = strtotime($row['end_date']);
                                $today = strtotime(date('Y-m-d'));

                                if ($start_date > $today) {
                                    $status = 'For Implementation';
                                    $textColor = '#d7d0d0'; // Set text color for 'For Implementation'
                                } elseif ($start_date <= $today && $end_date > $today) {
                                    $status = 'Ongoing';
                                    $textColor = 'orange'; // Set text color for 'Ongoing'
                                } elseif ($end_date <= $today) {
                                    $status = 'Implemented';
                                    $textColor = '#228B22'; // Set text color for 'Implemented'
                                }
                                echo "<tr>";
                                echo "<td style='text-align: center;'>" . $i . "</td>";
                                echo "<td style='text-align: center;'>" . $row["activity_title"] . "</td>";
                                echo "<td style='text-align: center;'>" . $row["partner"] . "</td>";
                                echo "<td style='text-align: center;'>" . date("M. d, Y", $start_date) . " - " . date("M. d, Y", $end_date) . " </td>";
                                echo '<td style="text-align: center;"><div style="background-color: '.$textColor.'; color: #000000; padding: 5px; border-radius: 45px;">' . $status . '</div></td>';
                                if($status == "Implemented") {
                                    echo "
                                        <td style='text-align: center;'>
                                            <a href='ui-formsEdit.php?id=" . $row["id"] . "'>
                                                <span class='fas fa-edit text-secondary' title='Edit'></span>
                                            </a>
                                            <a href='pdf.php?id=". $row["id"]."' target='_blank' class='fas fa-file-download text-info' title='Request Form'></a>
                                            <a href='report.php?id=" . $row['id'] . "' target='_blank' class='fas fa-clipboard text-success' title='Narrative Report'></a>
                                        </td>
                                    ";
                                } else {
                                    echo "<td style='text-align: center;'>
                                        <a href='ui-formsEdit.php?id=" . $row["id"] . "'>
                                            <span class='fas fa-edit text-secondary'></span>
                                        </a>
                                        <a href='delete.php?id=" . $row["id"] . "'><span class='fas fa-trash text-danger'></span></a>
                                        <a href='pdf.php?id=". $row["id"]."' target='_blank' class='fas fa-file-download text-info'></a>
                                    </td>";
                                }
                                echo "</tr>";
                                $i++;
                            }
                        } else {
                            echo "No data found";
                        }

                        $conn->close();
                        ?>
                        </tbody>
                            </table>
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
                            <span>Developed by UniLink 2023</span>
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
<?php
    include 'footer.php';
?>
    </body>
</html>