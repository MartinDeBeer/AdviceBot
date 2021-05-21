<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Advice</title>
    <script src="Scripts/botScripts.js" type="text/javascript"></script>
    <script src="Scripts/budget.js" type="text/javascript"></script>
    <link rel="stylesheet" href="Stylesheets/bg.css">
    <link rel="stylesheet" href="Stylesheets/ifaaStyles.css">

</head>


<body >
    <!-- Robot and progress bar -->
    <div id="roboAdvice">
        <!-- Video -->
        <video id="vid" autoplay = 'autoplay' muted="muted">
            <source src="Videos/sentence.mp4" type="video/mp4" />
        </video>
        
        <!-- Progress Bar  -->
        <progress  id="questionProgress" value="0" max="29" >0</progress>
    </div>

    <!-- Check if user is logged in -->
    <div id="reg">
        <?php
            session_start();
            include('dataPages/connectDB.php');

            if(!(isset($_SESSION['emailAddress']))){
                echo "Start by clicking <a href='UserControl/register.php'>here</a> to create a free account.";
            }
            else{
                echo '<input type="button" id="loggedIn" value="CLICK HERE TO GET STARTED" onclick="registered()">';
            }

        ?>
    </div>


    <!-- Form to submit data -->
    <form action="dataPages/dataPost.php" method="POST">

        <!-- Ajax Budget -->
        <div id="Budget"></div>
        <!-- Ajax Questions -->
        <div id='questions'></div><br>
        <input type="submit" value="Submit" id="submitAnswers" style="visibility: hidden;">
        <div id="buttons" style="visibility: hidden;">
            <input type="button" id="start" value="Next" onclick="showQuestion()" />
        </div>

        <div id="typewriterQuestions"></div>
        <!-- Answers to be posted -->
        <div id="answers" >
            <input type="text" id="budgetAnswer" name="budgetAnswer" >
            <input type="text" id="marriageAnswer" name="marriageAnswer">
            <input type="text" id="kidsAnswer" name="kidsAnswer">
            <input type="text" id="willAnswer" name="willAnswer">
            <input type="text" id="employmentAnswer" name="employmentAnswer">
            <input type="text" id="incomeAnswer" name="incomeAnswer">
            <input type="text" id="assetsAnswer" name="assetsAnswer">
            <input type="text" id="liabilitiesAnswer" name="liabilitiesAnswer">
            <input type="text" id="healthAnswer" name="healthAnswer">
            <input type="text" id="diseasesAnswer" name="diseasesAnswer">
            <input type="text" id="marriageGoalAnswer" name="marriageGoalAnswer">
            <input type="text" id="kidsGoalAnswer" name="kidsGoalAnswer">
            <input type="text" id="holidayGoalAnswer" name="holidayGoalAnswer">
            <input type="text" id="jobGoalAnswer" name="jobGoalAnswer">
            <input type="text" id="propertyGoalAnswer" name="propertyGoalAnswer">
            <input type="text" id="businessGoalAnswer" name="businessGoalAnswer">
            <input type="text" id="retirementAgeAnswer" name="retirementAgeAnswer">
            <input type="text" id="extendedFamilyAnswer" name="extendedFamilyAnswer">
            <input type="text" id="propertyOwnedAnswer" name="propertyOwnedAnswer">
            <input type="text" id="vehicleOwnedAnswer" name="vehicleOwnedAnswer">
            <input type="text" name="age" id="age" value="<?php echo $_SESSION['age']; ?>">
            <input type="text" name="gender" id="gender" value="<?php echo $_SESSION['gender']; ?>">
            <input type="text" id="date" name="date">
        </div>

        <!-- Weights -->
        <div id="report" style="visibility: hidden;" >
            Death Cover:
            <input type="text" id='deathCover' name="death" >
            Disability:
            <input type="text" id='disabilityW' name="disability" >
            Savings:
            <input type="text" id='savingsW' name="savings" >
            Retirement:
            <input type="text" id='retirementW' name="retirement" >
            Will:
            <input type="text" id='willWeight' name="will" >
            Short Term:
            <input type="text" id='shortTermInsurance' name="shortTerm" >
        </div>


    </form>
</body>
</html>
