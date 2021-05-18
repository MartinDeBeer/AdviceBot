<?php include('appLogic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset</title>
    <link rel="shortcut icon" href="../Images/favicon.ico" type="image/x-icon" /> 
    <link rel="stylesheet" href="../Stylesheets/styles.css">
    <link rel="stylesheet" href="../Stylesheets/register.css">
</head>
<body>
	<header>            
        <!-- Logo -->
        <img class="logo" src="../Images/Logo.png" alt="Advicebot Logo" onclick="window.location.href='index.php'"/>

        <!-- Menu -->
        <nav class="menu">
            <button id="home" class="menuBtn" onclick="window.location.href='../index.php'" >Home</button> 
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
            
        </nav>
    </header>
	<form class="userControl" action="enterEmail.php" id="passReset" method="post">
		<h2 class="form-title">Reset password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>Your email address</label>
			<input type="email" name="email">
		</div>
		<div class="form-group">
			<button type="submit" name="reset-password" class="login-btn">Submit</button>
		</div>
	</form>
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