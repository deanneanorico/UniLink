<!DOCTYPE html>
<html lang="e">
<head>
	<title>Target</title>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    	.background-color{
    		background-color: green;
    	}

    	.styled.word{
    		font-size: 24pc;
    		font-weight: bold;
    		font-style: arial;

    	}
    </style>
</head>
<body>

	<div class="col-md-8">
	<!-- outside tb-->
<!--	<div style="border: 1px solid #000;padding: 80px;width:998px ; height: 100px ;background-color: red">
		<div class="input-group-prepend">
			Example
		</div>
	</div>
-->


</div>
<!--set bg -->
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="box">
					<!--add icon-->
					<button class="btn btn-primary">
						<i class="fas fa-bars"></i> 
					</button>
					<br>
					<br>

					<i class="style: font-style: normal" >Target</i>

					<br>
				</div>
			</div>
		</div>
		<br>
	<table class="table table-bordered ">
		<thead>
		<tr>  
			<th class="col-4">Sentence</th>
			<th>2nd column</th>
		</tr>
		</thead>
		<tbody>
			
			<?php
			$sentences = array(
				array("1st.",
				"2nd."),
				array("c1","c2")

			);

			foreach ($sentences as $row) {
				echo "<tr>";
				foreach ($row as $sentence) {
					echo "<td>$sentence</td>";
				}
				echo "</tr>";

			}
			?>
		</tbody>

	</table>
	
</div>


</body>
</html>