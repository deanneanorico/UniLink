<?php
	include 'db.php';
	session_start();

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$userID = $_SESSION['id'];
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

		$sql = "INSERT INTO `linkages`(`added_by`, `title`, `category`, `overview`, `strategic_fit`, `intended_outcome`, `scope`, `arrangement`, `risk_management`, `monitoring`) VALUES ($userID,'$partnerTitle','$partnerType','$overview','$fit','$intendedOutcome','$scope','$acd','$risk','$mom')";
		$result = $conn->query($sql);
		$linkagesID = $conn->insert_id;

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