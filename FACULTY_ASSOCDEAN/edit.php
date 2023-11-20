<?php 
   session_start();
   include('includes/db.php');
   ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    // Function to initialize the form with existing data
    function initializeFormWithOldData(data) {
        // Populate the form fields with data
        $('#activityName').val(data.activityName);
        $('#campus').val(data.campus);
        $('#department').val(data.department);
        $('#program').val(data.program);
        $('input[name="partnerType"]').val([data.partnerType]);
        $('#partner-dropdown').val(data.partner);
        $('#startDate').val(data.startDate);
        $('#endDate').val(data.endDate);
        // ... and so on for other form fields

        // Show the relevant form step
        $('#step1').show();
        $('#step2').show();
        $('#step3').show();
        // ... and so on for other form steps
    }

    // Sample data for testing (replace with your actual data retrieval logic)
    var sampleData = {
        activityName: "Sample Activity",
        campus: "ARASOF-Nasugbu",
        department: "CE",
        program: "Sample Program",
        partnerType: "Local",
        partner: "Sample Partner",
        startDate: "2023-09-30",
        endDate: "2023-10-05"
        // ... and so on for other form fields
    };

    // Initialize the form with sample data (replace with your actual data)
    initializeFormWithOldData(sampleData);

    // Handle the "Edit" button click
    $('#editButton').click(function () {
        // Retrieve the edited data (you can replace this with your data retrieval logic)
        var editedData = {
            activityName: $('#activityName').val(),
            campus: $('#campus').val(),
            department: $('#department').val(),
            program: $('#program').val(),
            partnerType: $('input[name="partnerType"]:checked').val(),
            partner: $('#partner-dropdown').val(),
            startDate: $('#startDate').val(),
            endDate: $('#endDate').val()
            // ... and so on for other form fields
        };

        // Update the sampleData object with the edited data
        $.extend(sampleData, editedData);

        // Optionally, you can send the updated data to your server for further processing
        // $.post('your_server_endpoint.php', sampleData, function(response) {
        //     // Handle the response from the server
        // });

        // Alert the user that the data has been updated (you can replace this with your preferred user notification)
        alert('Data has been updated successfully.');

        // Initialize the form with the updated data
        initializeFormWithOldData(sampleData);
    });
});

</script>
