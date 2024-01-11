<?php
	include 'db.php';

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$id = $_POST['id'];

		$sql = "DELETE FROM linkages_outcome WHERE linkages_id = $id";
		$conn->query($sql);

		$sql = "DELETE FROM linkages_timing WHERE linkages_id = $id";
		$conn->query($sql);

		$sql = "DELETE FROM linkages_audience WHERE linkages_id = $id";
		$conn->query($sql);

		$sql = "DELETE FROM linkages_sm WHERE linkages_id = $id";
		$conn->query($sql);

		$sql = "DELETE FROM linkages_pap WHERE linkages_id = $id";
		$conn->query($sql);

		$sql = "DELETE FROM linkages_personnel_and_officials WHERE linkages_id = $id";
		$conn->query($sql);

		$sql = "DELETE FROM linkages_resources WHERE linkages_id = $id";
		$conn->query($sql);

		$sql = "SELECT * FROM linkages_implementation_plan WHERE linkages_id = $id";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			$id2 = $row['id'];

			$sql = "DELETE FROM linkages_year WHERE linkages_implementation_plan_id = $id2";
			$conn->query($sql);

			$sql = "DELETE FROM linkages_activity WHERE linkages_implementation_plan_id = $id2";
			$conn->query($sql);
		}

		$sql = "DELETE FROM linkages_implementation_plan WHERE linkages_id = $id";
		$conn->query($sql);

		$sql = "DELETE FROM linkages WHERE id = $id";
		$conn->query($sql);
	}
?>