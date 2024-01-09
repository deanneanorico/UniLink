<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$college = $_POST['college'];

		header("location: ./index.php?college=".$college);
		exit();
	}
	
?>