<?php
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$id = $_POST['id'];
		$college = $_POST['college'];

		if($id == "null") {
			header("location: ./docu_local.php?college=".$college);
			exit();
		} else {
			header("location: ./docu_local.php?id=".$id."&college=".$college);
			exit();
		}
	}
?>