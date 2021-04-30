<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../Scripts/retirementTool.js"></script>
    <link href="../Stylesheets/styles.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="../Images/favicon.ico" type="image/x-icon" />
    <link href="../Stylesheets/retirementTool.css" type="text/css" rel="stylesheet" />
    <title>Early retirement tool</title>
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
    <h1 style="text-align: center;">Early Retirement Calculator</h1>
    
    <div id="retirement">
        <div id="div1">
            <h2 id="follow">Follow the steps and plan your early retirement.</h2>
            <h3 class="step">Step 1</h3>
            <table id="currentInvestments">
                <tr>
                    <th>Current Investments</th>
                </tr>
                <tr>
                    <td>Bank Account Balance</td>
                    <td>R<input id="bank" type="text"></td>
                </tr>
                <tr>
                    <td>Retirement / Pension</td>
                    <td>R<input id="pension" type="text"></td>
                </tr>
                <tr>
                    <td>Endowment Policies</td>
                    <td>R<input id="endowment" type="text"></td>
                </tr>
                <tr>
                    <td>Unit Trust / Shares</td>
                    <td>R<input id="shares" type="text"></td>
                </tr>
                <tr>
                    <td>Other</td>
                    <td>R<input id="other" type="text"></td>
                </tr>
                <tr>
                    <td><input class="btn" type="button" id="currentInv" onclick="calcCurrInv()" value="Calculate Current Investments"></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>R<input id="total" type="text" disabled></td>
                </tr>
                <tr>
                    <td>Withdrawal rate</td>
                    <td>4%</td>
                </tr>
                <tr>
                    <td>Monthly income from investment</td>
                    <td>R<input id="monthlyIncome" type="text"></td>
                </tr>
                <tr>
                    <td>Yearly income from investment</td>
                    <td>R<input id="yearlyIncome" type="text"></td>
                </tr>
            </table>
            <hr>
            <h3 class="step">Step 2</h3>
            <table id="expenses">
                <tr>
                    <th>Current Expenses</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Monthly</td>
                    <td>R<input id="monthlyExpenses" type="text"></td>
                </tr>
                <tr>
                    <td>Yearly</td>
                    <td>R<input id="yearlyExpenses" type="text" disabled></td>
                </tr>
            </table>
            <button class="btn" onclick="calcCurrentExp()">Calculate Expenses</button>

        </div>
        <div id="div2">

            <!-- Ages -->
            <h3 class="step">Step 3</h3>
            <table id="ages">
                <tr>
                    <th>Ages</th>
                </tr>
                <tr>
                    <td>Age Now</td>
                    <td>Y<input id="currentAge" type="text"></td>
                </tr>
                <tr>
                    <td>Early Retirement Age</td>
                    <td>Y<input id="earlyRetirementAge" type="text" disabled></td>
                </tr>
            </table>
            <hr>
            <!-- Amount needed for early retirement -->
            <h3 class="step">Step 4</h3>
            <table id="earlyRetirement">
                <tr>
                    <td>Amount needed to retire early</td>
                    <td>R<input id="amountNeeded" type="text" disabled></td>
                </tr>
            </table>
            <button class="btn" onclick="calculateEarlyAge()">Calculate how much you need to retire early</button>
            <hr>

            <!-- New Investments -->
            <h3 class="step">Step 5</h3>
            <table id="newInv">
                <tr>
                    <th>New investments</th>
                </tr>
                <tr>
                    <td>Return Rate</td>
                    <td>%<input id="returnRate" type="text"></td>
                </tr>
                <tr>
                    <td>Monthly Investment</td>
                    <td>R<input id="monthlyInvestment" type="text"></td>
                </tr>
                <tr>
                    <td>Lump Sum Investment</td>
                    <td>R<input id="lumpSum" type="text"></td>
                </tr>
                <tr>
                    <td>Yearly Additional Investment</td>
                    <td>R<input id="yearlyAddInvestment" type="text" disabled></td>
                </tr>
            </table>
            <button class="btn" onclick="calculateAddInvestment()" onclick="calculateTime()">Calculate Yearly Additional Investment</button>
        </div>
    </div>
</body>
</html>
