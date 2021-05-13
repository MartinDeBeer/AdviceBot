<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Stylesheets/styles.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="Stylesheets/report.css">

    <title>Savings And Emergency Fund</title>
</head>
<body>
    <h1 style="text-align: center;">Savings And Emergency Fund</h1>
    <p>Savings should be considered a nest egg and a part of an ongoing long-term savings plan with separate shorter goals like college tuition, a new car, holiday etc. <br>
    An emergency fund is a separate savings or bank account used to cover or offset the expense of an unforeseen situation, This fund serves as a safety net, only to be tapped into when a financial crises occurs. <br>
    For me to help you reach your goals I must first do a risk profiling. I have to consider the risk required for the specific return you need, your risk capacity (the risk you can afford to take) and your risk tolerance (how you feel about risk)</p>
    <h3><u>IFAA TIP:</u></h3>
    <p>The savings vehicle is secondary to the savings coal. First determine your goal and the amount you need to save before you start exploring savings or investment products.</p>

    <input type="button" id="haveSavings" value="I have a savings plan" onclick="yesOrNo('haveSavings')">

    <input type="button" value="I don't have a savings plan" id="noSavings" onclick="yesOrNo('noSavings')" >

    <div id="riskProfile" class="extra" style="visibility: hidden;">
        <p>Which bar defines your outlook on risk the best?</p>
        <table>
            <tr>
                <td><input type="button" value="Low Risk"
                id="lowRisk" onclick="tellMore('lowRisk')"></td>
                <td>Potential loss: 0%</td>
                <td>Potential gain: 5%</td>
            </tr>
            <tr>
                <td><input type="button" value="Medium Low" id="medLow" onclick="tellMore('medLow')"></td>
                <td>Potential loss: 3%</td>
                <td>Potential gain: 8%</td>
            </tr>
            <tr>
                <td><input type="button" value="Medium" id="medium" onclick="tellMore('medium')"></td>
                <td>Potential loss: 5%</td>
                <td>Potential gain: 10%</td>
            </tr>
            <tr>
                <td><input type="button" value="Medium High" id="medHigh" onclick="tellMore('medHigh')"></td>
                <td>Potential loss: 10%</td>
                <td>Potential gain: 15%</td>
            </tr>
            <tr>
                <td><input type="button" value="High" id="high" onclick="tellMore('high')"></td>
                <td>Potential loss: 25%</td>
                <td>Potential gain: 35%</td>
            </tr>
        </table>
    </div>
</body>
</html>