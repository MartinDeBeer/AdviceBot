<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="Scripts/botScripts.js" type="text/javascript"></script>
    <link rel="stylesheet" href="Stylesheets/ifaaStyles.css">
    <link rel="stylesheet" href="Stylesheets/styles.css">

</head>


<body onkeypress="nextQuestion(event)" >

    <header>            
        <!-- Logo -->
        <img class="logo" src="Images/Logo.png" alt="Advicebot Logo" onclick="window.location.href='index.php'"/>

        <!-- Menu -->
        <nav class="menu">
            <div class="dropdown">
                <button class="dropbtn menuBtn">Tools</button>
                <div class="dropdown-content">
                    <a  href="Tools/budget.php">Budget Tool</a>
                    <a href="Tools/saveamillion.php">Save a Million</a>
                    <a href="Tools/retirement.php" >Retirement Tool</a>
                </div>
            </div>
            <button id="about" class="menuBtn" onclick="window.location.href='about.php'">About Us</button>
            <button id="contact" class="menuBtn" onclick="window.location.href='mailto:admin@advicebot.co.za'">Contact Us</button>
            <?php
                session_start();
                if(isset($_SESSION['emailAddress'])){
                    echo '<button id="logout" class="menuBtn" onclick="window.location.href=\'UserControl/logout.php\'">Log Out </button>' .
                    '<button id="profile" class="menuBtn" onclick="window.location.href=\'report.php\'" >My Profile</button>';
                }else {
                    echo '<button id="login" class="menuBtn" onclick="window.location.href=\'UserControl/login.php\'" >Log In</button>';
                }
            ?>
        </nav>            
        <div class="quote">
            <p>"To become financially free you must be disciplined. The financial instrument is secondary" - IFAA</p>
        </div>
    </header>
    <!-- Check if user is logged in -->
    <div id="reg">
        <?php
            include('dataPages/connectDB.php');

            if(!(isset($_SESSION['emailAddress']))){
                header('location: UserControl/register.php');
                header('location: UserControl/login.php');
            }
            else{
                echo '<input type="button" id="loggedIn" value="CLICK HERE TO GET STARTED" onclick="registered()">';
            }

        ?>
    </div>
    


    <!-- Robot and progress bar -->
    <div id="roboAdvice">
        <!-- Progress Bar  -->
        <progress  id="questionProgress" value="0" max="29" >0</progress>
        <!-- Video -->
        <video id="vid" autoplay = 'autoplay' muted="muted">
            <source src="Videos/sentence.mp4" type="video/mp4" />
        </video>



    </div>

    <!-- Form to submit data -->
    <form action="dataPages/dataPost.php" method="POST">

        <!-- Ajax Budget -->
        <div id="Budget"></div>
        <!-- Ajax Questions -->
        <div id='questions'></div><br>
        
        <div id="buttons" style="visibility: hidden;">
            <input type="button" id="start" value="Next" onclick="showQuestion()" />
        </div>
        <!-- Tips -->
        <div id="tip">
            <h3 id="tipHeading" >IFAA TIP:</h3>
            <p id="ifaaTip"></p>
            <input type="button" id="closeTip" onclick="document.getElementById('tip').style.visibility = 'hidden'" value="Close Tip">
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
        <input type="submit" value="Submit" id="submitAnswers" style="visibility: hidden;">


    </form>
</body>
</html>
