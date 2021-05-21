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
            // Start of Tawk.to Script
            var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
            (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f651619f0e7167d0011b389/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4R3S1484XX"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4R3S1484XX');
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
                <div class="dropdown">
                    <button class="dropbtn menuBtn">Tools</button>
                    <div class="dropdown-content">
                        <a  href="Tools/budget.php">Budget Tool</a>
                        <a href="Tools/saveamillion.php">Save a Million</a>
                        <a href="Tools/retirement.php" >Retirement Tool</a>
                    </div>
                </div>
                <button id="providers" class="menuBtn" onclick="window.location.href='providers.php'" >Product Providers</button>
                <button id="about" class="menuBtn" onclick="window.location.href='about.php'">About Us</button>
                <button id="contact" class="menuBtn" onclick="window.location.href='mailto:admin@advicebot.co.za'">Contact Us</button>
                <?php
                if(isset($_SESSION['emailAddress'])){
                    echo '<button id="logout" class="menuBtn" onclick="window.location.href=\'UserControl/logout.php\'">Log Out </button>' .
                    '<button id="profile" class="menuBtn" onclick="window.location.href=\'report.php\'" >My Profile</button>'. 
                    '';
                }else {
                    echo '<button id="login" class="menuBtn" onclick="window.location.href=\'UserControl/login.php\'" >Log In</button>';
                }
                ?>
            </nav>            
            <div class="quote">
                <p>"To become financially free you must be disciplined. The financial instrument is secondary" - IFAA</p>
            </div>
        </header>
        <!-- Robohelp Menu -->
        <div id="page1">

                <figure id="RoboHelp">
                    <video class="videoPlayer" onmouseover="this.play();" onmouseout="this.pause();" muted="muted" onclick="window.location.href='ifaa.php'" >
                        <source src="Videos/intro.mp4" type="video/mp4" />
                    </video>                    
                </figure>
                <?php
                    if(!isset($_SESSION['emailAddress'])){
                        echo '<div id="registration">
                        <p>Sign up for a free account to start getting automated financial advice</p>
                        <button id="register" class="menuBtn" onclick="window.location.href=\'UserControl/register.php\'" >Sign Up</button>
                        </div>';
                    }
                    else {
                        echo '<div id="registration">
                        <h3>Welcome ' . $_SESSION['firstName'] . '</h3>
                        <p>Click on the robot to start your free automated financial advice process</p>
                    </div>';
                    }
                ?>
            </div>

        <div id="page2">
            <h1>Single Need</h1>
            <!-- Single Need Menu -->
            <form action="singleNeed.php" id="singleNeed" method="post">
                <!-- Life Cover -->
                <input type="submit" id="lifeCover" class="singleButton" value="Life Cover" name="lifeCover">
                <!-- Disability And Trauma -->
                <input type="submit" id="disability" class="singleButton" value="Disability and Trauma" name="disability">
                <!-- Savings & Emergency -->
                <input type="submit" id="savings" class="singleButton" value="Savings and Emergency Fund" name="savings">
                <!-- Retirement Planning -->
                <input type="submit" id="retirement" class="singleButton" value="Retirement Planning" name="retirement">
                <!-- Short Term Insurance -->
                <input type="submit" id="shortTerm" class="singleButton" value="Short Term Insurance" name="shortTerm" >
                <!-- Will And Testament -->
                <input type="submit" id="will" class="singleButton" value="Will and Testament" name="will">
                <!-- Other ( Email ) -->
                <input type="submit" id="other" class="singleButton" value="I have a special need" name="other" >
            </form>

        </div>
        

            
    </div>
    <footer id="footer" style="text-align: center;">
        <div class="part1">
            <div id="socials">  
                <a href="https://www.facebook.com/www.advicebot.co.za"><img class="social" src="Images/facebook.png" alt="Facebook Logo Black" ></a>
                <a href="https://www.instagram.com/advicebots"><img class="social" src="Images/insta.png" alt="Instagram Logo Black" ></a>
                <a href="https://www.twitter.com/advicebot10"><img class="social" src="Images/twitter.png" alt="Twitter Logo Black" ></a>
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