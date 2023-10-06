<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      // Fetch data from your PHP script
      var jsonData = <?php include 'data.php'; ?>; // Modify the path to your data.php script

      // Create a DataTable with your data
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'College');
      data.addColumn('number', 'Total Count');

      for (var i = 0; i < jsonData.length; i++) {
        data.addRow([jsonData[i].college, jsonData[i].total_count]);
      }

      var options = {
        title: 'College Activities',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
    }
  </script>
</head>
<body>
  <div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>
</html>
