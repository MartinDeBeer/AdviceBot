<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Automated financial help" />
    <meta name="tags" content="financial help, finance, bot, robot, advice bot, advicebot, money, budget" />
    <meta name="author" content="Webtech Cyber Solutions" />
    <script src="../Scripts/saveamillion.js" type="text/javascript"></script>
    <link href="../Stylesheets/styles.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="../Images/favicon.ico" type="image/x-icon" />
    <link href="../Stylesheets/saveamillion.css" type="text/css" rel="stylesheet" />
    <title>Save a Million</title>
</head>
<body>
    <header>            
        <!-- Logo -->
        <img class="logo" src="../Images/Logo.png" alt="Advicebot Logo" onclick="window.location.href='../index.php'"/>

        <!-- Menu -->
        <nav class="menu">
            <button id="home" class="menuBtn" onclick="window.location.href='../index.php'" >Home</button> 
            <div class="dropdown">
                <button class="dropbtn menuBtn">Tools</button>
                <div class="dropdown-content">
                    <a href="budget.php">Budget Tool</a>
                    <a href="retirement.php" >Retirement Tool</a>
                </div>
            </div>
            <button id="about" class="menuBtn" onclick="window.location.href='about.php'">About Us</button>
            <button id="contact" class="menuBtn" onclick="window.location.href='contact.php'">Contact Us</button>
            <?php
            if(isset($_SESSION['emailAddress'])){
                echo '<button id="logout" class="menuBtn" onclick="window.location.href=\'UserControl/logout.php\'">Log Out </button>' .
                '<button id="profile" class="menuBtn" onclick="window.location.href=\'report.php\'" >My Profile</button>'. 
                '<button id="ifaa" class="menuBtn" onclick="questions()" >Get Advice</button>';
            }else {
                echo '<button id="register" class="menuBtn" onclick="window.location.href=\'UserControl/register.php\'" >Sign Up</button>';
                echo '<button id="login" class="menuBtn" onclick="window.location.href=\'UserControl/login.php\'" >Log In</button>';
            }
            ?>
        </nav>
    </header>
    <h1 style="text-align: center">Save a million goal calculator</h1>

    <div id="million">
        <h3 style="text-align: center;">See how long you have to save to get to your goal.</h3>
        <table id = "saveAMil">
            <tr>
                <td>Current Amount Already Saved: </td>
                <td>R<input type="text" class="input" id = 'amountSaved'></td>
            </tr>
            <tr>
                <td>New Monthly Savings: </td>
                <td>R<input type="text" class="input" id = 'monthlySavings'></td>
            </tr>
            <tr>
                <td>Annual Interest: </td>
                <td>%<input type="text" class="input" id = 'interest'></td>
            </tr>
            <tr>
                <td>Goal: </td>
                <td>R<input type="text" class="input" id = 'goal' value="1000000"></td>
            </tr>
            <tr>
                <td><input type="button" value="Calculate" id="calculate" onclick="calculateTime()"></td>
            </tr>
        </table>
        <div id="result" style="visibility: hidden;">
            It will take you <span id = 'years'></span> years and <span id="months"></span> months to save <span id="goalOutput"></span>
        </div>
    </div>
</body>
</html>
