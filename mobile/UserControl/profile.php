<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Stylesheets/styles.css">
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" /> 
    <title>My Profile</title>
	<style>
		body{
			text-align: center;
		}
	</style>
</head>
<body>
    <?php
		include('appLogic.php');
    	include("../connectDB.php");

    	if(!(isset($_SESSION['emailAddress']))){
			header("Location: login.php");
		}

    	$autoID = $_SESSION['autoID'];
    	$counter = 0;

		$selectUser = "select * from users where autoID = $autoID";
    	$selectAnswers = "SELECT * FROM answers where userID = $autoID";
    	$aResult = mysqli_query($conn, $selectAnswers);
		$userResult = mysqli_query($conn, $selectUser);
		$userRow = mysqli_fetch_assoc($userResult);
    	$aRow = mysqli_fetch_assoc($aResult);
		$firstAndLast = $userRow['firstName'] . " " . $userRow['lastName'];
		$ID = $userRow['userID'];
		$email = $userRow['emailAddress'];
		$date = $aRow['date'];

		$answers = array(
			"Date advice was given" => $date,
			"First and Last" => $firstAndLast,
			"Email" => $email,
			"ID" => $ID,
			"Budget" => $aRow['budget'],
			"Marriage Status" => $aRow['marriage'],
			"Children" => $aRow['children'],
			"Will" => $aRow['will'],
			"Income type" => $aRow['employment'],
			"Salary Amount" => $aRow['salaryAmount'],
			"Assets" => $aRow['assets'],
			"Liabilities" => $aRow['liabilities'],
			"Health" => $aRow['health'],
			"Hereditary Diseases" => $aRow['diseases'],
			"Marriage Goal" => $aRow['marriageGoal'],
			"Kids Goal" => $aRow['kidsGoal'],
			"Holiday Goal" => $aRow['holidayGoal'],
			"Job Change Goals" => $aRow['jobGoal'],
			"Do you want to own property?" => $aRow['propertyGoal'],
			"Do you want to have your own business?" => $aRow['businessGoal'],
			"Ideal Retirement Age" => $aRow['retirementAge'],
			"Do you support extended family?" => $aRow['extendedFamily'],
			"Do you own property?" => $aRow['propertyOwned'],
			"Do you own a vehicle?" => $aRow['vehicleOwned'],
		);

		echo "<table id='profileTable'>";
		echo "<th>Questions</th>";
		echo "<th>Answers</th>";
		foreach($answers as $key => $val){
			echo "<tr>";
			echo "<td>$key</td>" . "<td>$val</td>";
			echo "</tr>";
		}
		echo "</table>";
    ?>

    

</body>
</html>