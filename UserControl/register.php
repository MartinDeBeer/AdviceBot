<?php include('appLogic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Stylesheets/styles.css">
	<link rel="stylesheet" href="../Stylesheets/register.css">
    <script src="../Scripts/createUser.js"></script>
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" /> 
    <title>Register</title>
    <style>
        #age{
            pointer-events: none;
            background-color: lightgray;
            border: lightgray 1px solid;
        }
        #gender{
            pointer-events: none;
            background-color: lightgray;
            border: lightgray 1px solid;
        }
    </style>
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
                    '<button id="profile" class="menuBtn" onclick="window.location.href=\'report.php\'" >My Profile</button>' . 
                    '<button id="ifaa" class="menuBtn" onclick="questions()" >Get Advice</button>';
                }else {
                    echo '<button id="login" class="menuBtn" onclick="window.location.href=\'login.php\'" >Log In</button>';
                }
                ?>
            </nav>
        </header>
        <div class="userControl">
            <div id="register">
                <h1>Register</h1>
                <form class="inputForm" action="register.php" method="post">
                    <?php include('messages.php'); ?>
                    <table>
                        <tr>
                            <td>Please input your ID number</td>
                            <td><input type="text" id="idNum" name="idNumber" onchange="getAge()" onfocusout="checkInput('idNum')"> *</td>
                            <td><p class="error" id="idError"></p></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td><input type="text" id="age" name="age" ></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><input type="text" id="gender" name="gender" ></td>
                        </tr>
                        <tr>
                            <td>Please input your first name</td>
                            <td><input type="text" id="firstName" name="firstName" onfocusout="checkInput('firstName')"> *</td>
                            <td><p class="error" id="nameError"></p></td>
                        </tr>
                        <tr>
                            <td>Please input your last name</td>
                            <td><input type="text" id="lastName" name="lastName" onfocusout="checkInput('lastName')"> *</td>
                            <td><p class="error" id="lNameError"></p></td>
                        </tr>
                        <tr>
                            <td>Please input your email address</td>
                            <td><input type="email" id="email" name="emailAddress" onfocusout="checkInput('email')"> *</td>
                            <td><p class="error" id="emailError"></p></td>
                        </tr>
                        <tr>
                            <td>Please input your cellphone number</td>
                            <td><input type="text" id="cell" name="cell" onfocusout="checkInput('cell')"> *</td>
                            <td><td><p class="error" id="cellError"></p></td></td>
                        </tr>
                        <tr>
                            <td>Please create a password of at least 8 characters</td>
                            <td><input type="password" id="pass" name="pass" onfocusout="checkInput('pass')"> *</td>
                            <td><p class="error" id="passError"></p></td>
                        </tr>
                        <tr>
                            <td>Please confirm your password</td>
                            <td><input type="password" id="passConf" name="passConf" oninput="checkInput('passConf')"> *</td>
                            <td><p class="error" id="passConfError"></p></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button id="createUser" type="submit" name="createUser" disabled>Register</button></td>
                        </tr>
                        <tr>
                            <td>Already have an account? <a href="login.php">Login</a></td>
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
                <p>Advicebot will transform your insurance and investment world with free, practical and automated solutions.
                We will take Roboadvice and Fintech to a whole new level. Experience the knowledge and guidance of a financial advisor from the comfort of your own home. Advicebot will guide you through important financial decisions to better understand your needs and goals. Advicebot will be as if you visit your financial advisor in person with real live chat with an experience advisor if you choose to. Use the mini chatbot to ask any question regarding your Will and Testament, Life insurance, Investments, Retirement, House or Motor insurance or any other financial topic.</p>
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