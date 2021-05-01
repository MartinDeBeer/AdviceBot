<!DOCTYPE html>
<html lang="en">
<head>
    <title>Advice Bot Home</title>
    <meta name="viewport" content="width=device-width initial-scale=1.0" />
    <meta name="description" content="Automated financial help" />
    <meta name="tags" content="financial help, finance, bot, robot, advice bot, advicebot, money, budget" />
    <meta name="author" content="Webtech Cyber Solutions" />
    <link href="Stylesheets/styles.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" /> 
    <link href="Stylesheets/ifaaStyles.css" type="text/css" rel="stylesheet" />
    <script src="Scripts/budget.js" type="text/javascript"></script>
    <script src="Scripts/indexScripts.js"></script>
    <script src="Scripts/createUser.js"></script>
    <script src="Scripts/botScripts.js"></script>
    <script>
        if(screen.width <= 699){
                window.location = 'mobile/index.php';
            }
    </script>
</head>
<body>
    <?php session_start(); ?>
    <div class="wrapper">
        <header>            
            <!-- Logo -->
            <img class="logo" src="Images/Logo.png" alt="Advicebot Logo" onclick="window.location.href='index.php'"/>

            <!-- Menu -->
            <nav class="menu">
                <button id="home" class="menuBtn" onclick="window.location.href='index.php'" >Home</button> 
                <div class="dropdown">
                    <button class="dropbtn menuBtn">Tools</button>
                    <div class="dropdown-content">
                        <a href="Tools/budget.php">Budget Tool</a>
                        <a href="Tools/saveamillion.php">Save a Million</a>
                        <a href="Tools/retirement.php" >Retirement Tool</a>
                    </div>
                </div>
                <button id="about" class="menuBtn" onclick="window.location.href='about.php'">About Us</button>
                <button id="contact" class="menuBtn" onclick="window.location.href='mailto:admin@advicebot.co.za'">Contact Us</button>
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

            
            <div id="welcome" style="text-align: center;">
                <?php
                    if(isset($_SESSION['emailAddress'])){
                        echo "<h2>Welcome " . $_SESSION['firstName'] . "</h2>";
                    }
                ?>
            </div>
        </header>
        <!-- Ajax pages -->
        <div id="otherPage"></div> 
        <!-- Robohelp Menu -->
        <div id="homePage">
            <!-- Single Need Menu -->
            <form action="dataPages/singleNeed.php" id="singleNeed" method="post">
                    <!-- Life Cover -->
                    <input type="submit" id="lifeCover" class="singleButton" value="Life Cover" name="lifeCover"> <br>
                    <br>
                    <!-- Disability And Trauma -->
                    <input type="submit" id="disability" class="singleButton" value="Disability and Trauma" name="disability"><br>
                    <br>
                    <!-- Savings & Emergency -->
                    <input type="submit" id="savings" class="singleButton" value="Savings and Emergency Fund" name="savings"><br />
                    <br>
                    <!-- Retirement Planning -->
                    <input type="submit" id="retirement" class="singleButton" value="Retirement Planning" name="retirement"><br />
                    <br>
                    <!-- Short Term Insurance -->
                    <input type="submit" id="shortTerm" class="singleButton" value="Short Term Insurance" name="shortTerm" ><br />
                    <br>
                    <!-- Will And Testament -->
                    <input type="submit" id="will" class="singleButton" value="Will and Testament" name="will"><br />
                    <br>
                    <!-- Other ( Email ) -->
                    <input type="submit" id="other" class="singleButton" value="I have a special need" name="other" >
                </form>
                <figure id="RoboHelp">
                    <video class="videoPlayer" onmouseover="this.play();" onmouseout="this.pause();" muted="muted" onclick="questions()" >
                        <source src="Videos/intro.mp4" type="video/mp4" />
                    </video>
                    <figcaption>Click on the robot to get free financial advice</figcaption>
                </figure>
            </div>
        </form> 
        <div id="socials">  
            <a href="https://www.facebook.com/www.advicebot.co.za"><img class="social" src="Images/facebook.png" alt="Facebook Logo Black" ></a>
            <a href="https://www.instagram.com/advicebots"><img class="social" src="Images/insta.png" alt="Instagram Logo Black" ></a>
            <a href="https://www.linkedin.com/company/advicebot"><img class="social" src="Images/linkedIn.png" alt="LinkedIn Logo Black" ></a>
        </div>
            
    </div>
    <footer id="footer" style="text-align: center;">
        <button onclick="window.location.href='Docs/disclosure.php'">Disclosure Agreement</button>
        <button onclick="window.location.href='Docs/complaints.php'">Complaints Procedure</button>
        <button onclick="window.location.href='Docs/privacy.php'">Privacy Policy</button>
        <button onclick="window.location.href='Docs/use.php'">Website Use</button>
        <button onclick="window.location.href='feedback.php'">Feedback</button>
    </footer>
        
</body>
</html>