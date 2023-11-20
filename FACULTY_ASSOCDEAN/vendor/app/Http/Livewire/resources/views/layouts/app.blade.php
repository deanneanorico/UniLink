<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Unilink</title>
    <link rel="shortcut icon" type="image/png" href="../Unilink/BSU.png" alt="Logo" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

<style>
    /* Custom styles for the progress bar */
.progress {
    height: 10px; /* Set the desired height */
    margin-bottom: 10px; /* Add some space below the progress bar */
}

.progress-bar {
    height: 100%; /* Make sure the progress bar fills the container height */
}
</style>
@livewireStyles
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <img src="..\Unilink\BSU.png" height="45" width="50"> 
                <div class="sidebar-brand-text mx-3">UNILINK</div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
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

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
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
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="ui-formsPreview.php">Activity Management</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Activity Form</li>
                          </ol>
                        </nav>
                        <div class="progress">
                            <div class="progress-bar progress-bar active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                        </div>
                        <!-- <h6 class="card-title font-weight-bold mb-2">Activity Form</h6> -->

                        <div class="card">
                            <div class="card-body">
                                <form id="form" action="forms.php" method="post" enctype="multipart/form-data">
                                    <div id="step1">
                                        <div class="form-group">
                                            <label for="activityName">Activity Title</label>
                                            <input type="text" class="form-control outline" id="activityName" name="activityName"/>
                                        </div>

                                        <div class="form-group college">
                                        <label for="department">Department</label>
                                        <select class="form-control" id="department" name="department">
                                            <option value="CE">College of Engineering</option>
                                            <option value="CIT">College of Industrial Technology</option>
                                            <option value="CICS">College of 
                                            Informatics and Computing Sciences</option>
                                            <option value="CAS">College of Arts and Sciences</option>
                                            <option value="CABEIHM">College of Accountancy, Business, Economics and International Hospitality Management</option>
                                            <option value="CTE">College of Teacher Education</option>
                                            <option value="CONAHS">College of Nursing and Allied Health Sciences</option>
                                            <option value="LS">Laboratory School</option>
                                        </select>
                                        </div>  

                                        <div class="form-group">
                                            <label for="program">Program</label>
                                            <select class="form-control" id="program" name="program">
                                            </select>
                                        </div>
                                        <div class="text-right mt-4">
                                        <button type="button" class="btn btn-primary" id="nextStep1">Next</button>
                                        </div>
                                    </div>

                                    <div id="step2" style="display: none;">
                                        <div class="form-group partner">
                                        <label for="partner">Partner</label>
                                        <select class="form-control" id="partner" name="partner">
                                            <option value="">Local</option>
                                            <option value="">International</option>
                                        </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="partnerName">Partner Name</label>
                                            <input type="text" class="form-control outline" id="partnerName" name="partnerName"/>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="startDate">Start Date</label>
                                                    <input type="date" id="date" name="date" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="endDate">End Date</label>
                                                    <input type="date" id="date" name="date" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right mt-4">
                                        <button type="button" class="btn btn-secondary" id="prevStep2">Previous</button>
                                        <button type="button" class="btn btn-primary" id="nextStep2">Next</button>
                                    </div>
                                </div>
                                        <!-- <input type="button" name="next" class="next btn btn-info" value="Next" /> -->
                                    <div id="step3" style="display: none;">
                                    <div class="form-group">
                                    <label for="partner">Project Leader and Project Member</label>
                                    <button type="button" class="btn btn-info" id="addRoleButton">
                                        <i class="fas fa-plus"></i> Add Roles
                                    </button>
                                </div>

                                <div id="roleFormsContainer">
                                    <!-- Role forms will be added here dynamically -->
                                </div>

                                <div class="form-group">
                                    <label for="rationale">Rationale of the Activity</label>
                                    <textarea class="form-control" id="rationale" name="rationale" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="objectives">Objectives (General and Specific)</label>
                                <textarea class="form-control" id="objectives" name="objectives" rows="6"></textarea>
                            </div>

                            <div class="text-right mt-4">
                                        <button type="button" class="btn btn-secondary" id="prevStep3">Previous</button>
                                        <button type="button" class="btn btn-primary" id="nextStep3">Next</button>
                            </div>
                        </div>
                            <div id="step4" style="display: none;">
                                        <div class="form-group budget">
                                        <label for="budget">Budget Source</label>
                                        <select class="form-control" id="budget" name="budget">
                                            <option value="">No budget needed</option>
                                            <option value="">Fund Partner Agency</option>
                                            <option value="">Fund of University</option>
                                        </select>
                                        </div>  
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="item">Item Name</label>
                                                    <input type="text" class="form-control outline" id="item" wire:model="itemName" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="quantity">Quantity</label>
                                                    <input type="text" class="form-control outline" id="quantity" wire:model="quantity" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="cost">Unit Cost</label>
                                                    <input type="text" class="form-control outline" id="cost" wire:model="unitCost" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="total">Total</label>
                                                    <input type="text" class="form-control outline" id="total" wire:model="total" readonly />
                                                </div>
                                            </div>
                                        </div>


                            <div class="text-right mt-4">
                                <button type="button" class="btn btn-secondary" id="prevStep4">Previous</button>
                                <input type="submit" name="submit" class="submit btn btn-primary" value="Submit" />
                            </div>
</div>
                        
                    </form>

                                <div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="addRoleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addRoleModalLabel">Add Role</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="searchRole" placeholder="Search roles">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button" id="rowsLabel">
                                                        Rows <i class="fas fa-chevron-down"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <form id="roleModalForm">
                                                <!-- List of roles will be displayed here -->
                                                <div id="roleList">
                                                    <!-- Roles will be added here dynamically -->
                                                </div>
                                            </form>
                                            <nav id="pagination" class="mt-3" style="display: none;">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item disabled" id="prevPage">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item" id="nextPage">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="saveRoleButton">Save Role</button>
                                        </div>
                                    </div>
                                </div>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        var programOptions = {
            "CE": [
                "Bachelor of Science in Computer Engineering"
            ],
            "CIT": [
                "Bachelor of Science in Industrial Technology"
            ],
            "CICS": [
                "Bachelor of Science in Computer Science",
                "Bachelor of Science in Information Technology"
            ],
            "CAS": [
                "Bachelor of Arts in Communication",
                "Bachelor of Science in Criminology",
                "Bachelor of Science in Psychology",
                "Bachelor of Science in Fisheries and Aquatic Sciences"
            ],
            "CABEIHM": [
                "Bachelor of Science in Accountancy",
                "Bachelor of Science in Management Accounting",
                "Bachelor of Science in Entrepreneurship",
                "Bachelor of Science in Business Administration major in Marketing Management",
                "Bachelor of Science in Business Administration major in Human Resource Management",
                "Bachelor of Science in Business Administration major in Financial Management",
                "Bachelor of Science in Business Administration major in Operations Management",
                "Bachelor of Science in Tourism Management",
                "Bachelor of Science in Hospitality Management"
            ],
            "CTE": [
                "Bachelor of Secondary Education major in English",
                "Bachelor of Secondary Education major in Mathematics",
                "Bachelor of Secondary Education major in Sciences",
                "Bachelor of Secondary Education major in Filipino",
                "Bachelor of Secondary Education major in Social Studies",
                "Bachelor of Elementary Education",
                "Bachelor of Physical Education",
                "Bachelor of Early Childhood Education"
            ],
            "CONAHS": [
                "Bachelor of Science in Nursing",
                "Bachelor of Science in Nutrition and Dietetics"
            ],
            "LS": [
                "Laboratory School",
            ]
        };

        $('#department').on('change', function() {
            var selectedCollege = $(this).val();
            var programSelect = $('#program');
            programSelect.empty();

            if (selectedCollege in programOptions) {
                programOptions[selectedCollege].forEach(function(option) {
                    programSelect.append($('<option>').text(option).attr('value', option));
                });
            }
        });
    });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const addRoleButton = document.getElementById("addRoleButton");
        const roleFormsContainer = document.getElementById("roleFormsContainer");
        const roleModalForm = document.getElementById("roleModalForm");
        const saveRoleButton = document.getElementById("saveRoleButton");

        let roleFormIndex = 0;

        addRoleButton.addEventListener("click", function() {
            const roleForm = createRoleForm(roleFormIndex);
            roleFormsContainer.appendChild(roleForm);
            roleFormIndex++;
        });

        roleFormsContainer.addEventListener("click", function(event) {
            if (event.target.classList.contains("deleteRoleButton")) {
                const roleForm = event.target.closest(".role-form");
                roleFormsContainer.removeChild(roleForm);
            } else if (event.target.classList.contains("addRolesButton")) {
                $('#addRoleModal').modal('show'); // Show the modal
            }
        });

        saveRoleButton.addEventListener("click", function() {
            const newRoleInput = roleModalForm.querySelector("#newRole");
            const newRoleName = newRoleInput.value;
            if (newRoleName.trim() !== "") {
                const roleForm = createRoleForm(roleFormIndex, newRoleName);
                roleFormsContainer.appendChild(roleForm);
                roleFormIndex++;
                newRoleInput.value = "";
                $('#addRoleModal').modal('hide'); // Hide the modal
            }
        });

        function createRoleForm(index, roleName = "") {
            const roleForm = document.createElement("div");
            roleForm.classList.add("role-form", "mb-3");

            roleForm.innerHTML = `
                <div class="input-group">
                    <input type="text" class="form-control" name="roleName[${index}]" value="${roleName}" placeholder="Enter role name...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-info addRolesButton" data-toggle="modal" data-target="#addRoleModal">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-danger deleteRoleButton">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            `;

            return roleForm;
        }
    });
    </script>

        <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Your existing code...

            const searchRoleInput = document.getElementById("searchRole");
            const rowsLabel = document.getElementById("rowsLabel");
            const roleList = document.getElementById("roleList");
            const pagination = document.getElementById("pagination");
            const prevPage = document.getElementById("prevPage");
            const nextPage = document.getElementById("nextPage");

            // Define the number of roles per page
            const rolesPerPage = 5;
            let currentPage = 1;

            // Function to update the displayed roles based on the current page
            function updateRoleList() {
                const startIndex = (currentPage - 1) * rolesPerPage;
                const endIndex = startIndex + rolesPerPage;
                const roles = Array.from(roleList.querySelectorAll(".role-item"));

                roles.forEach((role, index) => {
                    role.style.display = (index >= startIndex && index < endIndex) ? "block" : "none";
                });

                // Show/hide pagination controls
                pagination.style.display = (roles.length > rolesPerPage) ? "block" : "none";
                prevPage.classList.toggle("disabled", currentPage === 1);
                nextPage.classList.toggle("disabled", endIndex >= roles.length);
            }

            // Rows label click event handler to toggle search bar visibility
            rowsLabel.addEventListener("click", function() {
                searchRoleInput.classList.toggle("d-none");
            });

            // Search button click event handler
            searchButton.addEventListener("click", function() {
                const searchValue = searchRoleInput.value.toLowerCase();
                const roles = Array.from(roleList.querySelectorAll(".role-item"));

                roles.forEach(role => {
                    const roleName = role.querySelector(".role-name").textContent.toLowerCase();
                    role.style.display = roleName.includes(searchValue) ? "block" : "none";
                });

                // Reset to the first page after searching
                currentPage = 1;
                updateRoleList();
            });

            // Pagination button click event handlers
            prevPage.addEventListener("click", function() {
                if (currentPage > 1) {
                    currentPage--;
                    updateRoleList();
                }
            });

            nextPage.addEventListener("click", function() {
                const roles = Array.from(roleList.querySelectorAll(".role-item"));
                const lastPage = Math.ceil(roles.length / rolesPerPage);

                if (currentPage < lastPage) {
                    currentPage++;
                    updateRoleList();
                }
            });
        });
        </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const step1 = document.getElementById('step1');
        con st step2 = document.getElementById('step2');
        const step3 = document.getElementById('step3');
        const step4 = document.getElementById('step4');

        const nextStep1Button = document.getElementById('nextStep1');
        const nextStep2Button = document.getElementById('nextStep2');
        const nextStep3Button = document.getElementById('nextStep3');
        const prevStep2Button = document.getElementById('prevStep2');
        const prevStep3Button = document.getElementById('prevStep3');
        const prevStep4Button = document.getElementById('prevStep4');


        nextStep1Button.addEventListener('click', () => {
            step1.style.display = 'none';
            step2.style.display = 'block';
        });

        nextStep2Button.addEventListener('click', () => {
            step2.style.display = 'none';
            step3.style.display = 'block';
        });

        nextStep3Button.addEventListener('click', () => {
            step3.style.display = 'none';
            step4.style.display = 'block';
        });

        prevStep2Button.addEventListener('click', () => {
            step2.style.display = 'none';
            step1.style.display = 'block';
        });

        prevStep3Button.addEventListener('click', () => {
            step3.style.display = 'none';
            step2.style.display = 'block';
        });

        prevStep4Button.addEventListener('click', () => {
            step4.style.display = 'none';
            step3.style.display = 'block';
        });
    </script>

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
        const prevStep1Button = document.getElementById("prevStep1");
        const submitButton = document.querySelector("input[type='submit']");

        let currentStep = 1;
        const totalSteps = 4;

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

        prevStep1Button.addEventListener("click", function() {
            currentStep = 1;
            updateProgressBar();
            document.getElementById("step2").style.display = "none";
            document.getElementById("step1").style.display = "block";
        });

        // Prevent form submission on Enter key
        document.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
            }
        });

        // Submit button click event handler
        submitButton.addEventListener("click", function(event) {
            if (!validateStep("step3")) {
                event.preventDefault();
                alert("Please fill in all required fields.");
            }
            // Handle form submission logic here for step 4.
        });
    });
    </script>
    <?php
    public function updatedQuantity($value)
    {
        dd("Updated quantity: $value");
        $this->total = $value * $this->unitCost;
    }
    
    public function updatedUnitCost($value)
    {
        dd("Updated unit cost: $value");
        $this->total = $value * $this->quantity;
    }
    
    ?>
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

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
</body>

</html>
