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
            console.log("test");
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

        // addRoleButton.addEventListener("click", function() {
        //     const roleForm = createRoleForm(roleFormIndex);
        //     roleFormsContainer.appendChild(roleForm);
        //     roleFormIndex++;
        // });

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
            // rowsLabel.addEventListener("click", function() {
            //     searchRoleInput.classList.toggle("d-none");
            // });

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

        // prevStep1Button.addEventListener("click", function() {
        //     currentStep = 1;
        //     updateProgressBar();
        //     document.getElementById("step2").style.display = "none";
        //     document.getElementById("step1").style.display = "block";
        // });

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
    // }

    </script>

    <script>
        // Add an event listener to the radio buttons
        const radioOption1 = document.getElementById("local-radio");
        const radioOption2 = document.getElementById("international-radio");
        const dropdown = document.getElementById("partnerDropdown");

        radioOption1.addEventListener("change", function () {
            if (this.checked) {
                // When Option 1 is selected, make an AJAX request to fetch data from localactive
                fetchDataFromDatabase("Local");
                console.log("Local");
            }
        });

        radioOption2.addEventListener("change", function () {
            if (this.checked) {
                // When Option 2 is selected, make an AJAX request to fetch data from localactive
                fetchDataFromDatabase("International");
                console.log("International");
            }
        });

        function fetchDataFromDatabase(option) {
            // Make an AJAX request to fetch data from localactive
            const xhr = new XMLHttpRequest();
            xhr.open("GET", `fetch_localactive.php?option=`+option, true);
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
</script>
<script>
    $(document).ready(function() {
        $('#myTable_wrapper').DataTable();
    });
</script>


<script>
function formatDate($dateString) {
    $date = date_create($dateString);
    return date_format($date, "d F Y"); // "d F Y" format displays day, full month name, and year
}
</script>

<script>
    var i = 2;
    var total = 0;
    $('#addRow').click(function(){
        var newrow = $('#table').append('<tr><td><input type="text" class="form-control outline" id="item" name="item_name[]" placeholder="Item Name"></td><td><input class="quantity form-control" id="quantity'+i+'" type="number" name="quantity[]" onkeyup="quantityfunc('+i+')" placeholder="Quantity"></td><td><input class="price form-control" id="cost'+i+'" type="number" onkeyup="pricefunc('+i+')" name="cost[]" placeholder="Cost"></td><td style="text-align:center"><span class="subtotal'+i+'" id="subtotal'+i+'">0.00</span></td><td style="text-align:right"><button onclick="delRow('+i+')" class="btn btn-danger btn-circle btn-sm" id="delRow'+i+'" type="button"><span class="material-symbols-outlined">delete</span></button></td></tr></table></div><td>');
        i++;
    });

    function delRow(q){
        $('#delRow'+q).closest('tr').remove();
        var k = 0;
        total = 0;
        while (k < i) {
            if(document.getElementById("subtotal"+k)==null){
                k++;
                continue;
            }
            total += parseInt(document.getElementById("subtotal"+k).innerHTML);
            k++;
        }
        document.getElementById("total").innerHTML = total;
    }
    
    function formatMoney(amount) {
    // Format the amount with a peso sign (₱) and comma for thousands
    return "₱" + amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function quantityfunc(q) {
    console.log(q);
    var quantityValue = parseFloat(document.getElementById("quantity" + q).value);
    var unitValue = parseFloat(document.getElementById("cost" + q).value);
    if (isNaN(quantityValue) || isNaN(unitValue)) {
        return;
    }
    var subtotal = quantityValue * unitValue;
    document.getElementById("subtotal" + q).innerHTML = formatMoney(subtotal);
    var k = 0;
    var total = 0;
    while (k < i) {
        if (document.getElementById("subtotal" + k) == null) {
            k++;
            continue;
        }
        total += parseFloat(document.getElementById("subtotal" + k).innerHTML.replace(/[^\d.]/g, ''));
        k++;
    }
    document.getElementById("total").innerHTML = formatMoney(total);
}

function pricefunc(q) {
    var quantityValue = parseFloat(document.getElementById("quantity" + q).value);
    var unitValue = parseFloat(document.getElementById("cost" + q).value);
    if (isNaN(quantityValue) || isNaN(unitValue)) {
        return;
    }
    var subtotal = quantityValue * unitValue;
    document.getElementById("subtotal" + q).innerHTML = formatMoney(subtotal);
    var k = 0;
    var total = 0;
    while (k < i) {
        if (document.getElementById("subtotal" + k) == null) {
            k++;
            continue;
        }
        total += parseFloat(document.getElementById("subtotal" + k).innerHTML.replace(/[^\d.]/g, ''));
        k++;
    }
    document.getElementById("total").innerHTML = formatMoney(total);
}

</script>

<script>


var role = 3;
var memRow = 1;
var responbilityRow = 1;
var selectedRole;

if(document.getElementById('total_role')) {
    role = document.getElementById('total_role').value;
}
if(document.getElementById('memRow')) {
    memRow = document.getElementById('memRow').value;
}
if(document.getElementById('responbilityRow')) {
    responbilityRow = document.getElementById('responbilityRow').value;
}

function addRoles() {
    var newrow = $("#table_roles").append('<div id="role'+role+'"><table class="table header-border table-responsive-sm"><div class="d-flex justify-content-between align-items-center flex-wrap"><div class="col-md-11"><input type="text" value="'+role+'" name="role_row[]" style="display: none"><input class="form-control" type="text" id="role_description_'+role+'" name="role_name[]"></div><div class="md-1" style="padding-right: 30px;"><button type="button" name="addRole" onclick="removeRole('+role+')" class="btn btn-danger shadow btn-circle btn-sm"><i class="fas fa-trash"></i></button></div></div><thead><tr><th class="col-md-5" style="text-align: left;">Name</th><th class="col-md-6" style="text-align: left;">Designation</th><th class="col-md-2" style="padding-left: 0px;"><button type="button" name="addRole" class="btn btn-primary shadow btn-circle btn-sm" data-toggle="modal" data-target="#modal1" onclick="setSelectRole('+role+')"><i class="fas fa-user-plus"></i></button><button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-circle btn-sm" onclick="addCustomMember('+role+')"><i class="fas fa-plus" style="color: #1dbf1d"></i></button></th></tr></thead><tbody id="member'+role+'"></tbody></table><table class="table"><thead><tr><th class="col-md-11" style="text-align: left;">Responsibility</th><th class="col-md-1" style="padding-left: 0px;"><button type="button" name="addRole" class="btn btn-primary shadow btn-circle btn-sm" data-toggle="modal" onclick="openModal('+role+')" data-target="#responsibility_modal_'+role+'"><i class="fas fa-plus"></i></button><div class="modal fade" id="responsibility_modal_'+role+'" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="font-size:23px">Add Project Member/s Responsibility</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body" style="padding: 0.875rem"><div class="card-body"><div class="table-responsive"><table class="table header-border table-responsive-sm"><thead><tr><th class="col-md-4" style="text-align: left;">Role</th><th class="col-md-7" style="text-align: left;">Resposibility</th><th class="col-md-2" style="text-align: right;">Action</th></tr></thead><tbody id="responsibility_list_'+role+'"></tbody></table></div></div></div></div></div></div><button style="margin-left:1px;background: white;" type="button" name="addRole" class="btn btn-primary shadow btn-circle btn-sm" onclick="addCustomResponsibility('+role+')"><i class="fas fa-plus" style="color: #1dbf1d"></i></button></th></tr></thead><tbody id="added_responsibility_list_'+role+'"></tbody></table></div><hr>');

    var newResponsibilityModal = $("#responsibility_modal").append(
        '<div class="modal fade responsibility_modal_' +
            role +
            '" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" style="font-size:23px">Add Responsibility</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body" style="padding: 0.875rem"><div class="card-body"><div class="table-responsive"><table class="table header-border table-responsive-sm"><thead><tr><th class="col-md-4" style="text-align: left;">Role</th><th class="col-md-7" style="text-align: left;">Resposibility</th><th class="col-md-1" style="text-align: right;">Action</th></tr></thead><tbody id="responsibility_list_' +
            role +
            '"><!-- List Responsibility of Leader --></tbody></table></div></div></div></div></div></div>'
    );

    var totalRoles = document.getElementById("total_roles").value;
    document.getElementById("total_roles").value = Number(totalRoles) + 1;
    role++;
}

loadRoles();

function setSelectRole(q) {
    selectedRole = q;
    console.log(q);
}

function loadRoles() {
    var xhttp1 = new XMLHttpRequest();
    xhttp1.onreadystatechange = function () {
        document.getElementById("tbody_roles" + 1).innerHTML = this.responseText;
    };

    xhttp1.open("GET", "roles.php?q=" + 1);
    xhttp1.send();
}

function addMember(q) {
    var name = document.getElementById("name-" + q).innerHTML;
    var desig = document.getElementById("designation-" + q).innerHTML;
    var newrow = $("#member" + selectedRole).append(
        '<tr id="memRow' + memRow +'"><td style="display: none;"><input name="roles_position[]"" value="'+selectedRole+'" /></td><td style="display: none;"><input name="representative_roles_id[]" value="'+q+'"></td><td><input class="form-control" readonly name="roles_name[]" id="name-' +q +"-" +selectedRole + '" value="' + name + '" ></td><td><input class="form-control" name="roles_description[]" readonly value="' +desig +'"></td><td><button type="button" name="addRole" onclick="removeMember(\'' + memRow +"','" + q + "','" +selectedRole +'\')" class="btn btn-danger shadow btn-circle btn-sm"><i class="fas fa-minus"></i></button></td></tr>'
    );
    $("#row-" + q).hide();
    memRow++;
}

function addCustomMember(q) {
    var newrow = $("#member" + q).append(
        '<tr id="memRow' + memRow +'"><td style="display: none;"><input name="roles_position[]"" value="'+q+'" /></td><td style="display: none;"><input name="representative_roles_id[]" value="null"></td><td><input class="form-control" name="roles_name[]" id="name-0-' + q +'" name="representative_' +memRow +'"></td><td><input class="form-control" name="roles_description[]"></td><td><button type="button" name="addRole" onclick="removeCustomMember(`' + memRow + "`, `" + q + '`)" class="btn btn-danger shadow btn-circle btn-sm"><i class="fas fa-minus"></i></button></td></tr>'
    );
    memRow++;
}

function removeCustomMember(q, w) {
    $("#memRow" + q).remove();
}

function removeMember(q, t, u) {
    $("#row-" + t).show();
    $("#memRow" + q).remove();
}

function removeRole(q) {
    for (var i = 1; i <= total; i++) {
        var val1 = document.getElementById("name-" + i + "-" + q);
        if (val1) {
            $("#row-" + i).show();
        }
    }
    $("#role" + q).remove();
    var totalRoles = document.getElementById("total_roles").value;
    document.getElementById("total_roles").value = Number(totalRoles) - 1;
}

function openModal(q) {
    var forRole = "";
    forRole = document.getElementById("role_description_" + q).value;
    console.log(forRole);
    var responsiblityList = new XMLHttpRequest();
    responsiblityList.onreadystatechange = function () {
        document.getElementById("responsibility_list_" + q).innerHTML = this.responseText;
        for (var i = 1; i <= 17; i++) {
            if (!document.getElementById("responsibility_description_" + i + "_" + q)) {
                continue;
            }
            if (document.getElementById("responsibility_description_" + i + "_" + q).value == document.getElementById("list_responsibility_description_" + i + "_" + q).innerHTML) {
                $("#list_responsibility_row_" + i + "_" + q).hide();
            }
        }
    };
    responsiblityList.open("GET", "responsibility.php?q=" + q + "&forRole=" + forRole);
    responsiblityList.send();
}

function addResponsibility(q, u) {
    var responsibility_description = document.getElementById("list_responsibility_description_" + q + "_" + u).innerHTML;
    var newrow = $("#added_responsibility_list_" + u).append(
        '<tr id="responsibility_row_' +responbilityRow + '"><td style="display: none;"><input name="responsibilities_position[]" value="'+u+'"/></td><td style="display: none;"><input name="responsibilities_id[]" value="'+q+'"></td><td><input class="form-control" name="responsibilities[]" readonly id="responsibility_description_' + q + "_" + u + '" value="' + responsibility_description +
            '"></td><td><button type="button" class="btn btn-danger shadow btn-circle btn-sm" onclick="removeResponsibility(\'' + responbilityRow + "', '" + q + "', '" + u + '\')"><i class="fas fa-minus"></i></button></td></tr>'
    );
    $("#list_responsibility_row_" + q + "_" + u).hide();
    responbilityRow++;
}

function addCustomResponsibility(q) {
    var newrow = $("#added_responsibility_list_" + q).append(
        '<tr id="responsibility_row_' + responbilityRow + '"><td style="display: none;"><input name="responsibilities_position[]" value="'+q+'"/></td><td style="display: none;"><input name="responsibilities_id[]" value="null"></td><td><input class="form-control" name="responsibilities[]" id="responsibility_description_0_' + q + '"></td><td><button type="button" class="btn btn-danger shadow btn-circle btn-sm" onclick="removeCustomResponsibility(' + responbilityRow + ')"><i class="fas fa-minus"></i></button></td></tr>'
    );
    responbilityRow++;
}

function removeCustomResponsibility(q) {
    $("#responsibility_row_" + q).remove();
}

function removeResponsibility(row, q, u) {
    $("#list_responsibility_row_" + q + "_" + u).show();
    $("#responsibility_row_" + row).remove();
}

const radioOption1 = document.getElementById("local-radio");
const radioOption2 = document.getElementById("international-radio");
const dropdown = document.getElementById("partner-dropdown");

function localRadio() {
  if(radioOption1.checked) {
    fetchDataFromDatabase(radioOption1.value);
  }
  
}

function internationalRadio() {
  if(radioOption2.checked) {
    fetchDataFromDatabase(radioOption2.value);
  }
  
}

function fetchDataFromDatabase(option) {
    // Make an AJAX request to fetch data from localactive
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `fetch_localactive.php?option=`+option, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Parse the JSON response from the server
            const data = JSON.parse(xhr.responseText);
            // Populate the dropdown with the retrieved data
            populateDropdown(data)
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
    option.value = item.partnerName; // Use 'id' as the value attribute
    option.textContent = item.partnerName; // Display 'partnerName' in the dropdown
    dropdown.appendChild(option);
  });
}

</script>
    <script>
        document.getElementById("uploadButton").addEventListener("click", function () {
            let fileInput = document.getElementById("fileInput");
            let fileList = document.getElementById("fileList");
            
            for (let i = 0; i < fileInput.files.length; i++) {
                let file = fileInput.files[i];
                let fileName = file.name;
                let fileSize = (file.size / 1024).toFixed(2) + " KB";

                let fileItem = document.createElement("div");
                fileItem.innerHTML = `<strong>${fileName}</strong> (${fileSize})`;
                fileList.appendChild(fileItem);
            }
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