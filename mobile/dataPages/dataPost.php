<?php

    session_start();
    include('connectDB.php');

    $IDNum = $_SESSION['autoID'];
    echo $IDNum;

    $selectUser = "select * from users where userID = '$IDNum'";
    $result = mysqli_query($conn, $selectUser);
    $row = mysqli_fetch_array($result);

    // Weights
    $userID = $IDNum;
    echo $userID;
    $death = $_POST['death'];
    $disability = $_POST['disability'];
    $savings = $_POST['savings'];
    $retirement = $_POST['retirement'];
    $will = $_POST['will'];
    $shortTerm = $_POST['shortTerm'];

    //Answers
    $budget = $_POST['budgetAnswer'];
    $marriage = $_POST['marriageAnswer'];
    $kids = $_POST['kidsAnswer'];
    $willAnswer = $_POST['willAnswer'];
    $employment = $_POST['employmentAnswer'];
    $income = $_POST['incomeAnswer'];
    $health = $_POST['healthAnswer'];
    $diseases = $_POST['diseasesAnswer'];
    $marriageGoal = $_POST['marriageGoalAnswer'];
    $kidsGoal = $_POST['kidsGoalAnswer'];
    $holidayGoal = $_POST['holidayGoalAnswer'];
    $jobGoal = $_POST['jobGoalAnswer'];
    $propertyGoal = $_POST['propertyGoalAnswer'];
    $businessGoal = $_POST['businessGoalAnswer'];
    $retirementAge = $_POST['retirementAgeAnswer'];
    $extendedFamily = $_POST['extendedFamilyAnswer'];
    $propertyOwned = $_POST['propertyOwnedAnswer'];
    $vehicleOwned = $_POST['vehicleOwnedAnswer'];
    $assets = $_POST['assetsAnswer'];
    $liabilities = $_POST['liabilitiesAnswer'];
    $date = $_POST['date'];


    echo "Budget: " . $budget . "<br>";
    echo "Marriage: " . $marriage . "<br>";
    echo "Kids: " . $kids . "<br>";
    echo "Will: " . $willAnswer . "<br>";
    echo "Employment: " . $employment . "<br>";
    echo "Income: " . $income . "<br>";
    echo "Health: " . $health . "<br>";
    echo "Diseases: " . $diseases . "<br>";
    echo "Marriage Goal: " . $marriageGoal . "<br>";
    echo "Kids Goal: " . $kidsGoal . "<br>";
    echo "Holiday Goal: " . $holidayGoal . "<br>";
    echo "Job Goal: " . $jobGoal . "<br>";
    echo "Property Goal: " . $propertyGoal . "<br>";
    echo "Business Goal: " . $businessGoal . "<br>";
    echo "Retirement Age: " . $retirementAge . "<br>";
    echo "Extended Family: " . $extendedFamily . "<br>";
    echo "Property Owned: " . $propertyOwned . "<br>";
    echo "Vehicle Owned: " . $vehicleOwned . "<br>";
    echo "Assets: " . $assets . "<br>";
    echo "Liabilities: " . $liabilities . "<br>";
    echo "Date: " . $date . "<br>";
    $postData = "insert into report values (Null, '$userID', '$death', '$disability', '$savings', '$retirement', '$will', '$shortTerm')";


    $postAnswers = "insert into answers (userID, budget, marriage, children, will, employment, salaryAmount, assets, liabilities, health, diseases, marriageGoal, kidsGoal, holidayGoal, jobGoal, propertyGoal, businessGoal, retirementAge, extendedFamily, propertyOwned, vehicleOwned, date) 
    values ('$userID', '$budget', '$marriage', '$kids', '$willAnswer', '$employment','$income', '$assets', '$liabilities', '$health', '$diseases', '$marriageGoal', '$kidsGoal', '$holidayGoal', '$jobGoal', '$propertyGoal', '$businessGoal', '$retirementAge', '$extendedFamily', '$propertyOwned', '$vehicleOwned', '$date') ";
        

    if(mysqli_query($conn, $postData) && mysqli_query($conn, $postAnswers)){
        echo "New record created";
        header('location: ../report.php');
    }else{
        echo "Error: " . mysqli_error($conn);
    }
?>