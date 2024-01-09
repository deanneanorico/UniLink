<?php
	include 'db.php';
	session_start();

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$id = $_POST['id'];
		$partnerTitle = $_POST['partnerTitle'];
		$partnerType = $_POST['partnerType'];
		$overview = $_POST['overview'];
		$fit = $_POST['fit'];
		$intendedOutcome = $_POST['intendedOutcome'];
		$scope = $_POST['scope'];
		$personnel = $_POST['personnel'];
		$officials = $_POST['officials'];
		$acd = $_POST['acd'];
		$resources = $_POST['resources'];
		$yearTotal = $_POST['year-total'];
		$activityTotal = $_POST['activity-total'];
		$year = $_POST['year'];
		$activity = $_POST['activity'];
		$risk = $_POST['risk'];
		$mom = $_POST['mom'];
		$programActivityProjects = $_POST['program-activity-projects'];
		$strategyMedium = $_POST['strategy-medium'];
		$targetAudience = $_POST['target-audience'];
		$timingFrequency = $_POST['timing-frequency'];
		$outcomes = $_POST['outcomes'];

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

		$sql = "UPDATE `linkages` SET `title`='$partnerTitle',`category`='$partnerType',`overview`='$overview',`strategic_fit`='$fit',`intended_outcome`='$intendedOutcome',`scope`='$scope',`arrangement`='$acd',`risk_management`='$risk',`monitoring`='$mom' WHERE id = $id";
		$result = $conn->query($sql);
		$linkagesID = $id;

		$i = 0;
		foreach ($personnel as $value) {
			$sql = "INSERT INTO `linkages_personnel_and_officials`(`linkages_id`, `personnels`, `officials`) VALUES ($linkagesID,'$value','$officials[$i]')";
			$conn->query($sql);
			$i++;
		}

		foreach ($resources as $value) {
			$sql = "INSERT INTO `linkages_resources`(`linkages_id`, `resources`) VALUES ($linkagesID,'$value')";
			$conn->query($sql);
		}

		$yearIndex = 0;
		$activityIndex = 0;
		$k = 0;
		foreach ($yearTotal as $value) {
			$sql = "INSERT INTO `linkages_implementation_plan`(`linkages_id`) VALUES ($linkagesID)";
			$conn->query($sql);
			$linkagesImplementationPlanID = $conn->insert_id;

			$i = 0;
			while($i < $value) {
				$sql = "INSERT INTO `linkages_year`(`linkages_implementation_plan_id`, `year`) VALUES ($linkagesImplementationPlanID,'$year[$yearIndex]')";
				$conn->query($sql);
				$yearIndex++;
				$i++;
			}

			$value2 = $activityTotal[$k];
			$i = 0;
			while($i < $value2) {
				$sql = "INSERT INTO `linkages_activity`(`linkages_implementation_plan_id`, `activity`) VALUES ($linkagesImplementationPlanID,'$activity[$activityIndex]')";
				$conn->query($sql);
				$activityIndex++;
				$i++;
			}
			$k++;
		}

		foreach ($programActivityProjects as $value) {
			$sql = "INSERT INTO `linkages_pap`(`linkages_id`, `project`) VALUES ($linkagesID,'$value')";
			$conn->query($sql);
		}

		foreach ($strategyMedium as $value) {
			$sql = "INSERT INTO `linkages_sm`(`linkages_id`, `strategy`) VALUES ($linkagesID,'$value')";
			$conn->query($sql);
		}

		foreach ($targetAudience as $value) {
			$sql = "INSERT INTO `linkages_audience`(`linkages_id`, `audience`) VALUES ($linkagesID,'$value')";
			$conn->query($sql);
		}

		foreach ($timingFrequency as $value) {
			$sql = "INSERT INTO `linkages_timing`(`linkages_id`, `timing`) VALUES ($linkagesID,'$value')";
			$conn->query($sql);
		}

		foreach ($outcomes as $value) {
			$sql = "INSERT INTO `linkages_outcome`(`linkages_id`, `outcome`) VALUES ($linkagesID,'$value')";
			$conn->query($sql);
		}

		header("location: ./linkages.php");
		exit();
	}
?>