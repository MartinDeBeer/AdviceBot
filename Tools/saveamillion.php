<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Automated financial help" />
    <meta name="tags" content="financial help, finance, bot, robot, advice bot, advicebot, money, budget" />
    <meta name="author" content="Webtech Cyber Solutions" />
    <script src="../Scripts/saveamillion.js" type="text/javascript"></script>
    <link href="../Stylesheets/styles.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="../Images/favicon.ico" type="image/x-icon" /> 
    <link href="../Stylesheets/saveamillion.css" type="text/css" rel="stylesheet" />
    <title>Save a Million</title>
</head>
<body>
    <h1>Save a million</h1>
    <div id="million">
        <table id = "saveAMil">
            <th></th>
            <tr>
                <td>Current Amount Already Saved: </td>
                <td><input type="text" class="input" id = 'amountSaved'></td>
            </tr>
            <tr>
                <td>New Monthly Savings: </td>
                <td><input type="text" class="input" id = 'monthlySavings'></td>
            </tr>
            <tr>
                <td>Annual Interest: </td>
                <td><input type="text" class="input" id = 'interest'></td>
            </tr>
            <tr>
                <td>Goal: </td>
                <td><input type="text" class="input" id = 'goal'></td>
            </tr>
            <tr>
                <td><input type="button" value="Calculate" id="calculate" onclick="calculateTime()"></td>
            </tr>
        </table>
        <div id="result" style="visibility: hidden;">
            It will take you <span id = 'years'></span> years and <span id="months"></span> months to save <span id="goalOutput"></span>
        </div>
    </div>
</body>
</html>