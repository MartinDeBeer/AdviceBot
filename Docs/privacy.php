<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Stylesheets/styles.css">
    <link rel="stylesheet" href="../Stylesheets/docs.css">
    <title>Privacy Policy</title>
    <style>
        a, a:visited{
            color: blue;
            text-decoration: none;
        }        
    </style>
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
                    <a href="saveamillion.php">Save a Million</a>
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
    <h1 style="text-align: center;">PRIVACY POLICY</h1>
    <div id="tableOfContents">
        <h3>TABLE OF CONTENTS </h3>
        <ol>
            <li><a href="#popi" > PROTECTION OF PERSONAL INFORMATION ACT, 2013 (POPI)</a></li>
            <li><a href="#collection"> COLLECTION OF YOUR PERSONAL INFORMATION</a></li>
            <li><a href="#useOfInfo"> USE OF YOUR PERSONAL INFORMATION</a></li>
            <li><a href="#cookies"> USE OF COOKIES</a></li>
            <li><a href="#security"> SECURITY OF YOUR PERSONAL INFORMATION</a></li>
            <li><a href="#changes"> CHANGES TO THIS STATEMENT OF PRIVACY</a></li>
            <li><a href="#contact"> CONTACT INFORMATION</a></li>
        </ol>
    </div>
   
    <div id="privacyPolicy">
        <p>AdviceBot is committed to protecting your privacy and developing technology that gives you the most powerful and safe online experience. This Statement of Privacy applies to the AdviceBot website (the Website) and governs data collection and usage. By using the Website, you consent to the data practices described in this statement.</p> 
        <h3 id="popi">1.  PROTECTION OF PERSONAL INFORMATION ACT, 2013 (POPI)</h3>
        <ul style="list-style-type:none;">
            <li>
                1.1.  You acknowledge that by using the Website and by doing any business with AdviceBot you will be providing AdviceBot with personal data, which may be protected by data protection legislation, including inter alia, the Protection of Personal Information Act, 2013 (POPI). You authorize us to process all such personal data and to transmit any such personal data to any Affiliate (which Affiliate may also process such personal data) for the purposes of performing the Agreement and in furtherance of AdviceBot legitimate interests including statistical analysis, marketing of our services and credit control. You also authorize us to process and transmit your personal data in the manner contemplated below in this Statement of Privacy.
            </li>
            <li>
                1.2.  For purposes of this Statement of Privacy, “Affiliate” means any member of Joroy0082CC t/a Bosch financial services, including  without  limitation,  any  subsidiary, sub-subsidiary, holding  company,  fellow  subsidiary of  any holding company of Advicebot (Pty) Ltd or Joroy0082CC. 
            </li>
            <li>
                1.3.  You authorize AdviceBot to furnish information, which may be protected by data protection legislation, including inter alia, POPI, regarding your Account to any person we reasonably determine to be seeking a credit reference in good faith for any lawful purpose. 
            </li>
        </ul> 
        <h3 id="collection">2.  COLLECTION OF YOUR PERSONAL INFORMATION</h3>
        <ul style="list-style-type:none;">
            <li>
                2.1.  AdviceBot  collects  personally  identifiable  information,  such  as  your  e-mail  address,  name,  home  or  work  address  or telephone number. AdviceBot also collects anonymous demographic information, which is not unique to you, such as your age, gender, preferences, interests and favorites. 
            </li>
            <li>
                2.2.  There is also information about your computer hardware and software that is automatically collected by AdviceBot. This information can include: your IP address, browser type, domain names, access times and referring Website addresses. This information is used by AdviceBot for the operation of our services, to maintain quality of the services, for marketing purposes, to  provide  general  statistics  regarding  use  of  the  AdviceBot  Website,  for  credit  control  and  in  the  furtherance of AdviceBot other legitimate interests (including transmission of this information to our Affiliates). 
            </li>
            <li>
                2.3.  Please  keep  in  mind  that  if  you  directly  disclose  personally  identifiable  information  or  personally  sensitive  data  through AdviceBot public message boards, this information may be collected and used by others. Note: AdviceBot does not read any of your private online communications. 
            </li>
            <li>
                2.4.  AdviceBot encourages you to review the privacy statements of websites you choose to link to from AdviceBot so that you can understand how those websites collect, use and share your information. AdviceBot is not responsible for the privacy statements or other content on websites outside of the AdviceBot and its family of Websites (including Websites of our Affiliates).
            </li>
        </ul>
        <h3 id="useOfInfo">3.  USE OF YOUR PERSONAL INFORMATION </h3>
        <ul style="list-style-type:none;">
            <li>
                3.1.  AdviceBot collects and uses your personal information to operate the AdviceBot Website and deliver the services you have requested. AdviceBot also uses your personally identifiable information to inform you of other products or services available from AdviceBot and its Affiliates. AdviceBot may also contact you via surveys to conduct research about your opinion of current services or of potential new services that may be offered.
            </li>
            <li>
                3.2.  AdviceBot does not sell, rent or lease its customer lists to third parties. AdviceBot may, from time to time, contact you on behalf of external business partners about a particular offering that may be of interest to you. In those cases, your unique personally identifiable information (e-mail, name, address, telephone number) is not transferred to the third party. In addition, AdviceBot may share data with trusted partners to help us perform statistical analysis, send you email or postal mail, provide customer support, or arrange for deliveries. All such third parties are prohibited from using your personal information except to provide these services to AdviceBot, and they are required to maintain the confidentiality of your information. 
            </li>
            <li>
                3.3.  AdviceBot does not use or disclose sensitive personal information, such as race, religion, or political affiliations, without your explicit consent. 
            </li>
            <li>
                3.4.  AdviceBot keeps track of the Websites and pages our customers visit within AdviceBot, in order to determine what AdviceBot  services  are  the  most  popular.  This  data  is  used  to  deliver  customized  content  and  advertising  within AdviceBot  to customers whose behaviour indicates that they are interested in a particular subject area. 
            </li>
            <li>
                3.5.  AdviceBot Websites will disclose your personal information, without notice, only if required to do so by law or in the good faith belief that such action is necessary to: (a) conform to the provisions of any law in force from time to time or comply with legal process served on AdviceBot or the Website; (b) protect and defend the rights or property of AdviceBot; and, (c) to protect the personal safety of users of AdviceBot, or the public.
            </li>
        </ul>
        <h3 id="cookies">4.  USE OF COOKIES</h3> 
        <ul style="list-style-type:none;">
            <li>
                4.1.  The AdviceBot Website use "cookies" to help you personalize your online experience. A cookie is a text file that is placed on your hard disk by a Web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you. 
            </li>
            <li>
                4.2.  One of the primary purposes of cookies is to provide a convenience feature to save you time. The purpose of a cookie is to tell the web server that you have returned to a specific page. For example, if you personalize AdviceBot pages, or register with AdviceBot  site  or  services,  a cookie  helps  AdviceBot  to  recall  your specific  information  on subsequent visits.  This simplifies the process of recording your personal information, such as billing addresses, shipping addresses, and so on. When you return to the same AdviceBot Website, the information you previously provided can be retrieved, so you can easily use the AdviceBot features that you customized. 
            </li>
            <li>
                4.3.  You have the ability to accept or decline cookies. Most Web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the interactive features of the AdviceBot services or Websites you visit.
            </li>
        </ul>
        <h3 id="security">5.  SECURITY OF YOUR PERSONAL INFORMATION</h3>
        <ul style="list-style-type:none;">
            <li>
                AdviceBot secures your personal information from unauthorized access, use or disclosure. AdviceBot secures the personally identifiable information you provide on computer servers in a controlled, secure environment, protected from unauthorized access, use or disclosure.  
            </li>
        </ul>        
        <h3 id="changes">6.  CHANGES TO THIS STATEMENT OF PRIVACY</h3> 
        <ul style="list-style-type:none;">
            <li>
                AdviceBot will occasionally update this Statement of Privacy to reflect company and customer feedback. AdviceBot encourages  you  to  periodically  review  this  Statement  of  Privacy  to  be  informed  of  how  AdviceBot  is  protecting  your information.
            </li>
        </ul> 
        <h3 id="contact">7.  CONTACT INFORMATION</h3>
        <ul style="list-style-type:none;">
            <li>
                AdviceBot welcomes your comments regarding this Statement of Privacy. If you believe that AdviceBot has not adhered to this Statement, please contact AdviceBot at admin@advicebot.co.za. We will use commercially reasonable efforts to promptly determine and remedy the problem.
            </li>
        </ul>  
    </div>


</body>
</html>