<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['line']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Fetch data from your PHP script
            var jsonData = <?php include 'data.php'; ?>;

            // Create a DataTable with your data
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'College');
            data.addColumn('number', 'Total Number of Activities');

            // Populate the DataTable with the fetched data
            for (var i = 0; i < jsonData.length; i++) {
                data.addRow([jsonData[i].college, parseInt(jsonData[i].total_count)]);
            }

            var options = {
                chart: {
                   
                },
                width: 650, // Set width to 700px
                height: 200, // Set height to 300px
                vAxis: {
                    viewWindow: {
                        min: 0 // Set the minimum value for the y-axis to 0
                    }
                },
                legend: { position: 'none' } // Remove the legend
            };

            var chart = new google.charts.Line(document.getElementById('linechart_material'));

            chart.draw(data, google.charts.Line.convertOptions(options));
        }
    </script>
</head>

<body>
  <!-- Add filter form -->
    <form method="get" action="index.php" id="filterForm">
        <label for="end_date">Select End Date Year:</label>
        <select name="end_date" id="end_date">
            <!-- You can populate the options dynamically based on your data or provide a fixed range -->
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <!-- Add more years as needed -->
        </select>
        <button type="submit">Filter</button>
    </form>
    <div id="linechart_material" style="width: 700px; height: 300px"></div>

    

    <script>
        // Add JavaScript to submit the form when the end_date is changed
        document.getElementById('end_date').addEventListener('change', function () {
            document.getElementById('filterForm').submit();
        });
    </script>
</body>

</html>
