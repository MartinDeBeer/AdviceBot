<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permission</title>
    <style>
        table, td {
            border-collapse: collapse;
            border: 1px solid black;
        }
        td{
            width: 300px;
        }
        input{
            border: none;
        }
    </style>
</head>
<body>
    <form action="../dataPages/autoMail.php" method="post">
        <div class="logo">
            <a href="index.php"><img src="../Images/Logo.png"/></a>
        </div>
        <h1 style="text-align: center;">Consent Form</h1>
        <div id="consent">
            <table>
                <tr>
                    <td>Full names of client</td>
                    <td><input name="firstName" style="width: 300px;" placeholder="First Name" required type="text"></td>
                    <td><input name="lastName" style="width: 300px;" placeholder="Surname" required type="text"></td>
                </tr>
                <tr>
                    <td>Client Email Address</td>
                    <td><input name="emailAddress" style="width: 300px;" placeholder="Email Address" required type="text"></td>
                </tr>
                <tr>
                    <td>ID Number</td>
                    <td><input name="idNumber" style="width: 300px;" placeholder="13 Digit ID Number"  required type="text"></td>
                </tr>
                <tr>
                    <td>Full names of Spouse</td>
                    <td><input name="spouseFirst" style="width: 300px;" placeholder="First Name" type="text"></td>
                    <td><input name="spouseLast" style="width: 300px;" placeholder="Surname" type="text"></td>
                </tr>
                <tr>
                    <td>Spouse ID Number</td>
                    <td><input name="spouseId" style="width: 300px;" placeholder="13 Digit ID Number" type="text"></td>
                </tr>
            </table>
        </div>
        <h3>I acknowledge the following:</h3>
        <ol>
            <li>Appropriate financial advice can only be furnished after full and proper disclosure of relevant financial and private information about the client</li>
            <li>
            Such information is furthermore required to:
            <ol>
                <li>Determine my financial situation, financial product experience and financial needs and objectives</li>
                <li>Acquire, maintain and service any financial product or to render related intermediary services.</li>
            </ol>
            </li>
            <li>
            Such information may include any information relating to, or interest in:
            <ol>
                <li>Long-term insurance</li>
                <li>Collective investment schemes</li>
                <li>Pension funds</li>
                <li>Any other financial product or service</li>
            </ol>
            </li>
            <li>
            My/our interest will be best served for stated purpose if any and all such information is provided by:
            <ol>
                <li>The Financial Services Exchange (Pty) Ltd, trading as Astute, or any other institution providing a mechanism for the transmission of such information, or</li>
                <li>any other authorized financial services provider</li>
            </ol>
            </li>
        </ol>
        <p>I/we herewith give consent to the Financial Service Provider and / or his / her / its authorized user(s) below to obtain such information through Astute.</p>
        <table>
            <tr>
                <td>Financial Service Provider</td>
                <td>Joroy0082CC</td>
            </tr>
            <tr>
                <td>FSP License Number</td>
                <td>27368</td>
            </tr>
            <tr>
                <td>Authorized user</td>
                <td>A. Bosch (Key person)</td>
            </tr>
        </table>
        <p>I/we confirm that the Financial Service Provider and / or his / her / its authorized user(s) will be acting on my/our behalf and I/we hereby waive any right to privacy only for the stated purpose. All information so obtained must be treated as confidential by the Financial Service Provider and / or his / her / its authorized user(s) and may not be made public in any way without my/our written consent.</p>

        <p>This consent to obtain information will remain effective until cancelled by me/us in writing, or, </p>

        <p>This consent shall remain valid for a period of <b>6 months</b> from the date of my signature</p>

        <p id="date"></p>
        <input type="checkbox" id="accept" required>
        <label for="accept">By clicking the checkbox I accept to the mentioned terms and conditions</label>
        <input type="submit" style="color: blue; font-weight: bold; font-size: large; " value="Submit" name="permission">
    </form>
    
</body>
</html>