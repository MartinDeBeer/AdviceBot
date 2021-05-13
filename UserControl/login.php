<?php include('appLogic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Stylesheets/styles.css">
    <link rel="stylesheet" href="../Stylesheets/register.css">

    <title>Login</title>
</head>
<body>
    <div class="wrapper">
    <header>            
        <!-- Logo -->
        <img class="logo" src="../Images/Logo.png" alt="Advicebot Logo" onclick="window.location.href='index.php'"/>

        <!-- Menu -->
        <nav class="menu">
            <button id="home" class="menuBtn" onclick="window.location.href='index.php'" >Home</button> 
            <div class="dropdown">
                <button class="dropbtn menuBtn">Tools</button>
                <div class="dropdown-content">
                    <a href="../Tools/budget.php">Budget Tool</a>
                    <a href="../Tools/saveamillion.php">Save a Million</a>
                    <a href="../Tools/retirement.php" >Retirement Tool</a>
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
                echo '<button id="register" class="menuBtn" onclick="window.location.href=\'register.php\'" >Sign Up</button>';
            }
            ?>
        </nav>
    </header>

        <div class="userControl" id="login">
            <div >
                <h1 class="form-title">Login</h1>
                <form class="inputForm" action="login.php" method="post">
                    <!-- form validation messages -->
                    <?php include('messages.php'); ?>
                    <table>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="emailAddress"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" name="login_user" class="login-btn">Login</button></td>
                        </tr>
                        <tr>
                            <td>Not a <a href="register.php">member</a>?</td>
                            <td><a href="enterEmail.php">Forgot your password?</a></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    

    <footer id="footer" style="text-align: center;">
        <div class="part1">
            <div id="socials">  
                <a href="https://www.facebook.com/www.advicebot.co.za"><img class="social" src="../Images/facebook.png" alt="Facebook Logo Black" ></a>
                <a href="https://www.instagram.com/advicebots"><img class="social" src="../Images/insta.png" alt="Instagram Logo Black" ></a>
                <a href="https://www.linkedin.com/company/advicebot"><img class="social" src="../Images/linkedIn.png" alt="LinkedIn Logo Black" ></a>
            </div>
        </div>
        <hr>


        <div class="part2">
            <div id="aboutAdviceBot">
                <h3>About AdviceBot</h3>
                <p>AdviceBot is an online platform that anyone can access free of charge. The free advice tool will guide you through an automated process with targeted questions to establish a financial priority list for your unique circumstances. From there you can access a more detailed report and interact on a more personal level with a dedicated and experienced back office.</p>
            </div>
        </div>
        <hr>


        <div class="part3">
            <div id="legal">
                <button onclick="window.location.href='Docs/disclosure.php'">Disclosure Agreement</button>
                <button onclick="window.location.href='Docs/complaints.php'">Complaints Procedure</button>
                <button onclick="window.location.href='Docs/privacy.php'">Privacy Policy</button>
                <button onclick="window.location.href='Docs/use.php'">Website Use</button>
                <button onclick="window.location.href='feedback.php'">Feedback</button>
            </div>
        </div>
    </footer>
</body>
</html>