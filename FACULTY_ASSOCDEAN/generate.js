// Wait for the document to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("inputForm");
    const generateReportButton = document.getElementById("generateReport");
    const reportContainer = document.getElementById("report");

    // Add a click event listener to the "Generate Report" button
    generateReportButton.addEventListener("click", function () {
        // Get the values from the input fields
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;

        // Create a report
        const report = `
            <h2>Generated Report</h2>
            <p><strong>Name:</strong> ${name}</p>
            <p><strong>Email:</strong> ${email}</p>
            <!-- Add more fields as needed -->
        `;

        // Display the report in the report container
        reportContainer.innerHTML = report;
    });
});
