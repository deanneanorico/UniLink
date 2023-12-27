    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="ckeditor/build/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
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
        const step2 = document.getElementById('step2');
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
        const prevStep5Button = document.getElementById("prevStep5");
        const nextStep5Button = document.getElementById("nextStep5");
        const prevStep1Button = document.getElementById("prevStep1");
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

        // Continue the pattern for the next steps...

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
                document.getElementById("step3").style.display = "none";
                document.getElementById("step4").style.display = "block";
            } else {
                alert("Please fill in all required fields.");
            }
        });

        nextStep4Button.addEventListener("click", function() {
            if (validateStep("step4")) {
                currentStep = 5;
                updateProgressBar();
                document.getElementById("step4").style.display = "none";
                document.getElementById("step5").style.display = "block";
            } else {
                alert("Please fill in all required fields.");
            }
        });

        nextStep5Button.addEventListener("click", function() {
            if (validateStep("step5")) {
                currentStep = 6;  // Adjust if there is a 6th step
                updateProgressBar();
                // Handle the logic for the transition to step 6
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
            if (!validateStep("step5")) {
                event.preventDefault();
                alert("Please fill in all required fields.");
            }
            // Handle form submission logic here for step 5.
        });
    });
</script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
    // Get references to the radio buttons and dropdown
    const localRadio = document.getElementById("localRadio");
    const internationalRadio = document.getElementById("internationalRadio");
    const partnerDropdown = document.getElementById("partnerDropdown");

    // Add event listeners to the radio buttons
    localRadio.addEventListener("change", function () {
        if (localRadio.checked) {
            // Call a function to fetch local partners and update the dropdown
            fetchPartners("local", partnerDropdown);
        }
    });
 
    internationalRadio.addEventListener("change", function () {
        if (internationalRadio.checked) {
            // Call a function to fetch international partners and update the dropdown
            fetchPartners("international", partnerDropdown);
        }
    });

    // Function to fetch partners based on the selected type (local or international)
    function fetchPartners(partnerType, dropdownElement) {
        // Simulate an AJAX request by using setTimeout
        setTimeout(function () {
            // Replace this with your actual AJAX request to fetch partners
            const partners = partnerType === "local" ? ["Local Partner 1", "Local Partner 2"] : ["International Partner 1", "International Partner 2"];

            // Clear existing dropdown options
            dropdownElement.innerHTML = "";

            // Populate the dropdown with partners
            partners.forEach(function (partner) {
                const option = document.createElement("option");
                option.value = partner;
                option.textContent = partner;
                dropdownElement.appendChild(option);
            });
        }, 1000); // Simulated delay in milliseconds
    }
});
</script>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error =>{
            console.error(error);
        });

        ClassicEditor
        .create(document.querySelector('#editor1'))
        .catch(error =>{
            console.error(error);
        });
        ClassicEditor
        .create(document.querySelector('#editor2'))
        .catch(error =>{
            console.error(error);
        });
        ClassicEditor
        .create(document.querySelector('#editor3'))
        .catch(error =>{
            console.error(error);
        });
        ClassicEditor
        .create(document.querySelector('#editor4'))
        .catch(error =>{
            console.error(error);
        });
    </script>
    <script>	
        $(document).ready(function(){
            $('#example').DataTable()
    });
    </script>

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
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>