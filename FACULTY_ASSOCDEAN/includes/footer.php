
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
        const prevStep6Button = document.getElementById("prevStep6");
        const nextStep6Button = document.getElementById("nextStep6");
        const prevStep1Button = document.getElementById("prevStep1");
        const submitButton = document.querySelector("input[type='submit']");

        let currentStep = 1;
        const totalSteps = 6;

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
        nextStep5Button.addEventListener("click", function() {
            if (validateStep("step5")) {
                currentStep = 6;
                updateProgressBar();
                step5.style.display = "none";
                step6.style.display = "block";
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
        prevStep6Button.addEventListener("click", function() {
            currentStep = 5;
            updateProgressBar();
            document.getElementById("step6").style.display = "none";
            document.getElementById("step5").style.display = "block";
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
            // Handle form submission logic here for step 4.
        });
    });
    </script>
    <script>
        var totals = document.querySelectorAll(".total");

        // Add input event listeners to quantity and price inputs
        // document.querySelectorAll(".quantity, .price").forEach(function (input) {
        //     input.addEventListener("input", function () {
        //         updateSubtotal(this);
        //         updateTotal();
        //     });
        // });

        // function updateSubtotal(input, q) {
        //     var row = input.parentElement.parentElement;
        //     var priceValue = parseFloat(row.querySelector(".price"+q).value);
        //     var quantityValue = parseFloat(row.querySelector(".quantity"+q).value);
        //     row.querySelector(".subtotal"+q).innerHTML = (quantityValue * priceValue).toFixed(2);
        // }

        // function updateTotal() {
        //     var total = 0;
        //     totals.forEach(function (subtotal) {
        //         total += parseFloat(subtotal.innerHTML);
        //     });
        //     document.getElementById("grand-total").innerHTML = total.toFixed(2);
        // }

        // // Initial calculation on page load
        // updateTotal();

        // function updateSubtotal(input) {
        // var row = input.parentElement.parentElement;
        // var priceValue = parseFloat(row.querySelector(".price").value);
        // var quantityValue = parseFloat(row.querySelector(".quantity").value);

        // // Check if the values are valid numbers before performing calculations
        // if (!isNaN(priceValue) && !isNaN(quantityValue)) {
        //     row.querySelector(".subtotal").innerHTML = (quantityValue * priceValue).toFixed(2);
        // } else {
        //     row.querySelector(".subtotal").innerHTML = "0.00"; // Set a default value or display an error message.
        // }
    }

    </script>

    <script>
        // Add an event listener to the radio buttons
        const radioOption1 = document.getElementById("radioOption1");
        const radioOption2 = document.getElementById("radioOption2");
        const dropdown = document.getElementById("dropdown");

        radioOption1.addEventListener("change", function () {
            if (this.checked) {
                // When Option 1 is selected, make an AJAX request to fetch data from localactive
                fetchDataFromDatabase("Local");
            }
        });

        radioOption2.addEventListener("change", function () {
            if (this.checked) {
                // When Option 2 is selected, make an AJAX request to fetch data from localactive
                fetchDataFromDatabase("International");
            }
        });

        function fetchDataFromDatabase(option) {
            // Make an AJAX request to fetch data from localactive
            const xhr = new XMLHttpRequest();
            xhr.open("GET", `fetch_localactive.php`, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Parse the JSON response from the server
                    const data = JSON.parse(xhr.responseText);
                    // Populate the dropdown with the retrieved data
                    populateDropdown(data);
                }
            };
            xhr.send();
        }

        function populateDropdown(data) {
            // Clear existing dropdown options
            dropdown.innerHTML = "";

            // Populate the dropdown with data
        data.forEach(function (item) {
            const option = document.createElement("option");
            option.value = item.id; // Use 'id' as the value attribute
            option.textContent = item.partnerName; // Display 'partnerName' in the dropdown
            dropdown.appendChild(option);
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