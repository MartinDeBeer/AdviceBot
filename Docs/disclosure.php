<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Stylesheets/styles.css">
    <link rel="stylesheet" href="../Stylesheets/docs.css">
    <title>Disclosure Information</title>
    <style>
        #rep{
            text-align: center;
        }
        #rep, #rep th, #rep td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 2px;
        }
        table td{
            padding: 5px;
            max-width: 400px;
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
    <h1 style="text-align: center;">Disclosure Information</h1>

    <p>AdviceBot (Pty) Ltd is a juristic representative of Joroy0082CC t/a Bosch Financial Services which is an authorized Financial Services Provider (FSP number 27368).</p>

    <table>
        <tr>
            <td><b>Full Business and Trade <br> Name of Juristic Representative: </b></td>
            <td>AdviceBot (Pty) Ltd has been mandated as a juristic representative to render financial services on its behalf via the AdviceBot platform</td>
        </tr>
        <tr>
            <td><b>Registration Number: </b></td>
            <td>2020 / 680050 / 07</td>
        </tr>
        <tr>
            <td><b>Full business and Trade Name:</b> </td>
            <td>Joroy0082CC t/a Bosch Financial Services</td>
        </tr>
        <tr>
            <td><b>FSP License Number: </b></td>
            <td>27368</td>
        </tr>
        <tr>
            <td><b>Licensed Financial Services: </b></td>
            <td>Category I</td>
        </tr>
        <tr>
            <td><b>Conditions / Restrictions: </b></td>
            <td>
                <p>1. The FSP must inform the Registrar of any change i.r.o. business information of the FSP
                <p>2. The FSP must at all times maintain the services of any Key Individual and ensure full compliance with Section 8 (4)(b) of the Act</p>
                <p>3. The FSP must within one month of the date contemplated in Section 7 of the Act, inform the Registrar of any change effected to the details as contained in the register</p>
                <p>4. The FSP must not change the name of the business as reflected on the license, unless certain conditions are met andd the Registrar has issued an appropriately amended license</p>
                <p>5. The FSP must at all times ensure that any financial product i.r.o. which the FSP intends to render a financial service is lawfully issued</p>
                <p>A full list of conditions is available on request from the Compliance Officer</p>
            </td>
        </tr>
        <tr>
            <td><b>Registration Number:</b></td>
            <td>2005 / 185247 / 23</td>
        </tr>
        <tr>
            <td><b>Address: </b></td>
            <td>
                7 George du Toit Street <br>
                Universitas <br>
                Bloemfontein <br>
                9301 <br>
            </td>
        </tr>
        <tr>
            <td><b>Telephone: </b></td>
            <td>051 446 0033</td>
        </tr>
        <tr>
            <td><b>Fax Number: </b></td>
            <td>086 686 6552</td>
        </tr>
        <tr>
            <td><b>Website: </b></td>
            <td>https://www.advicebot.co.za </td>
        </tr>
        <tr>
            <td><b>E-mail Address: </b></td>
            <td>admin@advicebot.co.za</td>
        </tr>
    </table>
    <h3>COMPLIANCE DEPARTMENT </h3>
    <table>
        <tr>
            <td><b>Name: </b></td>
            <td>Mr. Roy Banks</td>
        </tr>
        <tr>
            <td><b>Company: </b></td>
            <td>Compliance Trust (Pty) Ltd</td>
        </tr>
        <tr>
            <td><b>Address: </b></td>
            <td>
                The Gables Office Estate <br> 
                Building 8 <br>
                1st Floor <br>
                Cnr JG Strydom and Tennis Road <br>
                Weltevreden Park <br>
                1709 <br>
            </td>
        </tr>
        <tr>
            <td><b>Registration Number: </b></td>
            <td>2013 / 019143 / 07</td>
        </tr>
        <tr>
            <td><b>E-mail: </b></td>
            <td>roy@compliancetrust.co.za</td>
        </tr>
        <tr>
            <td><b>Direct Line: </b></td>
            <td>082 575 6427</td>
        </tr>
        
    </table>
    <h3>KEY INDIVIDUAL</h3>
    <table>
        <tr>
            <td><b>Name: </b></td>
            <td>Mr. Adriaan Bosch</td>
        </tr>
        <tr>
            <td><b>Telephone: </b></td>
            <td>051 446 0033</td>
        </tr>
        <tr>
            <td><b>Fax Number: </b></td>
            <td>086 686 6552</td>
        </tr>
        <tr>
            <td><b>E-mail Address: </b></td>
            <td>admin@advicebot.co.za</td>
        </tr>
    </table>
    <p>Professional indemnity Insurance Cover:  R1 000 000.00</p>
    <p>The FSP or AdviceBot have no interest in any product provider or other financial service provider.</p>
    <p>The FSP or AdviceBot hold no more than 10% shares in any product provider or earned more than 30% of its total income from one specific product supplier.</p>

    <h3>Representative (AdviceBot (Pty) Ltd) Products</h3>

    <table id="rep">
        <tr>
            <th>Category</th>
            <th>Sub - Category</th>
            <th>Category Description</th>
            <th>Advice</th>
            <th>Intermediary - Scripted</th>
            <th>Intermediary - Other</th>
            <th>Services Under Supervision</th>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>Long-Term insurance subcategory A</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>Short-Term Insurance Personal Lines</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>3</td>
            <td>Long - Term Insurance subcategory B1</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>20</td>
            <td>Long-Term Insurance subcategory B2</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>21</td>
            <td>Long-Term Insurance subcategory B2-A</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>22</td>
            <td>Long-Term Insurance subcategory B1-A</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>23</td>
            <td>Short-Term Insurance Personal Lines A1</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>4</td>
            <td>Long-Term Insurance subcategory C</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>5</td>
            <td>Retail Pension Benefits</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>6</td>
            <td>Short-Term Insurance Commercial Lines</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>7</td>
            <td>Pension Funds Benefits</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>8</td>
            <td>Shares</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>10</td>
            <td>Debentures and Securitised Debt</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>14</td>
            <td>participatory Interests In a Collective Investment Scheme</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
        <tr>
            <td>1</td>
            <td>18</td>
            <td>Short-Term Deposits</td>
            <td>X</td>
            <td>-</td>
            <td>X</td>
            <td>-</td>
        </tr>
    </table>



</body>
</html>