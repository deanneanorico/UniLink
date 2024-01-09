<?php
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$id = $_POST['id'];
		$college = $_POST['college'];

		if($id == "null") {
			header("location: ./docu_national.php?college=".$college);
			exit();
		} else {
			header("location: ./docu_national.php?id=".$id."&college=".$college);
			exit();
		}
	}
?>