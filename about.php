<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Stylesheets/styles.css" type="text/css" rel="stylesheet" />
    <link href="Stylesheets/about.css" type="text/css" rel="stylesheet" />
    <title>About Us</title>
</head>
<body>
    <div class="wrapper">
        <header>            
            <!-- Logo -->
            <img class="logo" src="Images/Logo.png" alt="Advicebot Logo" onclick="window.location.href='index.php'"/>

            <!-- Menu -->
            <nav class="menu">
                <button id="home" class="menuBtn" onclick="window.location.href='index.php'" >Home</button> 
                <button id="ifaa" class="menuBtn" onclick="questions()" >Get Advice</button>
                <div class="dropdown">
                    <button class="dropbtn menuBtn">Tools</button>
                    <div class="dropdown-content">
                        <a href="Tools/budget.php">Budget Tool</a>
                        <a href="Tools/saveamillion.php">Save a Million</a>
                        <a href="Tools/retirement.php" >Retirement Tool</a>
                    </div>
                </div>
                <button id="about" class="menuBtn" onclick="window.location.href='about.php'">About Us</button>
                <button id="contact" class="menuBtn" onclick="window.location.href='contact.php'">Contact Us</button>
                <?php
                if(isset($_SESSION['emailAddress'])){
                    echo '<button id="logout" class="menuBtn" onclick="window.location.href=\'UserControl/logout.php\'">Log Out </button>' .
                    '<button id="profile" class="menuBtn" onclick="window.location.href=\'report.php\'" >My Profile</button>';
                }else {
                    echo '<button id="register" class="menuBtn" onclick="window.location.href=\'UserControl/register.php\'" >Sign Up</button>';
                    echo '<button id="login" class="menuBtn" onclick="window.location.href=\'UserControl/login.php\'" >Log In</button>';
                }
                ?>
            </nav>
        </header>
        <h1>About AdviceBot</h1>

        <div class="freeAdvice">
            <h3><u>Free Advice</u></h3>
            <p>AdviceBot is an online platform that anyone can access free of charge. The free advice tool will guide you through an automated process with targeted questions to establish a financial priority list for your unique circumstances. From there you can access a more detailed report and interact on a more personal level with a dedicated and experienced back office.</p>
        </div>

        <div class="ourMission">
            <h3><u>Our Mission</u></h3>
            <ul>
                <li>We aim to transform your insurance and investment world with free, practical and automated solutions.</li>
                <li>We want to take Robo-advice and Fintech to a whole new level and make it more personal.</li>
                <li>We want everyone to benefit from the multitude of opportunities and benefits it can offer.</li>
                <li>Everyone should experience the knowledge and guidance of a financial advisor without financial constraints.</li>
                <li>AdviceBot will guide the user through important financial decisions so he can better understand his needs and goals.</li>
                <li>We aim to replicate the user’s visit to his financial advisor in person.</li>
            </ul>
        </div>

        <div class="liveChat">
            <h3><u>Live Chat</u></h3>
            <p>You can live chat with an experience advisor if you choose to. Use the mini chatbot to ask any question regarding your Will and Testament, Life insurance, Investments, Retirement, House or Motor insurance or any other financial topic.</p>            
        </div>

        <div class="independent">
            <h3><u>We are independent</u></h3>
            <p>AdviceBot is truly independent and not affiliated with any product provider. Although we have contracts with most Insurance companies and a variety of other product and service providers, we believe that current automated solutions are driven by big product providers and they propagate their own products. </p>
            <p>We strive to give the user a truly independent opinion so that he/she can make an informed decision.  </p>
            <p>AdviceBot Pty (Ltd) is a juristic representative of Joroy0082CC a licensed Financial services provider with license number 27368. </p>
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